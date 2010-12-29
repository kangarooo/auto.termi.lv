# -*- coding: utf-8 -*-
"""Setup the autosearch application"""
import logging

import pylons.test

from autosearch.config.environment import load_environment
from autosearch.model.meta import Session, Base

"""creating base data"""
from autosearch.lib.base import Session
from autosearch.model.mark import Mark
#from autosearch.model.model import Model
#from autosearch.model.auto import Auto
log = logging.getLogger(__name__)

def setup_app(command, conf, vars):
    """Place any commands to setup autosearch here"""
    # Don't reload the app if it was loaded under the testing environment
    if not pylons.test.pylonsapp:
        load_environment(conf.global_conf, conf.local_conf)


    log.info("Creating tables")
    Base.metadata.drop_all(checkfirst=True, bind=Session.bind)
    # Create the tables if they don't already exist
    Base.metadata.create_all(bind=Session.bind)
    for m in u'Acura,Alfa Romeo,Audi,BMW,Bugatti,Buick,Cadillac,Chevrolet,Chrysler,Citroen,Dacia,Daewoo,Daihatsu,Dodge,Fiat,Ford,GAZ,Honda,Hummer,Hyundai,Infiniti,Isuzu,Jaguar,Jeep,Kia,Lada,Lancia,Land Rover,Lexus,Lincoln,Mazda,Mercedes-Benz,Mini,Mitsubishi,Moskvich,Nissan,Opel,Peugeot,Pontiac,Porsche,Renault,Rover,Saab,Seat,SsangYong,Smart,Subaru,Suzuki,Skoda,Toyota,VAZ,Volkswagen,Volvo,Iž,UAZ,ZAZ'.split(','):
        Session.add(Mark(name=m))
    Session.commit()
#    Session.add(Model(name=u'supa', mark_id=1))
#    Session.commit()
#    Session.add(Auto(url=u'drundels',engine_type=1,model_id=1))
#    Session.add(Auto(url=u'drun2',engine_type=0, model_id=1))
#    Session.add(Auto(url=u'drun',model_id=1))
#    Session.commit()
    
    log.info("Successfully setup")
