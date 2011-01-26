"""Helper functions

Consists of functions to typically be used within templates, but also
available to Controllers. This module is available to templates as 'h'.
"""
# Import helpers as desired, or define your own, ie:
#from webhelpers.html.tags import checkbox, password
from pylons.i18n import get_lang, set_lang
from pylons import config


def language_path_prefix():    
    lang = get_lang()[0]
    if lang==config['lang']:
        return ''
    if lang=='es':
        lang = 'lg'
    return '/'+lang

def language():
    lang = get_lang()[0]
    if lang=='es':
        return 'lg'
    return lang

def home_page():
    l = language_path_prefix()
    return '/' if l=='' else l

def set_language(l):
    if l:
        set_lang('es' if l=='lg' else l)
    
def detect_language(url):
        language = None
        if url and len(url)>=3 and url[1:3] in ('ru', 'lg'):
            language = url[1:3]
            url = '/' if len(url)==3 else url[3:]
        return url, language
