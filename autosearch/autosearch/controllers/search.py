# -*- coding: utf-8 -*-

import datetime
import random

import logging

from pylons import request, response, session, tmpl_context as c, url
from pylons import config
from pylons.controllers.util import abort, redirect

from pylons.i18n.translation import _

from autosearch.lib.base import BaseController, render

from autosearch.lib.base import Session
from autosearch.model.auto import *
from autosearch.model.model import Model
from autosearch.model.mark import Mark

from sqlalchemy import desc

from simplejson import dumps

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


    def __before__(self):
        self.auto_q = Session.query(Auto)

    def index(self):
        # Return a rendered template
        #return render('/search.mako')
        # or, return a response
#        return 'Hello World'
        c.auto = self._prepare_auto(self.auto_q.order_by(desc(Auto.added)).limit(20))
        return render('search/car_list.html')

    def search(self, keyword):
        c.keyword = keyword
        return render('search/main.html')

    def total(self, keyword):
        return self._parse_params(keyword[0:-5])

    def _parse_params(self, url):
        """
        parse search params
        """
        
        self._load_params()
#        print self._params
        format_param = dict([[v['url'], name] for name, v in self._params.iteritems()])
#        log.debug(format_param)
        log.debug(url)
        
#
#        p = params.split('/')
#        log.debug(p)

    def params(self):
        self._load_params()
        return dumps(self._params)
    
    def _load_params(self):
        if self._params is None:
            self._params = {
                'mark': {
                    'url': 'm',
                    'type': 'mark',
                    'value': [{
                        'id': mark.id,
                        'name': mark.name,
                        'models': [{'id': m.id, 'name': m.name} for m in mark.model],
                    } for mark in Session.query(Mark).all()]
                },
                'year': {
                    'url': 'y',
                    'type': 'slider',
                    'value': {
                        'min': 1950,
                        'max': 2011
                    },
                },
                'engine': {
                    'url': 'c',
                    'type': 'slider',
                    'value': {
                        'min': .2,
                        'max': 8
                    },
                },
                'engine_type': {
                    'url': 'f',
                    'type': 'chooser',
                    'value': [_(d) for d in EngineType().values]
                },
                'gear_type': {
                    'url': 'g',
                    'type': 'chooser',
                    'value': [_(d) for d in GearType().values]
                },
                'mileage': {
                    'url': 'k',
                    'type': 'slider',
                    'value': {
                        'min': 1000,
                        'max': 100000
                    },
                },
                'tehpassport': {
                    'url': 't',
                    'type': 'slider',
                    'value': {
                        'min': 0,
                        'max': 12
                    },
                },
                'car_type': {
                    'url': 'o',
                    'type': 'chooser',
                    'value': [_(d) for d in CarType().values]
                },
                'place': {
                    'url': 'l',
                    'type': 'chooser',
                    'value': [_(d) for d in Place().values]
                },
                'price': {
                    'url': 'p',
                    'type': 'slider',
                    'value': {
                        'min': 100,
                        'max': 10000
                    },
                },
    #            'currency': {
    #                'url': 'p',
    #                'value': [_(d) for d in Currency().values]
    #            },
            }

    def _prepare_auto(self, auto):
        
        return [{
            'mark': a.model.mark.name,
            'model': a.model.name,
            'url': a.url.url,
            'image': random.sample([{'src': '/'+config['pylons.paths']['image_cache_files']+'/'+i.path} for i in a.image], 1 if len(a.image)>1 else len(a.image)) if a.image else None,
#            'image': None,
            'added': self._time_diff(a.added),
            'year': a.year.year,
            'engine': a.engine,
            'engine_type': a.engine_type,
            'gearbox': a.gearbox,
            'gear_type': a.gear_type,
            'drive_type': a.drive_type,
            'mileage': a.mileage,
            'tehpassport_is': a.tehpassport_is,
            'tehpassport': a.tehpassport,
            'car_type': a.car_type,
            'place': a.place,
            'color': a.color,
            'price': a.price,
            'currency': a.currency,
            'telephone': a.telephone,
        } for a in auto]

    def _time_diff(self, added):
        dif = datetime.datetime.now()-added
        print dif.days, dif.seconds
        deltas = {}
        deltas['years'] = dif.days/365
        deltas['months'] = (dif.days - deltas['years']*365)/30
        deltas['days'] = dif.days - deltas['months']*30 - deltas['years']*365
        deltas['hours'] = dif.seconds/(60*60)
        deltas['minutes'] = (dif.seconds - deltas['hours']*60*60)/60
        deltas['seconds'] = dif.seconds - deltas['minutes']*60 - deltas['hours']*60*60
        for p in ('years', 'months', 'days', 'hours', 'minutes', 'seconds'):
            d = int(deltas[p])
            if abs(d)>0:
                return ' '.join(['before' if d>0 else 'until', str(abs(d)), p[:-1] if str(abs(d))[-1]=='1' and str(abs(d))[-2:]!='11' else p])


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