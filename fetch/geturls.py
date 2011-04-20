#!/usr/bin/python 
# -*- coding: utf-8 -*-
import os
import sys

import datetime
import time

import lxml.html

PATH = os.path.realpath(os.path.dirname(sys.argv[0]))
sys.path.append(PATH+'/../autosearch')

from paste.deploy import appconfig
from autosearch.config.environment import load_environment

conf     = appconfig('config:'+PATH+'/../autosearch/'+('development.ini' if str(sys.argv[1])=='1' else 'production.ini'))
load_environment(conf.global_conf, conf.local_conf)

from autosearch.model.meta import Session
from autosearch.model.url import Url
from autosearch.model.url_content import UrlContent

import parse.Fetch

import parse.logger

class Fetch(parse.Fetch.Fetch):
    
    def parse_rss(self, url):
        parse = self.get_content(url)
        if parse['code'] is not 200:
            self._console('error: '+str(parse['code'])+parse['content'])
            return False
        rss = lxml.html.fromstring(parse['content'])
        for item in rss.xpath("./channel/item"):
            if item.text_content().lower().find(u'pārdod')==-1:
                continue
#            i don't know why, by here works only with tail (not with text)
            link = unicode(item.find('link').tail.strip())
            if not self._check_url(link, Session):
                time.sleep(10)
                response = self.get_content(link)
                self._add_new_link(link, unicode(response['content'], response['charset']), response['code'])

    def _check_url(self, url, session):
        return session.query(Url).filter_by(url=url).count()>0

    def _add_new_link(self, url, text, code):
        session = Session()
        try:
            if self._check_url(url, session):
                return False
            u = Url(added=datetime.datetime.now(), last_checked=datetime.datetime.now(), url=url)
            session.add(u)
            session.flush()
            u_content = UrlContent(added=datetime.datetime.now(),
                url_id=u.id,
                content=text,
                parsed=False, fetch_code=code)
            session.add(u_content)
            session.flush()
            # Success, commit everything
            session.commit()
        except:
            session.rollback()
            raise

    def _console(self, msg):
        log.info(msg)



log = parse.logger.Logger(sys.argv[2], "get urls parser")

fetch = Fetch()

for url in (
        'http://www.ss.lv/lv/transport/cars/rss/',
        'http://www.zip.lv/rss/?s=4c30d1b9064a62429364da4f174ba018',
    ):
    fetch.parse_rss(url)
