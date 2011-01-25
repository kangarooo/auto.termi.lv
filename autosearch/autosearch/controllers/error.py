import cgi

from paste.urlparser import PkgResourcesParser
from pylons import request, tmpl_context as c
from pylons.controllers.util import forward
from pylons.middleware import error_document_template
from webhelpers.html.builder import literal

from pylons.i18n.translation import _

from autosearch.lib.helpers import set_language

from autosearch.lib.base import BaseController, render

class ErrorController(BaseController):

    """Generates error documents as and when they are required.

    The ErrorDocuments middleware forwards to ErrorController when error
    related status codes are returned from the application.

    This behaviour can be altered by changing the parameters to the
    ErrorDocuments middleware in your config/middleware.py file.

    """

    def document(self):
        """Render the error document"""
        resp = request.environ.get('pylons.original_response')
        set_language(request.environ.get('pylons.language'))
        c.title = _('error {code}').format(code=cgi.escape(request.GET.get('code', str(resp.status_int))))
#        c.content = _('error content {content}')%{'content': literal(resp.body) or cgi.escape(request.GET.get('message', ''))}
        c.content = _('Error Message')
        return render('base/content.html')
#        resp = request.environ.get('pylons.original_response')
#        content = literal(resp.body) or cgi.escape(request.GET.get('message', ''))
#        page = error_document_template % \
#            dict(prefix=request.environ.get('SCRIPT_NAME', ''),
#                 code=cgi.escape(request.GET.get('code', str(resp.status_int))),
#                 message=content)
#        return page

    def img(self, id):
        """Serve Pylons' stock images"""
        return self._serve_file('/'.join(['media/img', id]))

    def style(self, id):
        """Serve Pylons' stock stylesheets"""
        return self._serve_file('/'.join(['media/style', id]))

    def _serve_file(self, path):
        """Call Paste's FileApp (a WSGI application) to serve the file
        at the specified path
        """
        request.environ['PATH_INFO'] = '/%s' % path
        return forward(PkgResourcesParser('pylons', 'pylons'))
