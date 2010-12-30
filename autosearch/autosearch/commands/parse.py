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

from HtmlParser import HtmlParser




SEARCH_VALUES = {
    'Gasoline': u'benzīns',
    'Diesel': u'dīzelis',
    'Gas': [u'benzīns/gāze', u'gāze'],
    'Hybrid': u'hibrīds',

    'Rear': [u'priekšēja', u'priekšpiedziņa'],
    'Front': u'aizmugures',
    'Four': [u'pilnpiedziņa', u'4x4'],

    'Manual': u'manuāla',
    'Auto': [u'automātiska', u'automāts'],

    'SUV': u'Apvidus',
    'Hatchback': u'Hečbeks',
    'Cabriolet': u'Kabriolets',
    'Coupe': u'Kupeja',
    'Minibus': u'Mikroautobuss',
    'Minivan': u'Minivens',
    'Pickup': u'Pikaps',
    'Sedan': u'Sedans',
    'Universal': u'Universāls',

    'Riga': u'Rīga',
    'Riga dis.': [u'Rīgas rajons', u'Rīgas raj.'],
    'Jurmala dis.': [u'Jūrmalas rajons', u'Jūrmala', u'Jūrmalas raj.'],
    'Aizkraukle dis.': [u'Aizkraukles rajons', u'Aizkraukle', u'Aizkraukles raj.'],
    'Aluksne dis.': [u'Alūksnes rajons', u'Alūksne', u'Alūksnes raj.'],
    'Balvi dis.': [u'Balvu rajons', u'Balvi', u'Balvu raj.'],
    'Bauska dis.': [u'Bauskas rajons', u'Bauska', u'Bauskas raj.'],
    'Cesis dis.': [u'Cēsu rajons', u'Cēsis', u'Cēsu raj.'],
    'Daugavpils dis.': [u'Daugavpils rajons', u'Daugavpils', u'Daugavpils raj.'],
    'Dobele dis.': [u'Dobeles rajons', u'Dobele', u'Dobeles raj.'],
    'Gulbene dis.': [u'Gulbenes rajons', u'Gulbene', u'Gulbenes raj.'],
    'Jelgava dis.': [u'Jelgavas rajons', u'Jelgava', u'Jelgavas raj.'],
    'Jekabpils dis.': [u'Jēkabpils rajons', u'Jēkabpils'],
    'Kraslava dis.': [u'Krāslavas rajons', u'Krāslava', u'Krāslavas raj.'],
    'Kuldiga dis.': [u'Kuldīgas rajons', u'Kuldīga', u'Kuldīgas raj.'],
    'Liepaja dis.': [u'Liepājas rajons', u'Liepāja', u'Liepājas raj.'],
    'Limbazi dis.': [u'Limbažu rajons', u'Limbaži', u'Limbaži un raj.'],
    'Ludza dis.': [u'Ludzas rajons', u'Ludza', u'Ludzas raj.'],
    'Madona dis.': [u'Madonas rajons', u'Madona', u'Madonas raj.'],
    'Ogre dis.': [u'Ogres rajons', u'Ogre', u'Ogres raj.'],
    'Preili dis.': [u'Preiļu rajons', u'Preiļi', u'Preiļu raj.'],
    'Rezekne dis.': [u'Rēzeknes rajons', u'Rēzekne', u'Rēzeknes raj.'],
    'Saldus dis.': [u'Saldus rajons', u'Saldus'],
    'Talsi dis.': [u'Talsu rajons', u'Talsi', u'Talsu raj.'],
    'Tukums dis.': [u'Tukuma rajons', u'Tukums', u'Tukuma raj.'],
    'Valka dis.': [u'Valkas rajons', u'Valka', u'Valkas raj.'],
    'Valmiera dis.': [u'Valmieras rajons', u'Valmiera', u'Valmieras raj.'],
    'Ventspils dis.': [u'Ventspils rajons', u'Ventspils'],

    'LVL': [u'lvl', u'ls'],
    'USD': [u'$', u'usd'],
    'EUR': [u'€', u'eur', u'eiro', u'euro'],
}
#                m-(mark)
#                y-(izlaiduma gads)
#                c-(dzinēja tilpums)
#                g-(ātrumkārba)
#                f-(fuel)
#                k-(Nobraukums)
#                t-(tehniskā)
#                o-(virsbūves tips)
#                p-(cena)
#dates = {
#    'month': {
#        '01': 'janvāris',
#        '02': 'februāris',
#        '03': 'marts',
#        '04': 'aprīlis',
#        '05': 'majs',
#        '06': 'jūnijs',
#        '07': 'jūlijs',
#        '08': 'augusts',
#        '09': 'septembris',
#        '10': 'oktobris',
#        '11': 'novembris',
#        '12': 'decembris',
#    }
#}

