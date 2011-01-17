"""currency rates"""
from sqlalchemy import Column
from sqlalchemy.types import TypeDecorator, SmallInteger, Integer, Float, DateTime

from autosearch.model.meta import Base

class Currency(TypeDecorator):

    impl = SmallInteger
    values = ['LVL', 'USD', 'EUR']

    def process_result_value(self, value, dialect):
        if value is not None:
            return self.values[value]

class CurrencyRate(Base):
    __tablename__ = "currency_rate"

    id = Column(Integer, primary_key=True)
    added = Column(DateTime())
    currency = Column(Currency(1))
    rate = Column(Float(precision=2))

#    def __init__(self, name=''):
#        self.name = name


