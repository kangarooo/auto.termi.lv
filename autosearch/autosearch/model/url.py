# -*- coding: utf-8 -*-
"""Url model"""
from sqlalchemy import Column, ForeignKey
from sqlalchemy.types import Integer, DateTime, Unicode
from sqlalchemy.orm import relation, backref

from autosearch.model.meta import Base



class Url(Base):
    __tablename__ = "url"

    id = Column(Integer, primary_key=True)
    added = Column(DateTime())
    auto_id = Column(Integer, ForeignKey('auto.id'))
    url = Column(Unicode(500))

    auto = relation('Auto', backref=backref('url'))

