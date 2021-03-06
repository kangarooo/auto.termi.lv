"""The application's model objects"""
from autosearch.model.meta import Session, metadata
from autosearch.model.mark import Mark
from autosearch.model.model import Model
from autosearch.model.auto import Auto
from autosearch.model.url import Url

from autosearch.model.url_content import UrlContent
from autosearch.model.image import Image
from autosearch.model.currency_rate import CurrencyRate

def init_model(engine):
    """Call me before using any of the tables or classes in the model"""
    Session.configure(bind=engine)
