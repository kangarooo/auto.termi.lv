# -*- coding: utf-8 -*-

import logging

from simplejson import dumps
from pylons import request, response, session, tmpl_context as c, url
from pylons.controllers.util import abort, redirect

from pylons.i18n.translation import _

from autosearch.lib.base import BaseController, render

log = logging.getLogger(__name__)

class ContentController(BaseController):

    def index(self):
        # Return a rendered template
        #return render('/content.mako')
        # or, return a response
        return 'Hello World'

    def about(self):
        c.title = _('About title')
        c.content = _('About content page')
        return render('base/content.html')

    def feedback(self):
        c.title = _('Feedback title')
        c.content = _('Feedback content page')
        return render('base/content.html')

    def feedback_submit(self):
        return dumps({
            'error': False
        })
