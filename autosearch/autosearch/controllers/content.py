# -*- coding: utf-8 -*-

import logging

from pylons import request, response, session, tmpl_context as c, url
from pylons.controllers.util import abort, redirect

from autosearch.lib.base import BaseController, render

log = logging.getLogger(__name__)

class ContentController(BaseController):

    def index(self):
        # Return a rendered template
        #return render('/content.mako')
        # or, return a response
        return 'Hello World'

    def about(self):
        c.title = u"""Par vietni"""
        c.content = u"""
                <p>Mēs esam izveidojuši meklētāju, kas savāc no
                Latvijas sludinājumu portāliem auto sludinājumus
                </p>
                """
        return render('base/content.html')

    def feedback(self):
        c.title = u"""Atpakaļ saite"""
        c.content = u"""<p>
                Ja jums ir vēlme sazināties ar lapas saimnieku, tad to var izdarīt
                caur norādīto epast: <a href="auto@termi.lv">auto@termi.lv</a>.
                
                </p>
                """
        return render('base/content.html')
