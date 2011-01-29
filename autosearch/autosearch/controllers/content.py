# -*- coding: utf-8 -*-

import logging

from simplejson import dumps
from pylons import tmpl_context as c

from pylons.i18n.translation import _
from pylons.decorators.cache import beaker_cache

from autosearch.lib.base import BaseController, render

from pylons.decorators.cache import beaker_cache

log = logging.getLogger(__name__)

class ContentController(BaseController):

    def index(self):
        # Return a rendered template
        #return render('/content.mako')
        # or, return a response
        return 'Hello World'

    @beaker_cache(expire=60*60*12, type='file')
    def about(self):
        c.title = _('About title')
        c.content = _('About content page')
        return render('base/content.html')

    @beaker_cache(expire=60*60*12, type='file')
    def feedback(self, lang):
        c.title = _('Feedback title')
        c.content = _('Feedback content page')
        return render('base/content.html')

    @beaker_cache(expire=60*60*12, type='file')
    def feedback_submit(self):
        return dumps({
            'error': False
        })
