# -*- coding: utf-8 -*-
"""Url content model"""
from sqlalchemy import Column, ForeignKey
from sqlalchemy.types import Integer, Boolean, DateTime, String, Unicode, UnicodeText
from sqlalchemy.orm import relation, backref

from autosearch.model.meta import Base



class UrlContent(Base):
    __tablename__ = "url_content"

    id = Column(Integer, primary_key=True)
    added = Column(DateTime())
    url_id = Column(Integer, ForeignKey('url.id'))

    content = Column(UnicodeText())
    parsed = Column(Boolean())
    error = Column(Unicode(500))
    fetch_code = Column(String(20))

    url = relation('Url', backref=backref('url_content', uselist=False))

