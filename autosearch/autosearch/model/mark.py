"""Mark model"""
from sqlalchemy import Column
from sqlalchemy.types import Integer, Unicode

from autosearch.model.meta import Base

class Mark(Base):
    __tablename__ = "mark"

    id = Column(Integer, primary_key=True)
    name = Column(Unicode(100))

#    def __init__(self, name=''):
#        self.name = name

    def __repr__(self):
        return ("<Mark('%s')" % self.name).encode('utf-8')
