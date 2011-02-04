# -*- coding: utf-8 -*-
import os
import sys

PATH = os.path.realpath(os.path.dirname(sys.argv[0]))

sys.path.append(PATH+'/../autosearch')

from paste.deploy import appconfig
from autosearch.config.environment import load_environment

conf     = appconfig('config:'+PATH+'/../autosearch/'+('development.ini' if str(sys.argv[1])=='1' else 'production.ini'))
config = load_environment(conf.global_conf, conf.local_conf)


from autosearch.model.meta import Session
from autosearch.model.mark import Mark
from autosearch.model.auto import *

from HtmlParser import HtmlParser

from ParserParams import SEARCH_VALUES, SEARCH_PARAMS

def get_params(id, params, content):
        html = HtmlParser(content, 'http://localhost')
        errors = []
        results = []
        for i in range(len(params)):
            param = params[i]
            if 'eval' in param:
                eval_param = param['eval'].split('.')
                if len(eval_param)==2:
                    param[eval_param[0]][eval_param[1]] = eval(param['eval_string'])
            res = html.get(param['possible'], param['params'])
            if res is None:
                errors.append(' '.join(param['possible']))
                if 'critical' in param and not param['critical']:
                    results.append({'result': None})
                else:
                    print 'error: '+id
                    print ';'.join(errors)
                    return None
            else:
                results.append(res)
        print 'success: '+id
        print results

marks = [{'id': mark.id, 'name': mark.name} for mark in Session.query(Mark).all()]
for mark in marks:
    SEARCH_PARAMS[0]['params']['possible'].append(SEARCH_VALUES[mark['name']] if mark['name'] in SEARCH_VALUES else mark['name'])

for f in [
        'html/brunu',
        'html/a6',
        'html/bmw525',
    ]:
    get_params(f, SEARCH_PARAMS, open(f, 'r').read())