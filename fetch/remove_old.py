#!/usr/bin/python
# -*- coding: utf-8 -*-
import os
import sys
import datetime
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

from sqlalchemy.orm import eagerload, contains_eager

LOG_FILENAME = sys.argv[2]
logger = logging.getLogger("get urls parser")
logger.setLevel(logging.DEBUG)
fh = logging.FileHandler(LOG_FILENAME)
fh.setLevel(logging.DEBUG)
fh.setFormatter(logging.Formatter("%(asctime)s - %(levelname)s - %(message)s"))
logger.addHandler(fh)

path = os.path.join(config['pylons.paths']['static_files'], config['pylons.paths']['image_cache_files'])
session = Session()
url_q = session.query(Auto)\
            .outerjoin(Model).options(contains_eager('model'))\
            .outerjoin(Mark).options(contains_eager('model.mark'))\
            .options(eagerload('url'))\
            .options(eagerload('url.url_content'))\
            .options(eagerload('image'))\
            .filter(Auto.added <= datetime.date.today() - datetime.timedelta(8))

for a in url_q.all():
    try:
        for i in a.image:
            os.unlink(path+'/'+i.path)
            session.delete(i)
            session.commit()
        for u in a.url:
            session.delete(u.url_content)
            session.commit()
            session.delete(u)
            session.commit()
        session.delete(a)
        session.commit()


    except:
        
        raise
    
