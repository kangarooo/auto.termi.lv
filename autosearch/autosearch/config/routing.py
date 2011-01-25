"""Routes configuration

The more specific and detailed routes should be defined first so they
may take precedent over the more generic routes. For more information
refer to the routes manual at http://routes.groovie.org/docs/
"""
from autosearch.lib.helpers import detect_language
from routes import Mapper

class LanguageMapper(Mapper):
    
#    def _match(self, url, environ=None):
#
#        result = super(LanguageMapper, self)._match(url, environ)
#        if result[0]:
#            print language
#            result[0]['language'] = language
#        return result
    def match(self, url=None, environ=None):
        url, language = self.detectLanguage(url)
        m = self.getMatch(url, environ)
        if m[0]:
            m[0]['language'] = language
        return m

    def routematch(self, url=None, environ=None):
        url, language = self.detectLanguage(url)
        m = self.getMatch(url, environ)
        if m and m[0]:
            m[0]['language'] = language
        return m
        
    def getMatch(self, url=None, environ=None):
        """Match a URL against against one of the routes contained.

        Will return None if no valid match is found, otherwise a
        result dict and a route object is returned.

        .. code-block:: python

            resultdict, route_obj = m.match('/joe/sixpack')

        """
        if not url and not environ:
            raise RoutesException('URL or environ must be provided')

        if not url:
            url = environ['PATH_INFO']
        result = self._match(url, environ)
        if self.debug:
            return result[0], result[1], result[2]
        if isinstance(result[0], dict) or result[0]:
            return result[0], result[1]
        return None
    
    def detectLanguage(self, url):
        return detect_language(url)


def make_map(config):
    """Create, configure and return the routes Mapper"""
    map = LanguageMapper(directory=config['pylons.paths']['controllers'],
                 always_scan=config['debug'])
    map.minimization = False
    map.explicit = False

    # The ErrorController route (handles 404/500 error pages); it should
    # likely stay at the top, ensuring it can always be resolved
    map.connect('/error/{action}', controller='error')
    map.connect('/error/{action}/{id}', controller='error')

    # CUSTOM ROUTES HERE

    map.connect('/', controller='search', action='index')

#    return params of filter
    map.connect('/search/params.{type}', controller='search', action='params', requirements=dict(type='json'))
    
#    count results
    map.connect('/c/s*keyword.{type}', controller='search', action='total', requirements=dict(type='json', keyword='.*'))
#    return first 12 records
    map.connect('/s*keyword.{type}', controller='search', action='search', requirements=dict(type='json', keyword='.*'))
#    get next records large id
    map.connect('/next/{id}/s*keyword.{type}', controller='search', action='next', requirements=dict(id='\d+', type='json', keyword='.*'))
#    send index template like '/'
    map.connect('/s*keyword', controller='search', action='index', requirements=dict(keyword='.*'))
    
    map.connect('/about', controller='content', action='about')
    map.connect('/feedback', controller='content', action='feedback')
#    map.connect('/feedback.{type}', controller='content', action='feedback_submit', requirements=dict(keyword='.*'))
    
#    map.connect('/{controller}/{action}')
#    map.connect('/{controller}/{action}/{id}')

    return map