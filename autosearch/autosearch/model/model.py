"""Model model"""
from sqlalchemy import Column, ForeignKey
from sqlalchemy.types import Integer, Unicode, DateTime
from sqlalchemy.orm import relation, backref

from autosearch.model.meta import Base

class Model(Base):
    __tablename__ = "model"

    id = Column(Integer, primary_key=True)
    last_added = Column(DateTime())
    name = Column(Unicode(100))
    mark_id = Column(Integer, ForeignKey('mark.id'))

    mark = relation('Mark', backref=backref('model', order_by=name))

    def __repr__(self):
        return "<Model('%s')" % self.name
