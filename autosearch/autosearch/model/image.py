# -*- coding: utf-8 -*-
"""image model"""
from sqlalchemy import Column, ForeignKey
from sqlalchemy.types import Integer, String, Unicode, DateTime
from sqlalchemy.orm import relation, backref

from autosearch.model.meta import Base


class Image(Base):

    __tablename__ = "image"

    id = Column(Integer, primary_key=True)
    added = Column(DateTime())
    auto_id = Column(Integer, ForeignKey('auto.id'))
    url = Column(Unicode(100))
    path = Column(String(100))
    
    auto = relation('Auto', backref=backref('image', order_by=id))

#    def __repr__(self):
#        return "<Auto('%s')" % self.name
