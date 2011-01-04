# -*- coding: utf-8 -*-
import logging

from pylons import request, response, session, tmpl_context as c, url
from pylons.controllers.util import abort, redirect

from autosearch.lib.base import BaseController, render

from autosearch.lib.base import Session
from autosearch.model.mark import Mark

from simplejson import dumps

log = logging.getLogger(__name__)

class MarkController(BaseController):

    def __before__(self):
        self.mark_q = Session.query(Mark)

#    def index(self):
#        # Return a rendered template
#        #return render('/mark.mako')
#        # or, return a response
#        return 'Hello World'

    def list(self):
        marks = [{
            'id': mark.id,
            'name': mark.name,
            'models': [{'id': m.id, 'name': m.name} for m in mark.model],
        } for mark in self.mark_q.all()]
        return dumps(marks)
