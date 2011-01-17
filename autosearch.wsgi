import os, sys
sys.path.append('/www/auto.termi.lv/autosearch')
os.environ['PYTHON_EGG_CACHE'] = '/www/auto.termi.lv/autosearch/python-eggs'

from paste.deploy import loadapp

application = loadapp('config:/www/auto.termi.lv/autosearch/production.ini')
