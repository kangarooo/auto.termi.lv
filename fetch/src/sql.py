from sqlalchemy import *
db = create_engine('postgresql+psycopg2://auto.termi.lv:QwErT@localhost/auto.termi.lv')
#create_engine('postgres://scott:tiger@localhost/mydatabase')
db.echo = False  # Try changing this to True and see what happens

metadata = MetaData(db)


marks = Table('mark', metadata,
    Column('id', Integer, Sequence('mark_id_seq'), primary_key=True),
    Column('name', String),
    Column('image', String),
)
marks.create()
models = Table('model', metadata,
    Column('id', Integer, Sequence('model_id_seq'), primary_key=True),
    Column('mark_id', Integer, ForeignKey('mark.id')),
    Column('name', String),
    Column('image', String),
)
models.create()
#cars = Table('car', metadata,
#    Column('id', Integer, Sequence('model_id_seq'), primary_key=True),
#    Column('mark_id', Integer, ForeignKey('mark.id')),
#    Column('name', String),
#    Column('image', String),
#)
#models.create()
