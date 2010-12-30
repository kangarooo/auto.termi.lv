# -*- coding: utf-8 -*-

import os
import re
import lxml.html
#from lxml import etree
from lxml.html.clean import Cleaner
import difflib

class HtmlParser:
    allowed_tags = ['html', 'head', 'body',
        'a', 'img', 'b', 'strong',
        'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
    ]
#    html string
    html_str = ''
#    root element
    root = ''
#    parsed text
    text = ''
    def __init__(self, html):
        self.html_str = html
        self.root = lxml.html.document_fromstring(self.html_str)
        self._remove_tags()
        self.text = self._get_content()
        self.text = self._remove_special_chars(self.text)
        self.words = self.text.split(' ')
#        for p in self.words:
#            print p
        self.total_words = len(self.words)
    
    def get_image(self):
        for el in self.root.iter():
            if el.tag=='img' and el.getparent().tag=='a':
                src = el.get('src')
                href = el.getparent().get('href')
                print href

    def get(self, possible, params):
        if 'in_tag' in params:
            return self._match_in_tag(possible, params)
        for p in possible:
            p_words = len(p.split(' '))
            for i in range(self.total_words):
                search = []
                for j in range(p_words):
                    if i+j<self.total_words:
                        search.append(self.words[i+j])

                if self._match_string(' '.join(search).lower(), p):
                    match = self._match_in_text(i+j+1, params)
                    if match is not False:
                        return match
        return False

    def _match_in_tag(self, possible, params):
        found = False
        for el in self.root.iter():
            text = el.text_content().strip()
            if text=='':
                continue
            if found:
                return {
                    'type': 'in_tag',
                    'result': text,
                }
            for pos in possible:
                if self._match_string(text.lower(), pos):
                    found = True
                    continue
            if 'before' in params:
                if len(text.split(' '))>3+len(params['before'].split(' ')) or len(text)-1<=len(params['before']):
                    continue
                if text[:len(params['before'])].lower()==params['before'].lower():
                    return {
                        'type': 'in_tag',
                        'result': text[len(params['before']):].strip(),
                    }
        return False

    def _match_in_text(self, position, params):
        if 'regex' in params:
            reg = re.compile(params['regex'], re.IGNORECASE)
        search = []
        for i in range(position, position+4):
            if not i<self.total_words:
                return False
            search.append(self.words[i])
            if 'regex' in params:
                prelam = params['prelambda'] if 'prelambda' in params else lambda x: x
                res = reg.search(prelam(' '.join(search).lower()))
                if res:
                    lam = params['lambda'] if 'lambda' in params else lambda x: x
                    return {
                        'type': 'regex',
                        'result': lam(res.group(params['group'] if 'group' in params else 0)),
                        'match': ' '.join(search)
                    }
            if 'possible' in params:
                for j in range(len(params['possible'])):
                    if type(params['possible'][j]) is not list:
                        params['possible'][j] = [params['possible'][j]]
                    for x in range(len(params['possible'][j])):
                        possible_len = len(params['possible'][j][x].split(' '))
                        if(possible_len>=len(search)):
                            continue
                        create_string = ' '.join([search[-possible_len+y-1] for y in range(possible_len)])
                        if self._match_string(create_string.lower(), params['possible'][j][x].lower()):
    #                        return params['possible'][j]
                            return {
                                'type': 'possible',
                                'result': j,
                                'match': create_string,
                            }
        return False
    
    def _match_string(self, w, match):
        match_text = match.lower()
        match_ratio = 0.7+ 0.1 * abs((len(match_text)-len(w))/float(len(match_text)+len(w)))
        return difflib.SequenceMatcher(None, match_text, w).ratio()>match_ratio

    def _remove_special_chars(self, s):
        good = re.compile(u"([^a-z0-9āčēģīķļņūšžĀČĒĢĪĶĻŅŪŠŽабвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ\-.,/ €$])+", re.IGNORECASE)
        s = good.sub(' ', s)
        s = s.replace('.', '. ')
        s = s.replace(u'$', u'$ ')
        s = s.replace(u'€', u'€ ')
        s = s.replace(',', ', ')
        spaces = re.compile("\s+")
        s = spaces.sub(' ', s)
        words = s.split(' ')
        for w in words:
            if w=='':
                words.remove(w)
        return ' '.join(words)

    def _remove_tags(self):
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
#        patch to add space in tags
        for el in self.root.iter():
            if el is not None and el.text:
                el.text = el.text+' '
            if el is not None and el.tail:
                el.tail = el.tail+' '
#        remove tags
        self.root = cleaner.clean_html(self.root)
        for el in self.root.iter():
            if el.tag=='a' and el.get('rel')=='nofollow':
                el.text = ''
                el.drop_tag()

    def _get_content(self):
        return self.root.text_content()