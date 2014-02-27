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
from autosearch.model.currency_rate import CurrencyRate, Currency

import parse.Fetch

import parse.logger

class Fetch(parse.Fetch.Fetch):

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

        currency['LVL'] = 1
        for c in currency:
            self._add_new(need.index(c), currency[c])

    def _add_new(self, currency_id, rate):
            Session.add(CurrencyRate(added=datetime.datetime.now(),
                currency=currency_id, rate=rate))
            Session.commit()
            self._console('added')

    def _console(self, msg):
        log.info(msg)


log = parse.logger.Logger(sys.argv[2], "get currency parser")
fetch = Fetch()

fetch.parse_rss('http://www.bank.lv/vk/xml.xml')
