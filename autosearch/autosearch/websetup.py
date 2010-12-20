"""Setup the autosearch application"""
import logging

import pylons.test

from autosearch.config.environment import load_environment
from autosearch.model.meta import Session, metadata

log = logging.getLogger(__name__)

def setup_app(command, conf, vars):
    """Place any commands to setup autosearch here"""
    # Don't reload the app if it was loaded under the testing environment
    if not pylons.test.pylonsapp:
        load_environment(conf.global_conf, conf.local_conf)


    log.info("Creating tables")
    metadata.drop_all(checkfirst=True, bind=Session.bind)
    # Create the tables if they don't already exist
    metadata.create_all(bind=Session.bind)
    log.info("Successfully setup")
