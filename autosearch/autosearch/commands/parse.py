# -*- coding: utf-8 -*-
import os
import sys

PATH = os.path.realpath(os.path.dirname(sys.argv[0]))

sys.path.append(PATH+'/../..')

from paste.deploy import appconfig 
from autosearch.config.environment import load_environment

conf     = appconfig('config:'+PATH+'/../../'+('development.ini' if 1<len(sys.argv) else 'production.ini'))
load_environment(conf.global_conf, conf.local_conf)

from autosearch.model.meta import Session
from autosearch.model.mark import Mark
from autosearch.model.auto import *

from HtmlParser import HtmlParser

marks = [mark.name for mark in Session.query(Mark).all()]

#print [[auto.engine_type] for auto in Session.query(Auto).all()]

SEARCH_VALUES = {
    'Gasoline': u'benzīns',
    'Diesel': u'dīzelis',
    'Gas': u'gāze',
    'Hybrid': u'hibrīds',

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
    'Riga dis.': u'Rīgas rajons',
    'Jurmala': u'Jūrmala',
    'Aizkraukle dis.': u'Aizkraukles rajons',
    'Aluksne dis.': u'Alūksnes rajons',
    'Balvi dis.': u'Balvu rajons',
    'Bauska dis.': u'Bauskas rajons',
    'Cesis dis.': u'Cēsu rajons',
    'Daugavpils dis.': u'Daugavpils rajons',
    'Dobele dis.': u'Dobeles rajons',
    'Gulbene dis.': u'Gulbenes rajons',
    'Jelgava dis.': u'Jelgavas rajons',
    'Jekabpils dis.': u'Jēkabpils rajons',
    'Kraslava dis.': u'Krāslavas rajons',
    'Kuldiga dis.': u'Kuldīgas rajons',
    'Liepaja dis.': u'Liepājas rajons',
    'Limbazi dis.': u'Limbažu rajons',
    'Ludza dis.': u'Ludzas rajons',
    'Madona dis.': u'Madonas rajons',
    'Ogre dis.': u'Ogres rajons',
    'Preili dis.': u'Preiļu rajons',
    'Rezekne dis.': u'Rēzeknes rajons',
    'Saldus dis.': u'Saldus rajons',
    'Talsi dis.': u'Talsu rajons',
    'Tukums dis.': u'Tukuma rajons',
    'Valka dis.': u'Valkas rajons',
    'Valmiera dis.': u'Valmieras rajons',
    'Ventspils dis.': u'Ventspils rajons',
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
dates = {
    'month': {
        '01': 'janvāris',
        '02': 'februāris',
        '03': 'marts',
        '04': 'aprīlis',
        '05': 'majs',
        '06': 'jūnijs',
        '07': 'jūlijs',
        '08': 'augusts',
        '09': 'septembris',
        '10': 'oktobris',
        '11': 'novembris',
        '12': 'decembris',
    }
}



for file in ['ss', 'zip']:
#    continue
    print file
    HTML_STR = open(PATH+'/'+file).read()
    html = HtmlParser(HTML_STR)
    print html.text
    print '----------------------------------------------------------'
    mark = html.get(['marka'], {
        'possible': marks
    })
    print marks[mark]
    print html.get(['modelis'], {
        'inTag': True,
        'before': marks[mark],
    })

#    print html.get(['izlaiduma gads', 'gads'], {
#        'regex': "[0-9]{4}"
#    })
#    print html.get([u'dzinēja tilpums', 'motors'], {
#        'regex': "[0-9,. ]{2,5}[^0-9,. ]+"
#    })
    print html.get([u'ātrumu kārba', u'ātrumkārba'], {
        'possible': [u'automāts', u'manuāla']
    })
#    print html.get([u'motors', u'degviela'], {
#        'possible': [SEARCH_VALUES[d] for d in EngineType().values]
#    })
#    print html.get([u'nobraukums'], {
#        'regex': '[0-9 ]{2,12}[^0-9 ]+'
#    })
#    print html.get([u'tehniskā apskate', u'tehniskā apskate līdz'], {
#        'regex': '[0-9]{2}[ .,]{1,2}[0-9]{4}',
#        'possible': [u'bez apskates', u'nav']
#    })
#    print html.get([u'visrbūves tips', u'virsbūve'], {
#        'possible': [u'sedans', u'universāls']
#    })
    






#    out = l.tostring(s, encoding=unicode)
#    codecs.open(PATH+'/'+file+'-parse.html', encoding='utf-8', mode='w').write(out)
