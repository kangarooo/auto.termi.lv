# -*- coding: utf-8 -*-
import os
import sys

PATH = os.path.realpath(os.path.dirname(sys.argv[0]))

sys.path.append(PATH+'/../..')

from paste.deploy import appconfig
from autosearch.config.environment import load_environment

conf     = appconfig('config:'+PATH+'/../../'+('development.ini' if 1<len(sys.argv) else 'production.ini'))
load_environment(conf.global_conf, conf.local_conf)

from autosearch.model.meta import Session
from autosearch.model.url import Url

import urllib2

import lxml.html

import datetime
import time

class Fetch:
    url = ''
    def get_content(self, url):
        try:
            return {
                'content': urllib2.urlopen(url).read(),
                'code': 200}
#            return {
#                'content': urllib2.urlopen(urllib2.Request(url, '', {
##                        'User-Agent': 'termibot/0.1 (+http://termi.lv)'
#                        'User-agent' : 'Mozilla/4.0 (compatible; MSIE 9.5; Windows NT)'
#                    })).read(),
#                'code': 200}
        except urllib2.URLError, e:
            return {
                'content': e.read(),
                'code': e.code
            }
    def parse_rss(self, url):
        parse = self.get_content(url)
        if parse['code'] is not 200:
            print parse['code']
            print parse['content']
            return False
        rss = lxml.html.fromstring(parse['content'])
        for item in rss.xpath("./channel/item"):
            if item.text_content().lower().find(u'pārdod')==-1:
                continue
#            i don't know why, by here works only with tail (not with text)
            link = item.find('link').tail.strip()
            response = self.get_content(link)
            time.sleep(0.5)
            self._add_new_link(link, response['content'], response['code'])

    def _add_new_link(self, url, text, code):
        try:
            Session.query(Url).filter_by(url=url).one()
        except:
            Session.add(Url(added=datetime.datetime.now(), url=url, content=text,
                parsed=False, fetch_code=code))
            Session.commit()


fetch = Fetch()
#fetch.parse_rss('http://www.ss.lv/msg/lv/transport/cars/jaguar/daimler/agecp.html')
fetch.parse_rss('http://www.ss.lv/lv/transport/cars/rss/')