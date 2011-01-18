#!/usr/bin/python 
# -*- coding: utf-8 -*-
import os
import sys

import datetime
import time

import logging
import urllib2

import lxml.html


PATH = os.path.realpath(os.path.dirname(sys.argv[0]))
sys.path.append(PATH+'/../autosearch')

from paste.deploy import appconfig
from autosearch.config.environment import load_environment

conf     = appconfig('config:'+PATH+'/../autosearch/'+('development.ini' if str(sys.argv[1])=='1' else 'production.ini'))
load_environment(conf.global_conf, conf.local_conf)

from autosearch.model.meta import Session
from autosearch.model.url import Url






LOG_FILENAME = sys.argv[2]
logger = logging.getLogger("get urls parser")
logger.setLevel(logging.DEBUG)
fh = logging.FileHandler(LOG_FILENAME)
fh.setLevel(logging.DEBUG)
fh.setFormatter(logging.Formatter("%(asctime)s - %(levelname)s - %(message)s"))
logger.addHandler(fh)
#logger.debug("debug message")
#logger.info("info message")
#logger.warn("warn message")
#logger.error("error message")
#logger.critical("critical message")



class Fetch:
    url = ''

    def get_content(self, url):
        time.sleep(10)
        self._console('fetch: '+url)
        try:
            request = urllib2.Request(url)
            request.add_header('User-Agent', 'termibot/0.1 (+http://termi.lv)')
            cont = urllib2.urlopen(request, None, 30)
            return {
                'content': cont.read(),
                'code': 200,
                'charset': cont.headers['content-type'].split('charset=')[-1]}
        except urllib2.URLError, e:
            if hasattr(e, 'reason'):
                return {
                    'content': '',
                    'code': 408,
                    'reason': e.reason
                }
            elif hasattr(e, 'code'):
                return {
                    'content': e.read(),
                    'code': e.code
                }
            return {
                'content': '',
                'code': 0,
                'reason': ''
            }

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
            if not self._check_url(link):
                response = self.get_content(link)
                self._add_new_link(link, unicode(response['content'], response['charset']), response['code'])

    def _check_url(self, url):
        return Session.query(Url).filter_by(url=url).count()>0

    def _add_new_link(self, url, text, code):
            Session.add(Url(added=datetime.datetime.now(), url=url, content=text,
                parsed=False, fetch_code=code))
            Session.commit()
            self._console('added: '+url)

    def _console(self, msg):
        logger.info(msg)


fetch = Fetch()

for url in (
        'http://www.ss.lv/lv/transport/cars/rss/',
        'http://www.zip.lv/rss/?s=4c30d1b9064a62429364da4f174ba018',
    ):
    fetch.parse_rss(url)
