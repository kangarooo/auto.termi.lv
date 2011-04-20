# -*- coding: utf-8 -*-

import logging

class Logger:

    def __init__(self, f, name):
        logger = logging.getLogger(name)
        logger.setLevel(logging.DEBUG)
        fh = logging.FileHandler(f)
        fh.setLevel(logging.DEBUG)
        fh.setFormatter(logging.Formatter("%(asctime)s - %(levelname)s - %(message)s"))
        logger.addHandler(fh)
        self._logger = logger

    def info(self, msg):
        self._logger.info(msg)