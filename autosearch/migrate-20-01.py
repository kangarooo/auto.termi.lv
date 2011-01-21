#!/usr/bin/python 
# -*- coding: utf-8 -*-
import os
import sys

PATH = os.path.realpath(os.path.dirname(sys.argv[0]))
sys.path.append(PATH+'/../autosearch')

from paste.deploy import appconfig
from autosearch.config.environment import load_environment

conf     = appconfig('config:'+PATH+'/../autosearch/'+('development.ini' if str(sys.argv[1])=='1' else 'production.ini'))
load_environment(conf.global_conf, conf.local_conf)

from autosearch.model.meta import Session, Base
#from autosearch.model.url_content import UrlContent

from sqlalchemy import Table


meta = Base.metadata
meta.bind = Session.bind

Table('url_content', meta, autoload=True).create()

