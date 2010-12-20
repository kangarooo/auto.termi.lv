"""Model model"""
from sqlalchemy import Column, ForeignKey
from sqlalchemy.types import Integer, SmallInteger, Float, Boolean, DateTime, Date, Unicode
from sqlalchemy.orm import relation, backref

from autosearch.model.meta import Base

class Auto(Base):
    __tablename__ = "auto"

    id = Column(Integer, primary_key=True)
    added = Column(DateTime())
    url = Column(Unicode(500))
    year = Column(Date())
    engine = Column(Float(precision=2))
    diesel = Column(Boolean())
    gearbox = Column(SmallInteger(2))
    gearauto = Column(Boolean())
    milage = Column(Integer(12))
    color = Column(Unicode(32))

    tehpassport = Column(Date())
    price = Column(Float(precision=2))#billion

    model_id = Column(Integer, ForeignKey('model.id'))
    
    model = relation('Model', backref=backref('auto', order_by=id))

    def __repr__(self):
        return "<Auto('%s')" % self.name
