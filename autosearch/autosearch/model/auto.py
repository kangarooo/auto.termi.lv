# -*- coding: utf-8 -*-
"""Auto model"""
from sqlalchemy import Column, ForeignKey
from sqlalchemy.types import TypeDecorator, Integer, SmallInteger, Float, String, DateTime, Date
from sqlalchemy.orm import relation, backref

from autosearch.model.meta import Base

class EngineType(TypeDecorator):

    impl = SmallInteger
    values = ['Gas', 'Gasoline', 'Diesel', 'Hybrid']

    def process_result_value(self, value, dialect):
        if value is not None:
            return self.values[value]

class GearType(TypeDecorator):

    impl = SmallInteger
    values = ['Manual', 'Auto']

    def process_result_value(self, value, dialect):
        if value is not None:
            return self.values[value]

class DriveType(TypeDecorator):

    impl = SmallInteger
    values = ['Rear', 'Front', 'Four']

    def process_result_value(self, value, dialect):
        if value is not None:
            return self.values[value]

class CarType(TypeDecorator):

    impl = SmallInteger
    values = ['SUV', 'Hatchback', 'Cabriolet',
        'Coupe', 'Minibus', 'Minivan', 'Pickup', 'Sedan', 'Universal']

    def process_result_value(self, value, dialect):
        if value is not None:
            return self.values[value]

class Place(TypeDecorator):

    impl = SmallInteger
    values = ['Riga', 'Riga dis.', 'Jurmala dis.', 'Aizkraukle dis.', 'Aluksne dis.',
        'Balvi dis.', 'Bauska dis.', 'Cesis dis.', 'Daugavpils dis.', 'Dobele dis.',
        'Gulbene dis.', 'Jelgava dis.', 'Jekabpils dis.', 'Kraslava dis.', 'Kuldiga dis.',
        'Liepaja dis.', 'Limbazi dis.', 'Ludza dis.', 'Madona dis.', 'Ogre dis.',
        'Preili dis.', 'Rezekne dis.', 'Saldus dis.', 'Talsi dis.', 'Tukums dis.',
        'Valka dis.', 'Valmiera dis.', 'Ventspils dis.']

    def process_result_value(self, value, dialect):
        if value is not None:
            return self.values[value]

class Color(TypeDecorator):

    impl = SmallInteger
    values = []

    def process_result_value(self, value, dialect):
        if value is not None:
            return self.values[value]

class Currency(TypeDecorator):

    impl = SmallInteger
    values = ['LVL', 'USD', 'EUR']

    def process_result_value(self, value, dialect):
        if value is not None:
            return self.values[value]

#                url:
#                m-(mark)
#                y-(izlaiduma gads)
#                c-(dzinēja tilpums)
#                f-(fuel)
#               u-(ātrumi) - feature
#                g-(ātrumkārba)
#               d-(piedziņa) - feature
#                k-(Nobraukums)
#                t-(tehniskā)
#                o-(virsbūves tips)
#                l-(place) - feature
#                r-(color) - feature
#                p-(cena)
class Auto(Base):

    __tablename__ = "auto"

    id = Column(Integer, primary_key=True)
    added = Column(DateTime())
    model_id = Column(Integer, ForeignKey('model.id'))
    year = Column(Date())                               #gads
    engine = Column(Float(precision=2))                 #tilpums
    engine_type = Column(EngineType(2))                 #degviela
    gearbox = Column(SmallInteger(2))                   #ātrumi
    gear_type = Column(GearType(1))                     #ātrumkārba
    drive_type = Column(DriveType(1))                   #piedziņa
    mileage = Column(Integer(12))                        #nobraukums
    tehpassport = Column(Date())                        #tehniskā
    car_type = Column(CarType(2))                       #virsbūves tips
    place = Column(Place(2))                            #vieta
    color = Column(Color(2))                            #krāsa
    price = Column(Float(precision=2))#billion          #cena
    currency = Column(Currency(1))                      #valūta
    
    telephone = Column(String(32))                      #telefons
    url_id = Column(Integer, ForeignKey('url.id'))      #saite

    model = relation('Model', backref=backref('auto', order_by=id))
    url = relation('Url', backref=backref('auto', order_by=id))

#    def __repr__(self):
#        return "<Auto('%s')" % self.name
