# -*- coding: utf-8 -*-

import datetime
#import random

import logging

from dateutil.relativedelta import relativedelta
from simplejson import dumps

from pylons import response
from pylons import config
#from pylons.controllers.util import abort, redirect

from pylons.i18n.translation import _

from autosearch.lib.cache import pre_cache

from autosearch.lib.base import BaseController, render
from autosearch.lib.base import Session
from autosearch.lib.parser import *

from autosearch.model.currency_rate import Currency, CurrencyRate
from autosearch.model.auto import *
from autosearch.model.model import Model
from autosearch.model.mark import Mark
#from autosearch.model.url import Url

from sqlalchemy import desc, asc
from sqlalchemy.orm import eagerload, contains_eager
from sqlalchemy import and_, or_

from urllib import unquote_plus

def url_decode(url):
    return unquote_plus(url.encode('utf-8')).decode('utf-8')

#from pylons.i18n import get_lang, set_lang


log = logging.getLogger(__name__)

#                url:
#                m-(mark)
#                y-(izlaiduma gads)
#                c-(dzinēja tilpums)
#                f-(fuel)
#               u-(ātrumi) - feature
#                g-(ātrumkārba)
#               d-(piedziņa) - feature
#                k-(Nobraukums)
#                t-(tehniskā)
#                o-(virsbūves tips)
#                l-(place) - feature
#                r-(color) - feature
#                p-(cena)

class SearchController(BaseController):

    _params = None

#    def __before__(self):
#        self.auto_q = Session.query(Auto)\
#            .join(Auto.model)\
#            .join(Model.mark)\
#            .group_by(Auto.id)\
#            .options(eagerload('image'))\
#            .options(eagerload('url'))\
#            .filter(Auto.added > datetime.date.today() - datetime.timedelta(7)).order_by(desc(Auto.added))
#        self.mark_q = Session.query(Mark).options(eagerload('model'))\
#            .filter(Mark.last_added > datetime.date.today() - datetime.timedelta(7))\
#            .filter(Model.last_added > datetime.date.today() - datetime.timedelta(7))
#        self.currency_q = Session.query(CurrencyRate).order_by(desc(CurrencyRate.added)).limit(len(Currency().values))


    def __before__(self):
        self.auto_q = Session.query(Auto)\
            .outerjoin(Model).options(contains_eager('model'))\
            .outerjoin(Mark).options(contains_eager('model.mark'))\
            .options(eagerload('url'))\
            .options(eagerload('image'))\
            .filter(Auto.added >= datetime.date.today() - datetime.timedelta(7))
        self.mark_q = Session.query(Mark)\
            .outerjoin(Model).options(contains_eager('model'))\
            .filter(Mark.last_added >= datetime.date.today() - datetime.timedelta(7))\
            .filter(Model.last_added >= datetime.date.today() - datetime.timedelta(7))\
            .order_by(asc(Mark.name))\
            .order_by(asc(Model.name))
        self.currency_q = Session.query(CurrencyRate).order_by(desc(CurrencyRate.added)).limit(len(Currency().values))

    @pre_cache(expire=60*60*12, type='file')
    def index(self, lang=None):
        return render('search/main.html')

    @pre_cache(expire=60*30, type='file')
    def params(self, lang=None):
        response.headers['Content-Type'] = 'application/json'
        self._load_params()
        return dumps(self._params)

    @pre_cache(expire=60*3, type='memory')
    def search(self, lang=None, keyword=None):
        keyword = url_decode(keyword)
        result = self._get(self.auto_q.order_by(desc(Auto.added), desc(Auto.id)), keyword)
        result['type'] = 'first'
        return dumps(result)
            
    @pre_cache(expire=60*3, type='memory')
    def next(self, lang=None, id=None, keyword=None):
        query = self.auto_q.order_by(desc(Auto.added), desc(Auto.id))
        query = query.filter(Auto.id<id)
        result = self._get(query, keyword)
        result['type'] = 'next'
        return dumps(result)

    @pre_cache(expire=60*3, type='memory')
    def prev(self, lang=None, id=None, keyword=None):
        query = self.auto_q.order_by(asc(Auto.added), asc(Auto.id))
        query = query.filter(Auto.id>id)
        result = self._get(query, keyword)
        result['type'] = 'prev'
        return dumps(result)

    @pre_cache(expire=60*3, type='memory')
    def total(self, lang=None, keyword=None):
        return dumps(self._count(self.auto_q, keyword))

    @pre_cache(expire=60*3, type='memory')
    def total_new(self, lang=None, id=None, keyword=None):
        query = self.auto_q.filter(Auto.id>id)
#        return dumps({'t':5})
        return dumps(self._count(query, keyword))

    def _get(self, query, keyword=None):