marks = [{'id': mark.id, 'name': mark.name} for mark in Session.query(Mark).all()]
url_q = Session.query(Url)

for url in url_q.filter_by(parsed=False,
    url=u'http://www.ss.lv/msg/lv/transport/cars/volkswagen/caravelle/fnhic.html'
    ).order_by(desc(Url.added)).limit(5):

    html = HtmlParser(url.content)
    print html.text
    print '----------------------------------------------------------'
    print url.url
    print '----------------------------------------------------------'
    new_car = {
        'mark': False,
        'model': False,
        'year': False,
    }
    print html.get_image()
    continue

    params = [{
                'name': 'mark',
                'possible': [u'marka'],
                'params': {
                    'possible': [mark['name'] for mark in marks]
                }
            }, {
                'name': 'model',
                'possible': [u'modelis'],
                'params': {
                    'in_tag': True,
                    'before': 'results[-1]["match"]'
                },
                'eval': 'params.before'
            }, {
                'name': 'year',
                'critical': False,
                'possible': [u'izlaiduma gads', u'gads'],
                'params': {
                    'regex': "[0-9]{4}"
                }
            }, {
                'name': 'engine',
                'critical': False,
                'possible': [u'dzinēja tilpums', 'motors'],
                'params': {
                    'regex': "([0-9.]{2,4})[^0-9.]+",
                    'group': 1,
                    'prelambda': lambda x: x.replace(' ', '').replace(',', '.'),
                    'lambda': lambda x: float(x),
                }
            }, {
                'name': 'engine_type',
                'critical': False,
                'possible': [u'motors', u'degviela'],
                'params': {
                    'possible': [SEARCH_VALUES[d] for d in EngineType().values]
                }
            }, {
                'name': 'gearbox',
                'critical': False,
                'possible': [u'ātrumu skaits', u'ātrumu kārba', u'ātrumi', u'ātr. kārba', u'ātrumkārba'],
                'params': {
                    'regex': "([0-9]{1})[^0-9]+",
                    'group': 1,
                    'lambda': lambda x: int(x)
                }
            }, {
                'name': 'gear_type',
                'critical': False,
                'possible': [u'ātrumu kārba', u'ātrumi', u'ātr. kārba', u'ātrumkārba'],
                'params': {
                    'possible': [SEARCH_VALUES[d] for d in GearType().values]
                }
            }, {
                'name': 'drive_type',
                'critical': False,
                'possible': [u'piedziņa'],
                'params': {
                    'possible': [SEARCH_VALUES[d] for d in DriveType().values]
                }
            }, {
                'name': 'mileage',
                'critical': False,
                'possible': [u'nobraukums'],
                'params': {
                    'regex': '([0-9]{1,12})[^0-9]+',
                    'group': 1,
                    'prelambda': lambda x: x.replace(' ', ''),
                    'lambda': lambda x: int(x)
                }
            }, {
                'name': 'tehpassport',
                'critical': False,
                'possible': [u'tehniskā apskate līdz', u'tehniskā apskate'],
                'params': {
                    'possible': [[u'bez apskates', u'nav']],
                    'regex': '[0-9]{2}[.]{1}[0-9]{4}',
                    'prelambda': lambda x: x.replace(' ', '').replace(',', '.').replace('/', '.'),
                    'lambda': lambda x: time.strptime(x, '%m.%Y'),
                }
            }, {
                'name': 'car_type',
                'critical': False,
                'possible': [u'visrbūves tips', u'virsbūve'],
                'params': {
                    'possible': [SEARCH_VALUES[d] for d in CarType().values]
                }
            }, {
                'name': 'place',
                'critical': False,
                'possible': [u'vieta'],
                'params': {
                    'possible': [SEARCH_VALUES[d] for d in Place().values]
                }
#            }, {
#                'name': 'color',
#                'possible': [u'krāsa'],
#                'params': {
#                    'possible': [SEARCH_VALUES[d] for d in Color().values]
#                }
            }, {
                'name': 'price',
                'critical': False,
                'possible': [u'cena'],
                'params': {
                    'regex': '([0-9]{2,12})[^0-9]+',
                    'group': 1,
                    'prelambda': lambda x: x.replace(' ', ''),
                    'lambda': lambda x: int(x),
                }
            }, {
                'name': 'currency',
                'critical': False,
                'possible': [u'cena'],
                'params': {
                    'possible': [SEARCH_VALUES[d] for d in Currency().values]
                }
            }, {
                'name': 'telephone',
                'critical': False,
                'possible': [u'tālrunis', u'telefons'],
                'params': {
                    'regex': '([0-9]{7,12})[^0-9]+',
                    'group': 1,
                    'prelambda': lambda x: x.replace(' ', ''),
                }
            }]
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
