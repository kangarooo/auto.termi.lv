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
from autosearch.model.currency_rate import CurrencyRate, Currency

LOG_FILENAME = sys.argv[2]
logger = logging.getLogger("get currency parser")
logger.setLevel(logging.DEBUG)
fh = logging.FileHandler(LOG_FILENAME)
fh.setLevel(logging.DEBUG)
fh.setFormatter(logging.Formatter("%(asctime)s - %(levelname)s - %(message)s"))
logger.addHandler(fh)

class Fetch:
    url = ''

    def get_content(self, url):
        time.sleep(2)
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

    def parse_rss(self, url):
        parse = self.get_content(url)
        if parse['code'] is not 200:
            self._console('error: '+str(parse['code'])+parse['content'])
            return False
        rss = lxml.html.fromstring(parse['content'])
        need = Currency().values
        currency = {}

        for item in rss.xpath("//crates/currencies/currency"):
            id = unicode(item.find('id').text.strip())
            units = unicode(item.find('units').text.strip())
            rate = unicode(item.find('rate').text.strip())
            if id in need:
                currency[id] = float(rate)/float(units)
#            if not self._check_url(link):
#                response = self.get_content(link)
#                self._add_new_link(link, unicode(response['content'], response['charset']), response['code'])
        currency['LVL'] = 1
        for c in currency:
            self._add_new(need.index(c), currency[c])

    def _add_new(self, currency_id, rate):
            Session.add(CurrencyRate(added=datetime.datetime.now(),
                currency=currency_id, rate=rate))
            Session.commit()
            self._console('added')

    def _console(self, msg):
        logger.info(msg)


fetch = Fetch()
fetch.parse_rss('http://www.bank.lv/vk/xml.xml')