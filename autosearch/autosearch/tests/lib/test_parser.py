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

        self.assertEquals([{
                    'url': 'm',
                    'value': [
                        {'main': 10, 'sub': None},
                        {'main': 12, 'sub': [50, 52]}
                ]
            }],
            Parser().parse_url('m-BMW;Mercedes(s5,28)', params))

        self.assertEquals([{
                    'url': 'm',
                    'value': [
                        {'main': 10, 'sub': None},
                ]
            }],
            Parser().parse_url('m-BMW', params))

        self.assertEquals([{
                    'url': 'm',
                    'value': [
                        {'main': 10, 'sub': None},
                        {'main': 12, 'sub': [52]}
                ]
            }],
            Parser().parse_url('m-BMW;Mercedes(28)', params))
            
        self.assertEquals([{
                    'url': 'm',
                    'value': [
                        {'main': 12, 'sub': [50, 52]}
                ]
            }],
            Parser().parse_url('m-Mercedes(s5,28)', params))

        self.assertRaises(UrlError,
            Parser().parse_url('m-', params), 'm-, not much all')


#        for url in [
##            marks tests
#                {
#                    'url': 'm-BMW;Mercedes(s5,28)',
#                    'result': [
#                            {
#                                'url': 'm',
#                                'value': [
#                                    {'main': 10, 'sub': None},
#                                    {'main': 12, 'sub': [50, 52]}
#                                ]},
#                ]},
#                {
#                    'url': 'm-BMW;Mercedes',
#                    'result': [
#                            {
#                                'url': 'm',
#                                'value': [
#                                    {'main': 10, 'sub': None},
#                                    {'main': 12, 'sub': None}
#                                ]},
#                ]},
#                {
#                    'url': 'm-Mercedes(28)',
#                    'result': [
#                            {
#                                'url': 'm',
#                                'value': [
#                                    {'main': 12, 'sub': [52]}
#                                ]},
#                ]},
##                slider tests
#                {
#                    'url': 't-1-5',
#                    'result': [
#                            {
#                                'url': 't',
#                                'value': {'min': 1, 'max': 5}
#                            },
#                ]},
#                {
#                    'url': 't-0-30',
#                    'result': [
#                            {
#                                'url': 't',
#                                'value': {'min': 0, 'max': None}
#                            },
#                ]},
#                {
#                    'url': 't-2-30',
#                    'result': [
#                            {
#                                'url': 't',
#                                'value': {'min': 2, 'min': 12}
#                            },
#                ]},
#            ]:
#            p = Parser()
#            self.assertEquals(url['result'], p.parse_url(url['url'], params))