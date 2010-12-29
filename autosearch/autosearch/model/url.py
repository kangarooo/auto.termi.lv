# -*- coding: utf-8 -*-
"""Url model"""
from sqlalchemy import Column
from sqlalchemy.types import Integer, Boolean, DateTime, String, Unicode, UnicodeText

from autosearch.model.meta import Base



class Url(Base):
    __tablename__ = "url"

    id = Column(Integer, primary_key=True)
    added = Column(DateTime())
    url = Column(Unicode(500))
    content = Column(UnicodeText())
    parsed = Column(Boolean())
    error = Column(Unicode(500))
    fetch_code = Column(String(20))

