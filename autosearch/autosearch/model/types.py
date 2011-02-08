"""types"""
from sqlalchemy.types import SmallInteger
from sqlalchemy.types import TypeDecorator


class Currency(TypeDecorator):

    impl = SmallInteger
    values = ['LVL', 'USD', 'EUR']

    def process_result_value(self, value, dialect):
        if value is not None:
            return self.values[value]