#        get values by keyword
        keyword = url_decode(keyword)
        response.headers['Content-Type'] = 'application/json'
        if keyword is None or keyword[1:]=='':
            return {
                'total': query.count(),
                'auto': self._prepare_auto(query.limit(12))
            }

        try:
            params = self._parse_params(keyword[1:])
        except UrlError as msg:
            return {'error': 'UrlError', 'msg': str(msg)}

        query = self._create_query(query, params)
        if query:
            return {
                'total': query.count(),
                'auto': self._prepare_auto(query.limit(12))
            }
        else:
            return {
                'total': 0,
                'auto': False
            }
            
    def _count(self, query, keyword=None):
#        count total values by keyword
        keyword = url_decode(keyword)
        response.headers['Content-Type'] = 'application/json'
        if keyword is None or keyword[1:]=='':
            return {
                't': query.count()
            }

        try:
            params = self._parse_params(keyword[1:])
        except UrlError as msg:
            return {'error': 'UrlError', 'msg': str(msg)}

        query = self._create_query(query, params)
        if query:
            return {
                't': query.count()
            }
        else:
            return {
                't': 0
            }

    def _create_query(self, query, params):
        par = dict([name, {
            'type': v['type'],
            'value': p['value'],
            'name': v['name']
        }] for name, v in self._params.iteritems() for p in params if p['url']==v['url'])
        for p, v in par.iteritems():
            if v['type']=='mark':
                filter = []
                for sub in v['value']:
                    if sub['sub']:
                        filter.append(and_(Mark.id==sub['main'], Model.id.in_(sub['sub'])))
                    else:
                        filter.append(Mark.id==sub['main'])

                query = query.filter(or_(*filter))

            elif v['name']=='year':
                if v['value']['min']:
                    query = query.filter(getattr(Auto, v['name'])>=datetime.date(year=v['value']['min'], month=1, day=1))
                if v['value']['max']:
                    query = query.filter(getattr(Auto, v['name'])<=datetime.date(year=v['value']['max'], month=1, day=1))

            elif v['name']=='tehpassport':
#                tehpassport slider, this is important, so i put it here
                if v['value']['min']:
                    query = query.filter(Auto.tehpassport>=(datetime.date.today()+relativedelta(months=+v['value']['min'])))
                    if v['value']['max']:
                        query = query.filter(Auto.tehpassport<=(datetime.date.today()+relativedelta(months=+v['value']['max'])))
                elif v['value']['max']==0:
                    query = query.filter(Auto.tehpassport_is==False)
                elif v['value']['max']:
                    query = query.filter(or_(Auto.tehpassport_is==False, Auto.tehpassport<=(datetime.date.today()+relativedelta(months=+v['value']['max']))))

            elif v['name']=='price':
                """filter with currency of price"""
                rates = self._params['currency']['rates']
                currency = self._params['currency']['currency_id']
                filter = []
                for i in range(len(currency)):
                    if v['value']['min'] and v['value']['max']:
                        filter.append(and_(
                            Auto.currency==i,
                            getattr(Auto, v['name'])<=v['value']['max']/rates[currency[i]],
                            getattr(Auto, v['name'])>=v['value']['min']/rates[currency[i]]
                        ))
                    elif v['value']['min']:
                        filter.append(and_(
                            Auto.currency==i,
                            getattr(Auto, v['name'])>=v['value']['min']/rates[currency[i]]
                        ))
                    elif v['value']['max']:
                        filter.append(and_(
                            Auto.currency==i,
                            getattr(Auto, v['name'])<=v['value']['max']/rates[currency[i]]
                        ))
                query = query.filter(or_(*filter))
            
            elif v['type']=='chooser':
                query = query.filter(getattr(Auto, v['name']).in_(v['value']))
                
            elif v['type']=='slider':
                if v['value']['min']:
                    query = query.filter(getattr(Auto, v['name'])>=v['value']['min'])
                if v['value']['max']:
                    query = query.filter(getattr(Auto, v['name'])<=v['value']['max'])
        return query
            

    def _parse_params(self, url):
        """
        parse search params
        """
        self._load_params()
        params = self._params
        for i, p in enumerate(params['mark']['value']):
            params['mark']['value'][i]['sub'] = p['models']
            del params['mark']['value'][i]['models']
        self._parser = Parser([v for name, v in params.iteritems()])
        return self._parser.parse_url(url)

    def _load_params(self):
        if self._params is None:
            self._params = {
                'mark': {
                    'name': 'mark',
                    'url': 'm',
                    'type': 'mark',
                    'value': [{
                        'id': mark.id,
                        'name': mark.name,
                        'models': [{'id': m.id, 'name': m.name} for m in mark.model],
                    } for mark in self.mark_q.all()]
                },
                'year': {
                    'name': 'year',
                    'url': 'y',
                    'type': 'slider',
                    'value': {
                        'min': 1950,
                        'max': 2011
                    },
                },
                'engine': {
                    'name': 'engine',
                    'url': 'c',
                    'type': 'slider',
                    'value': {
                        'min': .2,
                        'max': 8,
                        'type': 'float'
                    },
                },
                'engine_type': {
                    'name': 'engine_type',
                    'url': 'f',
                    'type': 'chooser',
                    'value': [_(d) for d in EngineType().values]
                },
                'gear_type': {
                    'name': 'gear_type',
                    'url': 'g',
                    'type': 'chooser',
                    'value': [_(d) for d in GearType().values]
                },
                'mileage': {
                    'name': 'mileage',
                    'url': 'k',
                    'type': 'slider',
                    'value': {
                        'min': 10000,
                        'max': 1000000
                    },
                },
                'tehpassport': {
                    'name': 'tehpassport',
                    'url': 't',
                    'type': 'slider',
                    'value': {
                        'min': 0,
                        'max': 12,
                        'min_str': _('none')
                    },
                },
                'car_type': {
                    'name': 'car_type',
                    'url': 'o',
                    'type': 'chooser',
                    'value': [_(d) for d in CarType().values]
                },
                'place': {
                    'name': 'place',
                    'url': 'l',
                    'type': 'chooser',
                    'value': [_(d) for d in Place().values]
                },
                'price': {
                    'name': 'price',
                    'url': 'p',
                    'type': 'slider',
                    'value': {
                        'min': 100,
                        'max': 50000,
                        'value': [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000,
                            1200, 1500, 1800, 2000,
                            2500, 3000, 3500, 4000, 4500, 5000,
                            6000, 7000, 8000, 9000, 10000, 12000,
                            15000, 20000, 25000, 30000, 40000, 50000,
                        ]
                    },
                },
                'currency': {
                    'name': 'currency',
                    'url': 'p',
                    'type': 'select',
                    'value': [_(d) for d in Currency().values],
                    'currency_id': [d for d in Currency().values],
                    'rates': dict([[r.currency, r.rate] for r in self.currency_q.all()])

                },
            }

    def _prepare_auto(self, auto):
        
        return [{
            'id': a.id,
            'mark': a.model.mark.name,
            'model': a.model.name,
#            'url': a.url.url,
            'urls': [url.url for url in a.url],
#            'image': random.sample([{'src': '/'+config['pylons.paths']['image_cache_files']+'/'+i.path} for i in a.image], 1 if len(a.image)>1 else len(a.image)) if a.image else None,
            'image': [{'src': '/'+config['pylons.paths']['image_cache_files']+'/'+i.path, 'url': i.url} for i in a.image],
#            'image': None,
            'added': str(a.added),#self._time_diff(a.added),
            'year': a.year.year,
            'engine': a.engine,
            'engine_type': _(a.engine_type),
            'gearbox': a.gearbox,
            'gear_type': _(a.gear_type),
            'drive_type': _(a.drive_type),
            'mileage': a.mileage,
            'tehpassport_is': a.tehpassport_is,
            'tehpassport': str(a.tehpassport) if a.tehpassport else None,
            'car_type': _(a.car_type),
            'place': _(a.place),
            'color': a.color,
            'price': a.price,
            'currency': _(a.currency),
            'telephone': a.telephone,
        } for a in auto]

