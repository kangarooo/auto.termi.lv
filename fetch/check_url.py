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


class CheckCar(parse.Parse.ParseCar):

    def get_params(self, url):
        new_car = super(SaveCar, self).get_params(url)
        if not new_car:
            return new_car

        self.add_auto(new_car, url)




session = Session()
url_q = session.query(Url).outerjoin(UrlContent).options(contains_eager('url_content'))

parser = SaveCar(SEARCH_PARAMS, session)


for url in url_q.filter(UrlContent.parsed==False).order_by(desc(Url.added)).limit(1):
    try:
        parser.get_params(url)
        session.commit()
    except:
        session.rollback()
        raise










#    out = l.tostring(s, encoding=unicode)
#    codecs.open(PATH+'/'+file+'-parse.html', encoding='utf-8', mode='w').write(out)
