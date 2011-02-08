from pylons import config
from pylons.decorators.cache import beaker_cache

def pre_cache(*args, **kwargs):
    if config["debug"]:
        decorate = lambda f: f
    else:
        decorate = beaker_cache(*args, **kwargs)

    return decorate