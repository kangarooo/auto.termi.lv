# -*- coding: utf-8 -*-
"""Url model"""
from sqlalchemy import Column, ForeignKey
from sqlalchemy.types import Integer, Boolean, DateTime, String, Unicode, UnicodeText
from sqlalchemy.orm import relation, backref

from autosearch.model.meta import Base



class Url(Base):
    __tablename__ = "url"

    id = Column(Integer, primary_key=True)
    added = Column(DateTime())
    auto_id = Column(Integer, ForeignKey('auto.id'))
    url = Column(Unicode(500))
    content = Column(UnicodeText())
    parsed = Column(Boolean())
    error = Column(Unicode(500))
    fetch_code = Column(String(20))

    auto = relation('Auto', backref=backref('url', order_by=id))

