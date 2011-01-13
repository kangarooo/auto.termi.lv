#from autosearch.tests import *
import unittest
from autosearch.lib.parser import *

class TestParser(unittest.TestCase):

    def test_parser(self):
        params = [
            {
                'url': 't',
                'type': 'slider',
                'value': {
                    'min': 0,
                    'max': 12
                },
            },
            {
                'url': 'f',
                'type': 'chooser',
                'value': ['ban', 'ban2']
            },
            {
                'url': 'm',
                'type': 'mark',
                'value': [
                {
                    'id': 10,
                    'name': 'BMW',
                    'sub': [{'id': 54, 'name': 'b5'}],
                }
                ,{
                    'id': 12,
                    'name': 'Mercedes',
                    'sub': [{'id': 50, 'name': 's5'},{'id': 52, 'name': '28'}],
                }
                ]
            }
        ]
        p = Parser(params)
        self.assertEquals([{
                    'url': 'm',
                    'value': [
                        {'main': 10, 'sub': None},
                        {'main': 12, 'sub': [50, 52]}
                ]
            }],
            p.parse_url('m-BMW;Mercedes(s5,28)'))

        self.assertEquals([{
                    'url': 'm',
                    'value': [
                        {'main': 10, 'sub': None},
                ]
            }],
            p.parse_url('m-BMW'))

        self.assertEquals([{
                    'url': 'm',
                    'value': [
                        {'main': 10, 'sub': None},
                        {'main': 12, 'sub': [52]}
                ]
            }],
            p.parse_url('m-BMW;Mercedes(28)'))
            
        self.assertEquals([{
                    'url': 'm',
                    'value': [
                        {'main': 12, 'sub': [50, 52]}
                ]
            }],
            p.parse_url('m-Mercedes(s5,28)'))

        self.assertRaises(UrlError,
            p.parse_url, 'm-')

        self.assertRaises(UrlError,
            p.parse_url, 'm')

#        test slider
#        error test
        self.assertRaises(UrlError,
            p.parse_url, 't')

        self.assertRaises(UrlError,
            p.parse_url, 't-')

        self.assertRaises(UrlError,
            p.parse_url, 't--1-')

        self.assertRaises(UrlError,
            p.parse_url, 't-0-30')

        self.assertRaises(UrlError,
            p.parse_url, 't-5-4')

#            other tests
        self.assertEquals([{
            'url': 't',
            'value': {
                'min': None,
                'max': None
            }
        }],
            p.parse_url('t-0-12'))

        self.assertEquals([{
            'url': 't',
            'value': {
                'min': None,
                'max': None
            }
        }],
            p.parse_url('t-0-'))

        self.assertEquals([{
            'url': 't',
            'value': {
                'min': None,
                'max': None
            }
        }],
            p.parse_url('t--12'))

        self.assertEquals([{
            'url': 't',
            'value': {
                'min': 1,
                'max': None
            }
        }],
            p.parse_url('t-1-12'))

        self.assertEquals([{
            'url': 't',
            'value': {
                'min': 1,
                'max': 5
            }
        }],
            p.parse_url('t-1-5'))


#            chooser test
        self.assertRaises(UrlError,
            p.parse_url, 'f-')

        self.assertRaises(UrlError,
            p.parse_url, 'f-baf')

        self.assertRaises(UrlError,
            p.parse_url, 'f-ban;ban')

        self.assertEquals([{
            'url': 'f',
            'value': [1]
        }],
            p.parse_url('f-ban2'))

        self.assertEquals([{
            'url': 'f',
            'value': [0,1]
        }],
            p.parse_url('f-ban;ban2'))

