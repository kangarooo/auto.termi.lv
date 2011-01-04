# -*- coding: utf-8 -*-

import datetime
import random

import logging

from pylons import request, response, session, tmpl_context as c, url
from pylons import config
from pylons.controllers.util import abort, redirect

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

    def __before__(self):
        self.auto_q = Session.query(Auto)

    def index(self):
        # Return a rendered template
        #return render('/search.mako')
        # or, return a response
#        return 'Hello World'
        c.auto = self._prepare_auto(self.auto_q.order_by(desc(Auto.added)).limit(10))
        return render('search/car_list.html')

    def search(self, keyword):
        print keyword
        c.keyword = keyword
        return render('search/main.html')

    def params(self):
        return dumps({
            'marks': [{
                'id': mark.id,
                'name': mark.name,
                'models': [{'id': m.id, 'name': m.name} for m in mark.model],
            } for mark in Session.query(Mark).all()],
            'engine_type': [d for d in EngineType().values],
            'gear_type': [d for d in GearType().values],
            'car_type': [d for d in CarType().values],
            'place': [d for d in Place().values],
            'currency': [d for d in Currency().values],
        })
    
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
