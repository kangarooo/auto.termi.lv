# -*- coding: utf-8 -*-

import logging

from pylons import request, response, session, tmpl_context as c, url
from pylons.controllers.util import abort, redirect

from autosearch.lib.base import BaseController, render

log = logging.getLogger(__name__)

#                url:
#                m-(mark)
#                y-(izlaiduma gads)
#                c-(dzinēja tilpums)
#                g-(ātrumkārba)
#                f-(fuel)
#                k-(Nobraukums)
#                t-(tehniskā)
#                o-(virsbūves tips)
#                p-(cena)
class SearchController(BaseController):

    def index(self):
        # Return a rendered template
        #return render('/search.mako')
        # or, return a response
#        return 'Hello World'
        c.keyword = ''
        return render('search/main.html')

    def search(self, keyword):
        print keyword
        c.keyword = keyword
        return render('search/main.html')
