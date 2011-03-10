from pylons import config
from pylons.decorators.cache import beaker_cache
from decorator import decorator
from pylons import request

def pre_cache(*args, **kwargs):
    print 'cache'
    if config["debug"]:
        decorate = lambda f: f
    else:
        decorate = beaker_cache(*args, **kwargs)

    return decorate

#def pre_jsonp(fn):
#    print 'jsonp'
#    def pre_json_wrap(*args, **kwargs):
##        print args
##        print kwargs
#        return fn(*args, **kwargs)
#    return lambda f: f
#    return pre_json_wrap
def pre_jsonp(callback='callback'):
    def wrapper(func, *args, **kwargs):
        json = func(*args, **kwargs)
        if(callback not in request.GET):
            return json
        return "{callback}({json})".format(callback=request.GET[callback], json = json)

    return decorator(wrapper)