from urlparse import urlparse
from HtmlParser import HtmlParser

class Parse(object):

    def __init__(self, p):
        self.search_params = p

    def get_params(self, url, content):
        urlparams = urlparse(url)
        html = HtmlParser(content, urlparams.scheme+'://'+urlparams.netloc)
        errors = []
        results = {}
        for i in range(len(self.search_params)):
            param = self.search_params[i]
            if 'eval' in param:
                eval_param = param['eval'].split('.')
                if len(eval_param)==2:
                    param[eval_param[0]][eval_param[1]] = eval(param['eval_string'])
            res = html.get(param['possible'], param['params'])
            results[param['name']] = res
            if res is None:
                errors.append(param['name'])
                if 'critical' in param and param['critical']:
                    return {
                        'parsed': False,
                        'errors': errors,
                    }

        results['media'] = {}
        results['media']['image'] = html.get_image()
        return {
            'parsed': True,
            'results': results,
            'errors': errors,
        }


class ParseCar(Parse):
    
    def get_params(self, url, content):
        res = super(ParseCar, self).get_params(url, content)
        if not res['parsed']:
            return res
        new_car = {}
        for key, value in res['results'].iteritems():
            if value and 'tehpassport'==key:
                new_car['tehpassport'] = None
                new_car['tehpassport'] = None
                if 'type' in value:
                    if value['type'] == 'possible':
                        new_car['tehpassport_is'] = False if value['result'] is 0 else True
                        new_car['tehpassport'] = None
                    elif value['type'] == 'regex':
                        new_car['tehpassport_is'] = None
                        new_car['tehpassport'] = value['result']
            elif 'media'==key:
                new_car['images'] = value['image']
            else:
                new_car[key] = value['result'] if value and 'result' in value else None
        res['new_car'] = new_car
        return res

#class ParseCar(Parse):
#    def __init__(self, p, session):
#        super(ParseCar, self).__init__(p)
#        self.session = session
#
#    def get_params(self, url):
#        res = super(ParseCar, self).get_params(url.url, url.url_content.content)
#
#        url.url_content.error = unicode(';'.join(res['errors']))
#        url.url_content.parsed = True
#        self.session.flush()
#        if not res['parsed']:
#            return None
#
#        new_car = {}
#        for key, value in res['results'].iteritems():
#            if 'tehpassport'==key:
#                new_car['tehpassport'] = None
#                new_car['tehpassport'] = None
#                if 'type' in value:
#                    if value['type'] == 'possible':
#                        new_car['tehpassport_is'] = False if value['result'] is 0 else True
#                        new_car['tehpassport'] = None
#                    elif value['type'] == 'regex':
#                        new_car['tehpassport_is'] = None
#                        new_car['tehpassport'] = value['result']
#            elif 'media'==key:
#                new_car['images'] = value['image']
#            else:
#                new_car[key] = value['result'] if value and 'result' in value else None
#        return new_car