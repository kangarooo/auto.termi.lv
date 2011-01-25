"""The base Controller API

Provides the BaseController class for subclassing.
"""
from pylons.controllers import WSGIController
from pylons.templating import render_jinja2 as render

from autosearch.model.meta import Session

from autosearch.lib.helpers import set_language


class BaseController(WSGIController):

    def __call__(self, environ, start_response):
        """Invoke the Controller"""
        # WSGIController.__call__ dispatches to the Controller method
        # the request is routed to. This routing information is
        # available in environ['pylons.routes_dict']
        if environ['pylons.routes_dict'] and 'language' in environ['pylons.routes_dict'] and environ['pylons.routes_dict']['language']:
            set_language(environ['pylons.routes_dict']['language'])
        try:
            return WSGIController.__call__(self, environ, start_response)
        finally:
            Session.remove()
