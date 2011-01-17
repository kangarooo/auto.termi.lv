# -*- coding: utf-8 -*-

import re

class UrlError(Exception):
    """UrlError"""
    pass


class Parser:

    _url = ''
    _active = {}
    _delimiter = []
    _variables = []
    
    def __init__(self, variables, delimiter = ['/', '-', ';', '^([^(]+)\((.*?)\)$', ',']):
        self._variables = variables
        self._delimiter = delimiter

    def parse_url(self, url):
        return self._extract_url(url)

    def _type_mark(self, variable, str, type):
        reg = re.compile(self._delimiter[3], re.IGNORECASE)
        result = []
        for str_part in str.split(self._delimiter[2]):
            res = reg.search(str_part)
            sub = []
            if res is not None:
                main = res.group(1)
                for sub_res in res.group(2).split(self._delimiter[4]):
                    sub.append(sub_res)
            else:
                main = str_part
            result.append({
                'main': main,
                'sub': sub if len(sub)>0 else None,
            })
        ids = []
        for r, v in [[r, v] for r in result for v in variable if r['main'].lower()==v['name'].lower()]:
            sub = None
            if r['sub'] and 'sub' in v:
                sub = [vs['id'] for rs in r['sub'] for vs in v['sub'] if rs.lower()==vs['name'].lower()]
                if len(sub)!=len(r['sub']):
                    raise UrlError(', '.join([type+'-'+str, ','.join(r['sub']), 'not much all sub']))
            ids.append({
                'main': v['id'],
                'sub': sub
            })
        if len(ids)!=len(result):
            raise UrlError(', '.join([type, 'not much all']))
        return ids if len(ids)>0 else None
                            

    def _type_slider(self, variable, str, type):
        try:
            min, max = str.split(self._delimiter[1], 1)
        except ValueError:
            raise UrlError(', '.join([type+'-'+str, 'need 2 parametrs']))
        
        if min=='':
            min=variable['min']
        if max=='':
            max=variable['max']
        if 'type' in variable:
            if variable['type']=='float':
                min = float(min)
                max = float(max)
        else:
            min = int(min)
            max = int(max)
        if min>max:
            raise UrlError(', '.join([type+'-'+str, 'max less then min']))
        if max<min:
            raise
        if min<variable['min']:
            raise UrlError(', '.join([type+'-'+str, 'min to small']))
        if max>variable['max']:
            raise UrlError(', '.join([type+'-'+str, 'max to large']))
        return {
            'min': None if min==variable['min'] else min,
            'max': None if max==variable['max'] else max
        }

    def _type_chooser(self, variable, str, type):
        str_v = str.split(self._delimiter[2])
        res = []
        [res.append(variable.index(v)) for v in variable for s in str_v if variable.index(v) not in res and s.lower()==v.lower()]

        if len(res)!=len(str_v):
            raise UrlError(', '.join([type+'-'+str, 'not much all']))
        return res

    def _extract_url(self, url):
        """ extract url variables and passes to function """
        res = []
        for url_part in url.split(self._delimiter[0]):
            try:
                type, v = url_part.split(self._delimiter[1], 1)
            except ValueError:
                raise UrlError(', '.join([url_part, 'cannot get type and variable']))
            
            variable = self._get_variable_params(type)
            res.append({
                'url': variable['url'],
                'value': getattr(self, '_type_'+variable['type'])(variable['value'], v, type)
            })
            
        return res

    def _get_variable_params(self, type):
        param = [v for v in self._variables if v['url']==type]
        return param[0] if len(param)>0 else None
