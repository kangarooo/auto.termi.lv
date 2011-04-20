# -*- coding: utf-8 -*-
import urllib2


class Fetch:

    def get_content(self, url):
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

    def _console(self, msg):
        pass
#        logger.info(msg)