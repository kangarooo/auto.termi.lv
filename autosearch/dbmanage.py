#!/usr/bin/env python
from migrate.versioning.shell import main
main(url='postgresql+psycopg2://auto.termi.lv:qwer@localhost/auto.termi.lv', debug='False', repository='autosearch/migration')
