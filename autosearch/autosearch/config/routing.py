"""Routes configuration

The more specific and detailed routes should be defined first so they
may take precedent over the more generic routes. For more information
refer to the routes manual at http://routes.groovie.org/docs/
"""
from routes import Mapper

def make_map(config):
    """Create, configure and return the routes Mapper"""
    map = Mapper(directory=config['pylons.paths']['controllers'],
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
    
#    map.connect('/{controller}/{action}')
#    map.connect('/{controller}/{action}/{id}')

    return map