#    def _time_diff(self, added):
#        dif = datetime.datetime.now()-added
#        deltas = {}
#        deltas['years'] = dif.days/365
#        deltas['months'] = (dif.days - deltas['years']*365)/30
#        deltas['days'] = dif.days - deltas['months']*30 - deltas['years']*365
#        deltas['hours'] = dif.seconds/(60*60)
#        deltas['minutes'] = (dif.seconds - deltas['hours']*60*60)/60
#        deltas['seconds'] = dif.seconds - deltas['minutes']*60 - deltas['hours']*60*60
#        for p in ('years', 'months', 'days', 'hours', 'minutes', 'seconds'):
#            d = int(deltas[p])
#            if abs(d)>0:
#                return ' '.join(['before' if d>0 else 'until', str(abs(d)), p[:-1] if str(abs(d))[-1]=='1' and str(abs(d))[-2:]!='11' else p])


#this variable is unuseful, fucking hack for translations
translations = [
    [_('Gasoline'), _('Gas'), _('Diesel'), _('Hybrid')],
    [[_('Manual'), _('Auto')]],
    [[_('Rear'), _('Front'), _('Four')]],
    [[_('SUV'), _('Hatchback'), _('Cabriolet'),
        _('Coupe'), _('Minibus'), _('Minivan'), _('Pickup'), _('Sedan'), _('Universal')]],
    [[_('Riga'), _('Riga dis.'), _('Jurmala dis.'), _('Aizkraukle dis.'), _('Aluksne dis.'),
        _('Balvi dis.'), _('Bauska dis.'), _('Cesis dis.'), _('Daugavpils dis.'), _('Dobele dis.'),
        _('Gulbene dis.'), _('Jelgava dis.'), _('Jekabpils dis.'), _('Kraslava dis.'), _('Kuldiga dis.'),
        _('Liepaja dis.'), _('Limbazi dis.'), _('Ludza dis.'), _('Madona dis.'), _('Ogre dis.'),
        _('Preili dis.'), _('Rezekne dis.'), _('Saldus dis.'), _('Talsi dis.'), _('Tukums dis.'),
        _('Valka dis.'), _('Valmiera dis.'), _('Ventspils dis.')]],
    [[_('LVL'), _('USD'), _('EUR')]],
]