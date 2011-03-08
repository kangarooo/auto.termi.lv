"""Model model"""
from sqlalchemy import Column, ForeignKey
from sqlalchemy.types import Integer, Unicode, DateTime, Boolean
from sqlalchemy.orm import relation, backref

from autosearch.model.meta import Base
#from autosearch.model.types import Published

class Model(Base):
    __tablename__ = "model"

    id = Column(Integer, primary_key=True)
    last_added = Column(DateTime())
    name = Column(Unicode(100))
    published = Column(Boolean())

    mark_id = Column(Integer, ForeignKey('mark.id'))

    mark = relation('Mark', backref=backref('model', order_by=name))

    def __repr__(self):
        return "<Model('%s')" % self.name
