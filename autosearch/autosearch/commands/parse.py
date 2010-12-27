# -*- coding: utf-8 -*-
import os
import sys
PATH = os.path.realpath(os.path.dirname(sys.argv[0]))
from HtmlParser import HtmlParser
from autosearch.model.meta import Session, Base


#import codecs
#import difflib

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
search_params = {
#    'mark': {
#        'words': ['marka']
#    },
#    'model': {
#        'words': ['modelis']
#    },
#    'year': {
#        'words': ['izlaiduma gads', 'gads'],
#        'regex': [re.compile(u"[0-9]{4}", re.IGNORECASE)]
#    },
#    'capacity': {
#        'words': [u'dzinēja tilpums', 'motors'],
#        'regex': [re.compile(u"[0-9]{0,2}[,.]{1}[0-9]{0,2}", re.IGNORECASE)]
#    },
#    'gear-box': {
#        'words': [u'ātrumu kārba'],
#        'possible': ['automāts', 'manuāla']
#    },
#    'fuel': {
#        'words': ['motors'],
#        'possible': ['benzīns', 'dīzelis', 'gāze', 'hibrīds']
#    },
#    'mileage': {
#        'words': ['nobraukums'],
#        'regex': [re.compile(u"[0-9 ]{2,12}[^0-9 ]+", re.IGNORECASE)]
#    },
#    'technical': {
#        'words': [u'tehniskā apskate']
#    },
#    'structure': {
#        'words': [u'visrbūves tips']
#    },
#    'price': {
#        'words': ['cena'],
#        'regex': [re.compile(u"[0-9 ]{2,12}[^0-9 ]+", re.IGNORECASE)]
#    },
}


for file in ['ss', 'zip']:
    continue
    print file
    HTML_STR = open(PATH+'/'+file).read()
    html = HtmlParser(HTML_STR)
    print html.text
    print '----------------------------------------------------------'
    print html.get(['marka'], {
        'possible': []
    })
    print html.get(['izlaiduma gads', 'gads'], {
        'regex': "[0-9]{4}"
    })
    print html.get(['cena'], {
        'regex': "[0-9 ]{2,12}[^0-9 ]+"
    })
    print html.get([u'ātrumu kārba', u'ātrumkārba'], {
        'possible': [u'manuāla', u'automāts']
    })
#    for i in range(words_len):
#        for p, params in search_params.items():
#            for w in params['words']:
#                if 'res' in search_params[p]:
#                    continue
#                search = []
#                for j in range(len(w.split(' '))):
#                    if words_len>i+j:
#                        search.append(words[i+j].strip())
#                if match_string(w, ' '.join(search)):
#                    print ' '.join(search)+' <----> '+w
#                    search = []
#                    for z in range(4): #max 4 words search
#                        if(words_len>z+i+j+1):
#                            search.append(words[z+i+j+1].strip())
#                            print ' '.join(search)
#                            res = params['regex'][0].findall(' '.join(search))
#                            if(res):
#                                search_params[p]['res'] = res[0]
#                                break
#                break
#    print 'PARSED VALUES'
#    for p, params in search_params.items():
#        if 'res' in params:
#            print p+' ---- '+params['res']
#        else:
#            print p+' ---- '




#    out = l.tostring(s, encoding=unicode)
#    codecs.open(PATH+'/'+file+'-parse.html', encoding='utf-8', mode='w').write(out)
