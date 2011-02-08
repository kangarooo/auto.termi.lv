"""currency rates"""
from sqlalchemy import Column
from sqlalchemy.types import Integer, Float, DateTime

from autosearch.model.meta import Base

from autosearch.model.types import Currency

class CurrencyRate(Base):
    __tablename__ = "currency_rate"

    id = Column(Integer, primary_key=True)
    added = Column(DateTime())
    currency = Column(Currency(1))
    rate = Column(Float(precision=2))

#    def __init__(self, name=''):
#        self.name = name


