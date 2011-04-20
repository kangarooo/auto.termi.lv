#!/usr/bin/python 
# -*- coding: utf-8 -*-
import os
import sys
import datetime
import Image as ImageManipulator
import urllib
import random
import string

PATH = os.path.realpath(os.path.dirname(sys.argv[0]))

sys.path.append(PATH+'/../autosearch')

from paste.deploy import appconfig 
from autosearch.config.environment import load_environment

conf     = appconfig('config:'+PATH+'/../autosearch/'+('development.ini' if str(sys.argv[1])=='1' else 'production.ini'))
config = load_environment(conf.global_conf, conf.local_conf)


from autosearch.model.meta import Session
from autosearch.model.mark import Mark
from autosearch.model.model import Model
from autosearch.model.auto import *
from autosearch.model.url import Url
from autosearch.model.url_content import UrlContent
from autosearch.model.image import Image
from sqlalchemy import desc

from sqlalchemy.orm import contains_eager

#from urlparse import urlparse
#from HtmlParser import HtmlParser

from parse.ParserParams import SEARCH_VALUES, SEARCH_PARAMS

import parse.logger
import parse.Parse
log = parse.logger.Logger(sys.argv[2], "parse urls")

#                m-(mark)
#                y-(izlaiduma gads)
#                c-(dzinēja tilpums)
#                g-(ātrumkārba)
#                f-(fuel)
#                k-(Nobraukums)
#                t-(tehniskā)
#                o-(virsbūves tips)
#                p-(cena)


marks = [{'id': mark.id, 'name': mark.name} for mark in Session.query(Mark).all()]
for mark in marks:
    SEARCH_PARAMS[0]['params']['possible'].append(SEARCH_VALUES[mark['name']] if mark['name'] in SEARCH_VALUES else mark['name'])


class SaveCar(parse.Parse.ParseCar):
    
    def __init__(self, p, session):
        super(SaveCar, self).__init__(p)
        self.session = session

    def get_params(self, url):
        res = super(SaveCar, self).get_params(url.url, url.url_content.content)

        url.url_content.error = unicode(';'.join(res['errors']))
        url.url_content.parsed = True
        self.session.flush()
        if not res['parsed']:
            return None

        self.add_auto(res['new_car'], url)

    def add_auto(self, values, url):
        values['model'] = unicode(values['model'])
        mark_id = marks[values['mark']]['id']
        model_q = self.session.query(Model).filter_by(mark_id=mark_id, name=values['model'])
        if model_q.count()>0:
            model = model_q.one()
            model.last_added = datetime.datetime.now()
        else:
            model = Model(last_added=datetime.datetime.now(), name=values['model'], order=0, published=False, total=0, mark_id=mark_id)
            self.session.add(model)
        mark = self.session.query(Mark).filter_by(id=model.mark_id).one()
        mark.last_added = datetime.datetime.now()

        self.session.flush()

        auto = Auto(
            added = datetime.datetime.now(),
            model_id = model.id,
            year = values['year'],
            engine = values['engine'],
            engine_type = values['engine_type'],
            gearbox = values['gearbox'],
            gear_type = values['gear_type'],
            drive_type = values['drive_type'],
            mileage = values['mileage'],
            tehpassport_is = values['tehpassport_is'] if 'tehpassport_is' in values else None,
            tehpassport = values['tehpassport'] if 'tehpassport' in values else None,
            car_type = values['car_type'],
            place = values['place'],
#            color = values['color'],
            price = values['price'],
            currency = values['currency'],
            telephone = values['telephone'],
            published = True,
            correct = True,
#            url_id = url.id
        )
        self.session.add(auto)
        self.session.flush()
        url.auto_id = auto.id;
        self.add_images(values['images'], auto)

    def add_images(self, images, auto):
        if images:
            for img in images:
                try:
                    img_path = self._save_image(img)
                except:
                    continue
                self.session.add(Image(
                    added=datetime.datetime.now(),
                    auto_id=auto.id,
                    url=unicode(img),
                    path=img_path
                ))
                self.session.flush()

    def _save_image(self, url):
        extension = url.split('.')[-1]
        path = os.path.join(config['pylons.paths']['static_files'], config['pylons.paths']['image_cache_files'])
        while True:
            tmpfile = os.path.join(path, self._random(10)+'.'+extension)
            if not os.path.exists(tmpfile):
                break

        open(tmpfile, "w").write(urllib.urlopen(url).read())
        while True:
            path_url = self._random_list(1, 6)
            file_dir = '/'.join(path_url)
            file = self._random(1)
            if not os.path.exists(os.path.join(path, file_dir, file+'.jpg')):
                break
        if not os.path.exists(os.path.join(path, file_dir)):
            os.makedirs(os.path.join(path, file_dir), 0755)
        size = 150, 120
        im = ImageManipulator.open(tmpfile)
        im.thumbnail(size)
        im.save(os.path.join(path, file_dir, file+'.jpg'), "JPEG")
        os.remove(tmpfile)
        return os.path.join(file_dir, file+'.jpg')
        
    def _random_list(self, l, d):
        return [self._random(l) for x in range(d)]

    def _random(self, len):
        return ''.join(random.choice(string.ascii_letters) for x in range(len))




session = Session()
url_q = session.query(Url).outerjoin(UrlContent).options(contains_eager('url_content'))

parser = SaveCar(SEARCH_PARAMS, session)


for url in url_q.filter(UrlContent.parsed==False).order_by(desc(Url.added)).limit(10):
    try:
        parser.get_params(url)
        session.commit()
    except:
        session.rollback()
        raise
    


    






#    out = l.tostring(s, encoding=unicode)
#    codecs.open(PATH+'/'+file+'-parse.html', encoding='utf-8', mode='w').write(out)
