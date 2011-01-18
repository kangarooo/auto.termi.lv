#!/usr/bin/python 
# -*- coding: utf-8 -*-
import os
import sys
import datetime
import Image as ImageManipulator
import urllib
import random
import string
import logging

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
from autosearch.model.image import Image
from sqlalchemy import desc

from urlparse import urlparse
from HtmlParser import HtmlParser

from ParserParams import SEARCH_VALUES, SEARCH_PARAMS

LOG_FILENAME = sys.argv[2]
logger = logging.getLogger("get urls parser")
logger.setLevel(logging.DEBUG)
fh = logging.FileHandler(LOG_FILENAME)
fh.setLevel(logging.DEBUG)
fh.setFormatter(logging.Formatter("%(asctime)s - %(levelname)s - %(message)s"))
logger.addHandler(fh)

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


class Parse:

    def __init__(self, p):
        self.search_params = p

    def get_params(self, url):
        urlparams = urlparse(url.url)
        html = HtmlParser(url.content, urlparams.scheme+'://'+urlparams.netloc)
        errors = []
        results = []
        for i in range(len(self.search_params)):
            param = self.search_params[i]
            if 'eval' in param:
                eval_param = param['eval'].split('.')
                if len(eval_param)==2:
                    param[eval_param[0]][eval_param[1]] = eval(param['eval_string'])
            res = html.get(param['possible'], param['params'])
            if res is None:
                errors.append(' '.join(param['possible']))
                if 'critical' in param and not param['critical']:
                    results.append({'result': None})
                else:
    #                write errors
                    logger.info('error: '+url.url+': '+(';'.join(errors)))
                    url.error = ';'.join(errors)
                    url.parsed = True
                    Session.commit()
                    return None
            else:
                results.append(res)
        new_car = {}
        for r in range(len(results)):
            if 'tehpassport'==self.search_params[r]['name']:
                if 'type' in results[r]:
                    if results[r]['type'] == 'possible':
                        new_car['tehpassport_is'] = False if results[r]['result'] is 0 else True
                        new_car['tehpassport'] = None
                    elif results[r]['type'] == 'regex':
                        new_car['tehpassport_is'] = None
                        new_car['tehpassport'] = results[r]['result']
            else:
                new_car[self.search_params[r]['name']] = results[r]['result']
            new_car['images'] = html.get_image()
#        return None
        self.add_auto(new_car, url)
        logger.info('parsed: '+url.url)
        url.error = unicode(';'.join(errors))
        url.parsed = True
        Session.commit()

    def add_auto(self, values, url):
        values['model'] = unicode(values['model'])
        mark_id = marks[values['mark']]['id']
        try:
            model = Session.query(Model).filter_by(mark_id=mark_id, name=values['model']).one()
        except:
            model = Model(mark_id=mark_id, name=values['model'])
            Session.add(model)
            Session.commit()

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
#            url_id = url.id
        )
        Session.add(auto)
        Session.commit()
        url.auto_id = auto.id;
#        Session.commit()
        self.add_images(values['images'], auto)

    def add_images(self, images, auto):
        if images:
            for img in images:
                img_path = self._save_image(img)
                Session.add(Image(
                    added=datetime.datetime.now(),
                    auto_id=auto.id,
                    url=unicode(img),
                    path=img_path
                ))
                Session.commit()

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



url_q = Session.query(Url)



parser = Parse(SEARCH_PARAMS)


for url in url_q.filter_by(parsed=False,
#    url=u'http://www.ss.lv/msg/lv/transport/cars/bmw/323/fkibo.html'
).order_by(desc(Url.added)).limit(5):
    parser.get_params(url)
    


    






#    out = l.tostring(s, encoding=unicode)
#    codecs.open(PATH+'/'+file+'-parse.html', encoding='utf-8', mode='w').write(out)
