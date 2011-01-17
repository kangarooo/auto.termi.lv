var Popup = new Class({

    Implements: [Events, Options],

//    Binds: ['onDrag', 'onStart', 'onComplete'],

    options: {
        'container': false,
        'lang':{
            'submit': 'Submit'
        }
    },

    initialize: function(options) {
        this.setOptions(options);
        this.container = this.options.container ? this.options.container : document.body;
        this.mask = new Mask();
        this.popup = new Element('div', {'class': 'popup-window'}).inject(this.container).setStyle('top', -1000);
        this.popup_txt = new Element('div', {'class': 'popup-window-content'}).inject(this.popup);
        this.close = new Element('span', {'class': 'popup-window-close', 'html': 'x', 'events': {
            'click': function(){
                this.hide();
            }.bind(this)
        }}).inject(this.popup);
    },
    show: function(){
        this.mask.show();
        this.popup.morph({
            'top': this.container.getScroll().y+(window.getSize().y-this.popup.getSize().y)/2,
            'left': this.container.getScroll().x+(window.getSize().x-this.popup.getSize().x)/2
        });
    },
    hide: function(){
        this.mask.hide();
        this.removeSpinner();
        this.popup.morph({
            'top': -1000
        });
        this.popup_txt.empty();
    },
    showFeedback: function(name, txt,  url){
        var fields = {
            'email': {
                'name': 'name',
                'field': 'input',
                'value': {
                    'type': 'text'
                }
            },
            'text': {
                'name': 'sugsession',
                'field': 'textarea',
                'value': {
                    'cols': 10,
                    'rows': 10
                }
            }
        }
        new Element('h2', {'html': name}).inject(this.popup_txt);
        new Element('p', {'html': txt}).inject(this.popup_txt);
        var form = new Element('form', {
            'action': url
        }).inject(this.popup_txt);
        Object.each(fields, function(item, name){
            var label = new Element('label', {'for': name}).inject(form);
            new Element('span', {'html': item['name']}).inject(label);
            new Element(item['field'], item['params']).inject(label);
        });
        var b = new Element('div', {'class': 'button submit-button', 'html': this.options.lang['submit'], 'events': {
            'click': function(){
                this.fireEvent('feedback', form);
            }.bind(this)
        }}).inject(form);
        this.show();
    },
    showText: function(name, txt){
        new Element('h2', {'html': name}).inject(this.popup_txt);
        new Element('p', {'html': txt}).inject(this.popup_txt);
        this.show();
    },
    popupSpinner: function(){
        this.spiner = new Spinner(this.popup).show();
    },
    removeSpinner: function(){
        if(this.spiner)
            this.spiner.destroy();
        this.spiner = undefined;
    }
});