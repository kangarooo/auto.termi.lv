# -*- coding: utf-8 -*-
import os
import sys
PATH = os.path.realpath(os.path.dirname(sys.argv[0]))



import re
import lxml.html as l
from lxml import etree
from lxml.html.clean import Cleaner
import codecs
import difflib

allowed_tags = ['html', 'head', 'body',
    'a', 'img', 'b', 'strong',
    'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
]
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
    'year': {
        'words': ['izlaiduma gads', 'gads']
    },
#    'capacity': {
#        'words': [u'dzinēja tilpums', 'motors']
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
#        'words': ['nobraukums']
#    },
#    'technical': {
#        'words': [u'tehniskā apskate']
#    },
#    'structure': {
#        'words': [u'visrbūves tips']
#    },
#    'price': {
#        'words': ['cena'],
#
#    },
}
cleaner = Cleaner(
    scripts = True ,
    javascript = True ,
    comments = True ,
    style = False ,
    links = True ,
    meta = False,
    page_structure = None ,
    processing_instructions = True ,
    embedded = True ,
    frames = True ,
    forms = True ,
#    annoying_tags = True ,
#    remove_tags = None ,
#    allow_tags = allowed_tags ,
    remove_unknown_tags = False ,
#    safe_attrs_only = True ,
#    add_nofollow = False ,

)
importants = {
    'title': 1,
    'h1': 2,
    'h2': 3,
    'h3': 4,
    'h4': 4,
    'h5': 4,
    'h6': 4,
    'strong': 5,
    'b': 5,
}
def match_string(w, match):
    match_text = match.lower()
    match_ratio = 0.7+ 0.1 * abs((len(match_text)-len(w))/float(len(match_text)+len(w)))
    return difflib.SequenceMatcher(None, match_text, w).ratio()>match_ratio

for file in ['ss', 'zip']:
    print file
    HTML_STR = open(PATH+'/'+file).read()
    
    s = l.document_fromstring(HTML_STR)

    for el in s.iter():
        el.tail = ' '
    
    s = cleaner.clean_html(s)

    texts = []
    for el in s.iter():
        if el.tag=='a' and el.get('rel')=='nofollow':
            continue
        if el.text and el.text.strip() != '':
            important = el.tag=='head'
            texts.append({
                'text': el.text.strip(),
                'important': importants[el.tag] if el.tag in importants.keys() else 0,
            })
    found_texts = len(texts)
    for i in range(found_texts):
        for p, params in search_params.items():
            for w in params['words']:
                if match_string(w, texts[i]['text']):
                    print texts[i]['text']+' <----> '+w
                    if (i+1 < found_texts):
                        print texts[i+1]


    out = l.tostring(s, encoding=unicode)
    codecs.open(PATH+'/'+file+'-parse.html', encoding='utf-8', mode='w').write(out)
