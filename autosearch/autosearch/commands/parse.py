# -*- coding: utf-8 -*-
import os
import sys
import time

PATH = os.path.realpath(os.path.dirname(sys.argv[0]))

sys.path.append(PATH+'/../..')

from paste.deploy import appconfig 
from autosearch.config.environment import load_environment

conf     = appconfig('config:'+PATH+'/../../'+('development.ini' if 1<len(sys.argv) else 'production.ini'))
load_environment(conf.global_conf, conf.local_conf)

from autosearch.model.meta import Session
from autosearch.model.mark import Mark
from autosearch.model.auto import *
from autosearch.model.url import Url
from sqlalchemy import asc, desc

from urlparse import urlparse
from HtmlParser import HtmlParser

from ParserParams import *



#                m-(mark)
#                y-(izlaiduma gads)
#                c-(dzinēja tilpums)
#                g-(ātrumkārba)
#                f-(fuel)
#                k-(Nobraukums)
#                t-(tehniskā)
#                o-(virsbūves tips)
#                p-(cena)


marks = [{'id': mark.id, 'name': mark.name} for mark in Session.query(Mark).all()]
SEARCH_PARAMS[0]['params']['possible'] = [mark['name'] for mark in marks]
params = SEARCH_PARAMS

url_q = Session.query(Url)

for url in url_q.filter_by(parsed=False,
    url=u'http://www.ss.lv/msg/lv/transport/cars/volkswagen/caravelle/fnhic.html'
).order_by(desc(Url.added)).limit(5):
#    continue
    urlparse = urlparse(url.url)
    html = HtmlParser(url.content, urlparse.scheme+'://'+urlparse.netloc)
    print html.text
    print '----------------------------------------------------------'
    print url.url
    print '----------------------------------------------------------'
#    print html.get_image()
#    continue


    errors = []
    results = []
    for i in range(len(params)):
        if 'eval' in params[i]:
            eval_param = params[i]['eval'].split('.')
            if len(eval_param)==2:
                params[i][eval_param[0]][eval_param[1]] = eval(params[i][eval_param[0]][eval_param[1]])
        res = html.get(params[i]['possible'], params[i]['params'])
        if res is False:
            errors.append(' '.join(params[i]['possible']))
            if 'critical' in params[i] and not params[i]['critical']:
                results.append({'result': False})
            else:
                break
        else:
            results.append(res)

    for r in range(len(results)):
        print params[r]['name'], ' ------- ', results[r]['result']
#    print results
#    if error is not False:
#        print 'error: '+error
#        print url.url

    






#    out = l.tostring(s, encoding=unicode)
#    codecs.open(PATH+'/'+file+'-parse.html', encoding='utf-8', mode='w').write(out)
