/*
---
script: mooml.js
version: 1.3.0
description: Mooml is a javasctript templating engine for HTML generation, powered by Mootools.
license: MIT-style
download: http://mootools.net/forge/p/mooml
source: http://github.com/eneko/mooml
htmltags: http://www.w3schools.com/html5/html5_reference.asp

authors:
- Eneko Alonso: (http://enekoalonso.com)

credits:
- Ed Spencer: Mooml is based on Ed Spencer's Jaml (http://edspencer.github.com/jaml)
- Tim Schmidt: contributed with function and number argument types
- Josh Cohen: helped with node stacks for nested templates
- Vasili Sviridov: for the mixin idea

provides:
- Mooml
- Mooml.Template
- Mooml.Templates

requires:
- core/1.3.0:Class
- core/1.3.0:Elements
- core/1.3.0:Array

...
*/

var Mooml = {

	version: '1.2.4',
	templates: {},
	engine: { callstack: [], tags: {} },

	htmlTags: [
		"a", "abbr", "address", "area", "article", "aside", "audio",
		"b", "base", "bdo", "blockquote", "body", "br", "button",
		"canvas", "caption", "cite", "col", "colgroup", "command",
		"datalist", "dd", "del", "details", "dialog", "dfn", "div", "dl", "dt",
		"em", "embed",
		"fieldset", "figure",
		"footer", "form",
		"h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "hgroup", "hr", "html",
		"i", "iframe", "img", "input", "ins",
		"keygen", "kbd",
		"label", "legend", "li", "link",
		"map", "mark", "menu", "meta", "meter",
		"nav", "noscript",
		"object", "ol", "optgroup", "option", "output",
		"p", "param", "pre", "progress",
		"q",
		"rp", "rt", "ruby",
		"samp", "script", "section", "select", "small", "source", "span", "strong", "style", "sub", "sup",
		"table", "tbody", "td", "textarea", "tfoot", "th", "thead", "time", "title", "tr",
		"ul",
		"var", "video",
		// Deprecated in HTML 5
		"acronym", "applet", "basefont", "big", "center", "dir", "font", "frame", "frameset", "noframes", "s", "strike", "tt", "u", "xmp"
		// Not supported tags
		// "code"
	],

	/**
	 * Evaluates a Mooml template supporting nested templates
	 * @param {Mooml.Template} template The template function
	 * @param {Object|Array} data Optional data object or array of objects
	 */
	evaluate: function(template, data) {
		var elements = [];
		this.engine.callstack.push(template);

		if (template.prepared == false) {
			template.code = this.prepare(template.code);
			template.prepared = true;
		}

		Array.from([data, {}].pick()).each(function(params, index) {
			template.code(params, index);
			elements.append(template.nodes.filter(function(node) {
				return node.getParent() === null;
			}));
			template.nodes.empty();
		});

		this.engine.callstack.pop();
		if (this.engine.callstack.length) {
			if (template.elementRefs) {
				Array.extend(this.engine.callstack.getLast().elementRefs, template.elementRefs);
			}
		}

		return (elements.length > 1) ? elements : elements.shift();
	},

	/**
	 * Initializes the engine generating a javascript function for every html
	 * tag that can be used on the template.
	 * Template tag functions can receive options for the element, child 
	 * elements and html code as parameters.
	 * initialize can be called by the user in case of adding additional tags.
	 */
	initEngine: function() {
		this.htmlTags.each(function(tag) {
			Mooml.engine.tags[tag] = function() {
				var template = Mooml.engine.callstack.getLast();
				var el = new Element(tag);

				for (var i=0, l=arguments.length; i<l; i++) {
					var argument = arguments[i];
					if (typeOf(argument) === "function") argument = argument();
					switch (typeOf(argument)) {
						case "array":
						case "element":
						case "collection": {
							el.adopt(argument);
							break;
						}
						case "string": {
							if (template) {
								el.getChildren().each(function(child) {
									template.nodes.erase(child);
								});
							}
							el.set('html', el.get('html') + argument);
							break;
						}
						case "number": {
							el.appendText(argument.toString());
							break;
						}
						case "object": {
							if (i === 0) {
								if (template && template.elementRefs && argument.id) {
									template.elementRefs[argument.id] = el;
								}
								el.set(argument);
							} else if (typeOf(argument.toElement) == "function") {
								el.adopt(argument.toElement());
							}
							break;
						}
					}
				}

				if (template) template.nodes.push(el);
				return el;
			}
		});

		window.addEvent('domready', function() {
			document.getElements('script[type=text/mooml]').each(function(template) {
				Mooml.register(template.get('name'), new Function(['data', 'index'], template.get('text')));
			});
		});
	},

	/**
	 * Prepares a template function so it can be called directly without using eval
	 * @param {Function} code The template function to prepare
	 */
	prepare: function(code) {
		var codeStr = code.toString();
		var args = codeStr.match(/\(([a-zA-Z0-9,\s]*)\)/)[1].replace(/\s/g, '').split(',');
		var body = codeStr.match(/\{([\s\S]*)\}/m)[1];
		for (var i=this.htmlTags.length; --i >= 0; ) {
			body = body.replace(new RegExp('(^|[^\\w.])(' + this.htmlTags[i] + ')([\\s]*(?=\\())', 'g'), '$1Mooml.engine.tags.$2$3')
		}
		return new Function(args, body);
	}

};

/**
 * Template class for Mooml templates
 */
Mooml.Template = new Class({
	nodes: [],

	initialize: function(name, code, options) {
		if (options && options.elementRefs && typeof(options.elementRefs) === "object") {
			this.elementRefs = options.elementRefs;
		}
		this.name = name;
		this.code = code;
		this.prepared = false;
	},

	render: function(data) {
		return Mooml.evaluate(this, data);
	}
});


/**
 * Mixin for implemenation in Mootools classes: Implements: [Mooml.Templates, Options, ...]
 */
Mooml.Templates = new Class({
	templates: {},

	/**
	 * Registers a new template for later use or returns an existing template with that name
	 * @param {String} name The name of the template
	 * @param {Function} code The code function of the template
	 */
	registerTemplate: function(name, code, options) {
		var template = this.templates[name];
		return (template)? template : this.templates[name] = new Mooml.Template(name, code, options);
	},

	/**
	 * Evaluates a registered template or returns null if template not registered
	 * @param {String} name The name of the template to evaluate
	 * @param {Object|Array} data Optional data object or array of objects
	 */
	renderTemplate: function(name, data) {
		var template = this.templates[name];
		return (template)? template.render(data) : null;
	}

});


/**
 * Implement Mooml.Templates into Mooml and alias for backwards compatibility
 */
Object.append(Mooml, new Mooml.Templates());
Mooml.register = Mooml.registerTemplate;
Mooml.render = Mooml.renderTemplate;

Mooml.initEngine();
Locale.define('lv-LV', 'Filter', {
    'All':'Visi',
    'Models':'Modeļi',
    'Year':'Izlaiduma gads',
    'Engine':'Dzinēja tilpums',
    'Engine type':'Degviela',
    'Gear type':'Ātrumkārba',
    'Mileage':'Nobraukums',
    'Tehpassport':'Tehniskā apskate',
    'Car type':'Virsbūves tips',
    'Place':'Vieta',
    'Price':'Cena',

    'Submit button': 'Atlasīt',
    'Submit loading': 'Skaitam'
});
Locale.define('lv-LV', 'Object', {
    'Year': 'Gads',

    'Engine': 'Motors',
    'Gearbox': 'Ātrumkārba',
    'Mileage': 'Nobraukums',
    'Drive type': 'Piedziņa',
    'Tehpassport': 'Tehniskā',
    'Car type': 'Virsbūve',
    'Place': 'Vieta',
    'Color': 'Krāsa',
    'Price': 'Cena',



    'Next':'Nākamie {total} rezultāti',
    'None':'Nav',
    'Months':'mēneši',
    'Month':'mēnesis',
    'Less the month':'Mazāk par mēnesi',
    'gears':'ātrumi'
});
Locale.define('lv-LV', 'Error', {
    'Error': 'Notikusi nenovēršama kļūda!',
    'Error simple text': 'Saņēmām <strong>{status}.</strong> kļūdu,\n\
        ja tas jums neko neizsaka, tad mēs iesakām atjaunot lapu\n\
        (nospiežot pogu atjaunot - refresh),\n\
         savādāk jūs varat novērot negaidītus rezultātus',
    'Warning': 'Šī ir pagaidu versija!',
    'Warning message': 'Pagaidu versijā var tikt novērotas kļūdas. Mes būsim ļoti pateicīgi,\n\
    ja jūs atradīsiet laiku paziņot mums par šīm kļūdām un nepilnībām. Ka arī gaidam jūsu ieteikumus.<br />\n\
    Sazināties ar mums var <a href="/feedback">šeit.</a>.',

    'Browser error': 'Pārlūka problēma!',
    'Browser error text': 'Diemžēl mums nācas secināt, ka mūsu lapa netiek\n\
     atbalstīta uz jūsu pārlūka. Lai novērst šo problēmu, mēs iesakām\n\
    sazināties ar datormeistaru.'
});

Locale.define('en-US', 'Date', {

	months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
	months_abbr: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
	days_abbr: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

	// Culture's date order: MM/DD/YYYY
	dateOrder: ['month', 'date', 'year'],
	shortDate: '%m/%d/%Y',
	shortTime: '%I:%M%p',
	AM: 'AM',
	PM: 'PM',

	// Date.Extras
	ordinal: function(dayOfMonth){
		// 1st, 2nd, 3rd, etc.
		return (dayOfMonth > 3 && dayOfMonth < 21) ? 'th' : ['th', 'st', 'nd', 'rd', 'th'][Math.min(dayOfMonth % 10, 4)];
	},

	lessThanMinuteAgo: 'pirms mazāk kā minūti',
	minuteAgo: 'pirms minūtes',
	minutesAgo: 'pirms {delta} minūtēm',
	hourAgo: 'pirms stundas',
	hoursAgo: 'pirms {delta} stundām',
	dayAgo: 'pirms 1 dienas',
	daysAgo: 'pirms {delta} dienām',
	weekAgo: 'pirms nedēļas',
	weeksAgo: 'pirms {delta} nedēļām',
	monthAgo: 'pirms mēneša',
	monthsAgo: 'pirms {delta} mēnešiem',
	yearAgo: 'pirms gada',
	yearsAgo: 'pirms {delta} gadiem',

	lessThanMinuteUntil: 'mazāk par minūti',
	minuteUntil: 'līdz minūtei',
	minutesUntil: 'līdz {delta} minūtēm',
	hourUntil: 'about an hour from now',
	hoursUntil: 'about {delta} hours from now',
	dayUntil: '1 day from now',
	daysUntil: '{delta} days from now',
	weekUntil: '1 week from now',
	weeksUntil: '{delta} weeks from now',
	monthUntil: '1 month from now',
	monthsUntil: '{delta} months from now',
	yearUntil: '1 year from now',
	yearsUntil: '{delta} years from now'

});
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
});var Filter = new Class({

    Implements: [Events, Options],

    Binds: ['deactiveCount', 'activeCount'],

    options: {
        
    },
    button_period: 0,
    
    initialize: function(options){
        this.setOptions(options);
        this.filter = document.id('filter');
        this.list = new Element('ol').inject(this.filter);
//        this.draw(this.options.filter);
    },
    draw: function(filter){
        var list = this.list;
        Object.each(filter, function(item, index){
            var c = new Element('li', {
                'class': 'filter-item-'+item['url']
            }).inject(list);
            var name = new Element('span', {'class': 'f-name', 'html': item['name']}).inject(c);
            var next = this[item['type']](c, item, this.options.SU);
            if (['l', 'o'].contains(item['url']))
                name.addClass('clickable').addEvents({
                    'click': function(){
                        next.get('reveal').toggle();
                    }
                }).fireEvent('click');
        }.bind(this));
        this.drawButton();
    },
    drawButton: function(){
        this.button = new Element('div', {'class': 'button inactive', 'events': {
            'click': function(){
                this.fireEvent('filter');
            }.bind(this)
        }}).inject(this.filter);
        this.button_text = new Element('span', {'html': this.options.button}).inject(this.button);
        this.button_counter = new Element('span').inject(this.button);
        this.loader = new Element('div', {'class': 'loader', 'styles': {
                'opacity': .9
            }
        }).inject(this.button);
    },
    updateCount: function(c){
        this.button.removeClass('loading');
        if(c==0)
            this.deactiveCount();
        else
            this.activeCount()
//        this.button_text.set('html', this.options.button);
        this.button_counter.set('html', ' ('+c+')');
    },
    activeCount: function(){
        this.button.removeClass('inactive');
    },
    deactiveCount: function(){
        this.button.addClass('inactive');
    },
    loading: function(){
        this.button.removeClass('inactive');
        this.button.addClass('loading');
//        var s = 0;
//        this.button_text.set('html', this.options.button_loading);
//        var el = this.button_counter.set('html', '&nbsp;'.repeat(5));
//        this.button_period = (function(){
//            s = s>=4 ? 0 : s+1;
//            el.set('html', ' '+'.'.repeat(s)+'&nbsp;'.repeat(4-s));
//        }).periodical(900);
    },
    stopLoading: function(){
        this.button.removeClass('loading');
    },
    activateList: function(el){
        el.addEvents({
           'mouseenter': function(){
               this.setStyle('opacity', 1);
//               this.fade(1);
           },
           'mouseleave': function(){
//               if(!this.activeUrl||this.activeUrl=='')
//                   this.fade(0.3);
//               else this.fade(1);
               if(!this.activeUrl||this.activeUrl=='')
                   this.setStyle('opacity', .3);
               else
                   this.setStyle('opacity', 1);
           }
        }).fireEvent('mouseleave');
    },
    mark: function(c, item, SU){
        var view = new Element('span', {
            'class': 'active-decor',
            'html': Locale.get('Filter.All')
        }).inject(c).addEvent('click', function(){
//            document.id('mark-filter').get('reveal').toggle();
            document.id('mark-filter').setStyle('display', 'block').morph({
                'top': 30
            });
        });
        var advancedList = new AdvancedList(c, {
            'menu': item['value'],
            lang: {
                'all': item['lang']['All']
            },
            onChange: function(url){
                c.activeUrl = url;
                c.fireEvent('mouseleave');
                SU.set(item['url'], url);
            },
            onChangeName: function(name){
                view.set('html', name);
            }
        });
        SU.addEvent(item['url']+':changed', function(url){
            c.activeUrl = url;
            c.fireEvent('mouseleave');
            advancedList.setActiveUrl(url);
        });
        SU.addEvent(item['url']+':removed', function(){
            c.activeUrl = '';
            c.fireEvent('mouseleave');
            advancedList.setActiveUrl('');
        });
        this.activateList(c);
        return view;
    },
    slider: function(c, item, SU){
        var slider = new Element('ul', {'class': 'slider'}).inject(c);
        var min = new Element('li', {'class':'min', 'html': item['value']['min']}).inject(slider);
        var max = new Element('li', {'class':'max', 'html': item['value']['max']}).inject(slider);
        var minValue = item['value']['min'].toFloat();
        var maxValue = item['value']['max'].toFloat();
        var decor = new Element('li', {'class':'decor'}).inject(slider);
        var url = '';
        var numberFormats = {
            'c': {
                precision: 1
            },
            'k': {
                group: ' ',
                precision: -4,
                scientific: false
            },
            'p': {
                group: ' ',
                precision: -2,
                scientific: false
            }
        };
        var numberFormat = numberFormats[item['url']] ? numberFormats[item['url']] : false;
        var min_str = item['value']['min_str'] ? item['value']['min_str'] : '';
        var updateSum = function(left, right, isBubble){
            min.set('html', left==minValue&&min_str!='' ? min_str : (numberFormat ? left.format(numberFormat) : left));
            max.set('html', right==minValue&&min_str!='' ? min_str : (numberFormat ? right.format(numberFormat) : right));
            if(left==minValue&&right==maxValue)
                url = '';
            else
                url = (left>minValue ? left : '')+'-'+(right<maxValue ? right : '');
            if(!isBubble)
                SU.set(item['url'], url);
            c.activeUrl = url;
            c.fireEvent('mouseleave');
        };
        var dbsl = new InlineSlider(slider, {
            'range': [minValue, maxValue],
            'round': numberFormat ? numberFormat['precision'] : 0,
            'knobs': [min, max],
            'decor': decor,
            'onChange': function(k){
                updateSum(k.left, k.right, true);
            },
            'onComplete': function(k){
                updateSum(k.left, k.right);
            }
        });
        updateSum(minValue, maxValue, true);
        SU.addEvent(item['url']+':changed', function(url){
            var val = url.split('-');
            var min = val[0]=='' ? minValue : val[0].toFloat();
            var max = val[1]=='' ? maxValue : val[1].toFloat();
            dbsl.setPosition([min, max]);
            updateSum(min, max, true);
        });
        SU.addEvent(item['url']+':removed', function(){
            dbsl.setPosition([minValue, maxValue]);
            updateSum(minValue, maxValue, true);
        });
        this.activateList(c);
        return slider;
    },
    chooser: function(c, item, SU){
        var allElements = [];
        var url = '';
        var checkStatus = function(){
            var allChecked = true;
            var tmpUrl = [];
            allElements.each(function(el){
                allChecked = allChecked&&el['input'].get('checked') ? allChecked : false;
                if(el['input'].get('checked'))
                    tmpUrl.include(el)
            });
            if(allChecked){
                allElements.each(function(el){
                    el['input'].set('checked', '');
                });
                tmpUrl = [];
            } else {
                tmpUrl = tmpUrl.map(function(el){
                   return el['li'];
                });
            }
            url = tmpUrl.length>0 ? tmpUrl.join(';') : '';
            c.activeUrl = url;
            c.fireEvent('mouseleave');
            SU.set(item['url'], url);
        };
        var disableAll = function(){
            allElements.each(function(el){
                   el['input'].set('checked', '');
            });
        };
        var list = new Element('ul', {'class': 'chooser'}).inject(c);
        item['value'].each(function(v){
            var el = new Element('li').inject(list);
            var input = new Element('input', {
                'type': 'checkbox',
                'events': { 'click': checkStatus }
            }).inject(el);
            new Element('span', {'html':v}).inject(el);
            allElements.include({'input': input, 'li': v});
        });
        SU.addEvent(item['url']+':changed', function(url){
            disableAll();
            url.split(';').each(function(txt){
                allElements.each(function(el){
                    if(el['li']==txt){
                       el['input'].set('checked', 'checked');
                    }
                });
            });
            c.activeUrl = url;
            c.fireEvent('mouseleave');
        });
        SU.addEvent(item['url']+':removed', function(){
            disableAll();
            c.activeUrl = '';
            c.fireEvent('mouseleave');
        });
        this.activateList(c);
        return list;
    }
});
var CarList = new Class({
    Implements: [Options, Events, Mooml.Templates],
    options: {
        el: null,
        'params': [
            {'name': 'Year', 'value': 'year'},
            {'name': 'Price', 'value': 'price'},
            {'name': 'Place', 'value': 'place'},
            {'name': 'Tehpassport', 'value': 'tehpassport'},
        ],
        'lang': {
            'next': 'nav',
            'none': 'nav',
            'months': 'mēneši',
            'month': 'mēnesis',
            'one month': 'mazāk par mēnesi'
        }
    },
//    <li>
//        <h2>
//            <a href="{{ auto.url }}">{{ auto.mark }} {{ auto.model }}</a>
//            <span class="added">{{ auto.added }}</span>
//        </h2>
//        {% if auto.image %}
//             <div class="images">
//                {% for i in auto.image %}
//                    <img src="{{ i.src }}" alt="{{ auto.mark }} {{ auto.model }}" />
//                {% endfor %}
//             </div>
//       {% endif %}
//       <ul class="params">
//           <li>
//               <strong class="type">{{ _('Year') }}</strong>
//               <span class="value">{{ auto.year }}</span>
//           </li>
//           <li>
//               <strong class="type">{{ _('Price') }}</strong>
//               <span class="value">{{ auto.price }} {{ auto.currency }}</span>
//           </li>
//           <li>
//               <strong class="type">{{ _('Place') }}</strong>
//               <span class="value">{{ auto.place }}</span>
//           </li>
//           <li>
//               <strong class="type">{{ _('Tehpassport') }}</strong>
//               <span class="value">{{ auto.tehpassport }}</span>
//           </li>
//       </ul>
//       <ul class="additional">
//           <li><a href="">http://ss.lv/voata/...car/</a></li>
//           <li><a href="12341234">http://zip.lv/?s=1234123</a></li>
//       </ul>
//    </li>
    initialize: function(options) {
        this.setOptions(options);
        this.button = new Element('div', {
            'html': '',
            'class': 'button button-next',
            'events': {
                'click': function(){
                    this.fireEvent('next', this.last_id);
                }.bind(this)
            }
        }).inject(this.options.el);
        this.buttonTxt = new Element('span').inject(this.button);
        new Element('div', {'class': 'loader', 'styles': {
            'opacity': .9
        }}).inject(this.button);
        this.diactiveButton();
        this.params = this.options.params;
        this.rebild();
        //simple image template
        this.registerTemplate('image', function(data){
            img({'src': data['src'], 'alt': data['alt']})
        });
        //params temlapte
        this.registerTemplate('param', function(data){
            li({'class': data['class']},
                strong({'class': 'type'}, data['type']),
                span({'class': 'value'}, data['value'])
            );
        });
        //additional template
        this.registerTemplate('url', function(data){
            li(
                a({'href': data['href'], 'target': '_blank'}, data['source'])
            );
        });
        //main auto template
        this.registerTemplate('auto', function(auto) {
            li(
                h2(
                    a({ href: auto['url'], 'target': '_blank'},
                    auto['name'].length>20 ? auto['name'].substr(0, 20)+'...' : auto['name']),
                    span({ 'class': 'added'}, auto['added'])
                ),
                auto['image'] ? div({'class': 'images'},
                    auto['image']
                ) : false,
                ul({'class': 'params'}, auto['params']),
                ul({'class': 'additional'}, auto['urls'])
            );
        });
    },
    diactiveButton: function(){
        this.stopLoadingNext();
        this.button.setStyle('display', 'none');
    },
    activateNext: function(t){
        this.button.setStyle('display', 'block');
        this.buttonTxt.set('html', this.options.lang['next'].substitute({'total': t}));
    },
    loadingNext: function(){
        this.button.addClass('loading');
    },
    stopLoadingNext: function(){
        this.button.removeClass('loading');
    },
    rebild: function(){
        var ol = this.options.el.getElement('ol');
        if(ol)
            ol.destroy();
        this.ol = new Element('ol').inject(this.options.el, 'top');
        return this.ol;
    },
    loading: function(){
        this.options.el.addClass('car-list-loading');
    },
    stopLoading: function(){
        this.stopLoadingNext();
        this.options.el.removeClass('car-list-loading');
    },
    addObjects: function(data){
        this.render(data);
    },
    render: function(data) {
        data.each(function(auto){
            auto['name'] = auto['mark']+' '+auto['model'];
            auto['added'] = Date.parse(auto['added']).timeDiffInWords();
            auto['image'] = auto['image'] ? this.renderImages(auto) : false;
            auto['params'] = this.renderParams(auto);
            auto['url'] = auto['urls'][0];
            auto['urls'] = this.renderUrl(auto['urls']);
            this.last_id = auto['id'];
            this.renderTemplate('auto', auto).inject(this.ol);
        }.bind(this));
    },
    renderImages: function(data){
        var render_data = [];
        if(data['image'].length==0)
            return false;
//        patch for one image 
        data['image']=[data['image'][0]];
        data['image'].each(function(p){
            render_data.include({
               'src': p['src'],
               'url': p['url'],
               'alt': data['mark']+' '+data['model']
            });
        }.bind(this));
        return this.renderTemplate('image', render_data);
    },
    renderParams: function(data){
        var render_data = [];
        this.params.each(function(p){
            var res = this.prepareValue(p['value'], data);
            render_data.include({
               'type': p['name'],
               'value': res,
               'class': res==this.options.lang['no value'] ? 'empty-value': ''
            });
        }.bind(this));
        return this.renderTemplate('param', render_data);
    },
    renderUrl: function(data){
        var render_data = [];
        data.each(function(p){
            var u, end, compact;
            u = new URI(p);
            end = u.get('directory')+u.get('file')+u.get('query')+u.get('fragment');
            if(end.length>25){
                end = end.substr(1, 10)+'...'+end.substr(end.length-8);
            }
            render_data.include({
               'href': p,
               'source': u.get('host')+'/'+end
            });
        }.bind(this));
        return this.renderTemplate('url', render_data);
    },
    prepareValue: function(type, value){
        var check = function(type, value){
            if(value[type]&&value[type]!='None')
                return true;
            return false;
        };
        var formatter = {
            'year': function(type, value){
                if(check(type, value))
                    return value[type];
                return this.options.lang['no value'];
            }.bind(this),
            'engine': function(type, value){
                var format = {
                        'decimal': ".",
                        'decimals': 1
                    }
                if(check(type, value)&&value['engine_type'])
                    return value[type].format(format)+' '+value['engine_type'];
                if(check(type, value))
                    return value[type].format(format);
                if(value['engine_type'])
                    return value['engine_type'];
                return this.options.lang['no value'];
            }.bind(this),
            'gearbox': function(type, value){
                if(check(type, value)&&check('gear_type', value))
                    return value[type]+' '+value['gear_type'];
                if(check(type, value))
                    return value[type]+' '+this.options.lang['gears'];
                if(check('gear_type', value))
                    return value['gear_type'];
                return this.options.lang['no value'];
            }.bind(this),
            'mileage': function(type, value){
                if(check(type, value))
                    return value[type].format({
                        'group': ' ',
                        'suffix': ' km'
                    });
                return this.options.lang['no value'];
            }.bind(this),
            'tehpassport': function(type, value){
                if(value['tehpassport_is']===false)
                    return this.options.lang['none'];
                if(check(type, value)){
                    var m = Date.parse(value[type]).diff(new Date(), 'month');
                    if(m>=0)
                        return this.options.lang['one month'];
                    m = -1*m;
                    return m+' '+this.options.lang['months'.substr(0, m==1 ? 5 : 6)]
                }
                return this.options.lang['no value'];
            }.bind(this),
//            'car_type': function(type, value){
//
//            }.bind(this),
            'price': function(type, value){
                if(check(type, value))
                    return value[type].format({
                        'decimal': ".",
                        'group': ' ',
                        'decimals': 0
                    })+' '+value['currency'];
                return this.options.lang['no value'];
            }.bind(this)
        }
        if(formatter[type])
            return formatter[type](type, value);
        return check(type, value) ? value[type] : this.options.lang['no value'];
    }
});
var InlineSlider = new Class({

    Implements: [Events, Options],

    Binds: ['onDrag', 'onStart', 'onComplete'],

    options: {
        range: [0, 300],
        round: 0,
        knobs: false,
        decor: false
    },
    
    initialize: function(element, options)
    {
        this.setOptions(options);
        this.element = {
            'el': document.id(element),
            'width': document.id(element).getSize().x
        };
        ['left', 'right'].each(function(v, i){
            this[v] = {
                'el': this.options.knobs[i],
                'width': this.options.knobs[i].getSize().x
            }
        }.bind(this));
        if(this.options.decor)
            this.decor = {
                'el': document.id(this.options.decor)
            }
        this.range = this['element']['width']-this['left']['width']-this['right']['width'];
        this.proportion = this.range/(this.options.range[1]-this.options.range[0]);
        this.setPosition(this.options.range);
        this.drag();
    },
    setPosition: function(v){
        this['left']['el'].setStyle('left', (v[0]-this.options.range[0])*this.proportion)
        this['right']['el'].setStyle('left', (v[1]-this.options.range[0])*this.proportion+this['left']['width']);
        this.updatePosition();
    },
    updatePosition: function(){
        ['left', 'right'].each(function(v){
            this[v]['left'] = this[v]['el'].getStyle('left').toInt();
        }.bind(this));
        if(this.decor){
            this.decor['width'] = this['right']['left'] - this['left']['left'] - this['left']['width'];
            this.decor['el'].setStyles({
                'left': this['left']['left'] + this['left']['width'],
                'width': this.decor['width']
            });
        }
    },
    drag: function(){
        ['right', 'left'].each(function(p){
            this[p]['drag'] = new Drag(this[p]['el'], {
                'limit': this.getDragLimit(p),
                onStart: this.onStart,
                onDrag: function(){
                    this.onDrag(p)
                }.bind(this),
                onComplete: this.onComplete
            });
        }.bind(this));
//        if(this.decor)
//            this.decor['drag'] = new Drag(this.decor['el'], {
//                'limit': this.getDragLimitDecor()
//            });
    },
    onStart: function(el){
        el.addClass('dragging');
    },
    onDrag: function(p){
        this.updatePosition();
        this.fireEvent('change', this.getKnob());
        this[p]['drag'].limit = this.getDragLimit(p);
//        if(this.decor)
//            this.decor['drag'].limit = this.getDragLimitDecor();
    },
    onComplete: function(el){
        el.removeClass('dragging');
        this.fireEvent('complete', this.getKnob());
        ['right', 'left'].each(function(p){
            this[p]['drag'].options.limit = this.getDragLimit(p);
        }.bind(this));
    },
    getKnob: function(){
        return {
            'right': (this.options.range[0]+(this['right']['left'] - this['left']['width'])/this.proportion).round(this.options.round),
            'left': (this.options.range[0]+(this['left']['left'])/this.proportion).round(this.options.round)
        };
    },
    getDragLimit: function(p){
        return {
            'x':[
                (p=='right' ? this['left']['width']+this['left']['left'] : 0),
                (p=='left' ? this['right']['left']-this['left']['width'] : this['element']['width']-this['right']['width'])
            ],
            'y':[0, 0]
        };
    }
//    getDragLimitDecor: function(){
//        return {
//            'x':[this['left']['width'], this['element']['width']-this['right']['width']],
//            'y': [0, 0]
//        };
//    }
});var AdvancedList = new Class({

    Implements: [Events, Options],

//    Binds: ['clickedElement', 'draggedKnob', 'scrolledElement'],

    options: {
        onTick: function(position){
                if (this.options.snap) position = this.toPosition(this.step);
                this.knob.setStyle(this.property, position);
        },
        heads: 'h3',
        delimiters: [';', ','],
        url: '',
        classes: ['t-active'],
        lang: {
            'all': 'All'
        },
        menu: {}
    },

    initialize: function(element, options){
        this.setOptions(options);
        this.element = document.id(element);
        this.menu = this.options.menu;
//        console.info(this.menu);
        this.draw();
//        this.menu = this.parse(this.options.menu);
////        this.parse(this.element);
////        this.element.setStyle('display', 'none');
//        this.parseUrl(this.options.url);
//        this.draw();
//        this.mark();
    },
    draw: function(){
        this.content = new Element('div', {
            'class': 'filter',
            'id': 'mark-filter'
//            'styles': {
//                'top': pos.y,
//                'left': pos.x
//            }
        }).inject('cont');//.set('morph', {transition: Fx.Transitions.Back.easeOut});
        new Drag(this.content);
        var mark_intro = this.drawListIntro(this.content, this.content);
        this.mark_intro = mark_intro;
        mark_intro['all_input'].set('checked', 'checked').addEvent('click', function(){
            if(mark_intro['all_input'].get('checked')){
                this.disableMarks();
            } else {
                mark_intro['all_input'].set('checked', 'checked');
            }
            this.checkUrl();
        }.bind(this));
        this.menu.each(function(mark, i){
            var mark_content = this.drawListContent(mark_intro['ul'], mark['name']);
            this.menu[i]['content'] = mark_content;
            if(mark['models'].length>1){
                var model_intro = this.drawListIntro(mark_content['list']);
                this.menu[i]['intro'] = model_intro;
                new Drag(model_intro['ul'], {
                    stopPropagation: true
                });
                mark['models'].each(function(model, j){
                    var model_content = this.drawListContent(model_intro['ul'], model['name']);
                    this.menu[i]['models'][j]['content'] = model_content;
                    model_content['input'].addEvent('click', function(){
                        this.modelStatus(i, j, model_content['input'].get('checked'));
                        this.checkUrl();
                    }.bind(this));
                }.bind(this));
                mark_content['text'].addClass('fil-name-sub').addEvent('click', function(){
//                    model_intro['ul'].reveal();
                    model_intro['ul'].setStyle('display', 'block').morph({
                        'top': model_intro['ul'].startPosition
                    });
                }.bind(this));
                //pressed model all button
                model_intro['all_input'].addEvent('click', function(){
                    if(model_intro['all_input'].get('checked')){
                        this.disableModels(i);
                        this.markStatus(i, true);
                    } else {
                        this.markStatus(i, false);
                    }
                    this.checkUrl();
                }.bind(this));
            }
            mark_content['input'].addEvent('click', function(){
                this.markStatus(i, mark_content['input'].get('checked'));
                this.checkUrl();
            }.bind(this));
        }.bind(this));
    },
    drawListIntro: function(el, hide){
        var ul = new Element('ul').inject(el);
        ul.startPosition = el.getPosition('wrap').y+1000;
        var el = hide ? hide : ul;
        el.setStyles({
            'top': -1000,
            'left': el.getPosition('wrap').x
        });
        if(hide==undefined)
            el.setStyle('display', 'none');
        new Element('li', {'class': 'close', 'html': 'x'})
            .inject(ul)
            .addEvent('click', function(){
//                if(hide)
                    el.morph({
                        'top': -1000
                    }).get('morph').chain(function(){
                        el.setStyle('display', 'none');
                    });
//                else
//                    ul.dissolve();
            }.bind(this));
        var all_li = new Element('li', {
            'html': '<span class="fil-name">'+this.options.lang['all']+'</span>'
        }).inject(ul);
        var all_input = new Element('input', {'type': 'checkbox'}).inject(all_li, 'top');
        return {
            'ul': ul,
            'all_li': all_li,
            'all_input': all_input
        };
    },
    drawListContent: function(el, name){
        var list = new Element('li').inject(el);
        var text = new Element('span', {
           'class': 'fil-name',
           'html': name
        }).inject(list);
        var input = new Element('input', {'type': 'checkbox'}).inject(list, 'top');
        var adit = new Element('span', {'class': 'adit'}).inject(list);
        return {
            'list': list,
            'text': text,
            'input': input,
            'adit': adit
        };
    },


    markStatus: function(mark, active){
        var list = this.menu[mark]['content']['list'],
            input = this.menu[mark]['content']['input'];
        this.menu[mark]['active'] = active;
        this.updateActive(list, input, active);
        if(this.menu[mark]['intro']){
            var active_model = this.getActiveModel(mark);
            var active_all = active_model && active_model.length==this.menu[mark]['models'].length;
            if(active && !active_model){
                this.updateActive(this.menu[mark]['intro']['all_li'], this.menu[mark]['intro']['all_input'], true);
            }
            if(active && active_all){
                this.disableModels(mark);
                this.updateActive(this.menu[mark]['intro']['all_li'], this.menu[mark]['intro']['all_input'], true);
            }
            if(active && active_model && !active_all){
                this.updateActive(this.menu[mark]['intro']['all_li'], this.menu[mark]['intro']['all_input'], false);
            }
            active_model = this.getActiveModel(mark);
            if(active_model){
                var names = [];
                active_model.each(function(j){
                    names.include(this.menu[mark]['models'][j]['name']);
                }.bind(this));
                this.menu[mark]['content']['adit'].set('html', ' ('+names.join(', ')+')');
            } else {
                this.menu[mark]['content']['adit'].set('html', '');
            }
        }
        var active_mark = this.getActiveMark();
//        var active_mark_all = active_mark && active_mark.length==this.menu.length;
//        if(active_mark_all){
//            this.disableMarks();
//            this.updateActive(this.mark_intro['all_li'], this.mark_intro['all_input'], true);
//        } else
        if(!active_mark){
            this.updateActive(this.mark_intro['all_li'], this.mark_intro['all_input'], true);
        }  else {
            this.updateActive(this.mark_intro['all_li'], this.mark_intro['all_input'], false);
        }
    },

    modelStatus: function(mark, model, active){
        var list = this.menu[mark]['models'][model]['content']['list'],
            input = this.menu[mark]['models'][model]['content']['input'];
        this.menu[mark]['models'][model]['active'] = active;
        this.updateActive(list, input, active);
        this.markStatus(mark, this.getActiveModel(mark) ? true : false);
    },


    getActiveMark: function(){
        var ac = [];
        this.menu.each(function(m, i){
            if(m['active'])
                ac.include(i);
        }.bind(this));
        return ac.length>0 ? ac : false;
    },
    getActiveModel: function(mark){
        var ac = [];
        this.menu[mark]['models'].each(function(model, j){
            if(model['active'])
                ac.include(j);
        }.bind(this));
        return ac.length>0 ? ac : false;
    },
    
    updateActive: function(el, input, active){
        if(active){
            input.set('checked', 'checked');
            el.addClass(this.options.classes[0]);
        } else {
            input.set('checked', '');
            el.removeClass(this.options.classes[0]);
        }
    },
    //disablers
    disableMarks: function(){
        this.menu.each(function(m, i){
            if(this.menu[i]['active']){
                this.menu[i]['active'] = false;
                this.updateActive(m['content']['list'], m['content']['input'], false);
            }
        }.bind(this));
    },
    disableModels: function(mark){
        this.menu[mark]['models'].each(function(model, j){
            if(this.menu[mark]['models'][j]['active']){
                this.menu[mark]['models'][j]['active'] = false;
                this.updateActive(model['content']['list'], model['content']['input'], false);
            }
        }.bind(this));
    },

    disableModelAll: function(){
        this.menu.each(function(m, i){
            if(m['intro']){
                this.updateActive(m['intro']['all_li'], m['intro']['all_input'], false);
            }
        }.bind(this));
    },

    checkUrl: function(){
        var newUrl = this.getActiveText();
//        if(this.url==undefined){
//            this.url = newUrl;
//        } else
            if (this.url!=newUrl) {
            this.url = newUrl;
            this.fireEvent('change', newUrl);
            this.fireEvent('changeName', this.getActiveText(true));
        }
    },
    getActiveText: function(human){
        human = human==undefined ? '' : human;
        var active = [];
        this.menu.each(function(mark){
            if(mark['active']){
                var subActive = [];
                if(mark['models'].length>1)
                    mark['models'].each(function(model){
                        if(model['active'])
                            subActive.include(model['name']);
                    }.bind(this));
                active.include(mark['name']+(subActive.length>0 ? (human ? ' ' : '')+'('+subActive.join(this.options.delimiters[1]+(human ? ' ' : ''))+')' : ''));
            }
        }.bind(this));
        return active.length>0 ? active.join(this.options.delimiters[0]+(human ? ' ' : '')) : (human ? this.options.lang['all'] : '');
    },
    setActiveUrl:function(url){
        this.url = url;
        this.disableMarks();
        this.menu.each(function(mark, i){
            if(mark['models'].length>1)
                this.disableModels(i);
        }.bind(this));
        this.disableModelAll();
        if(url==''){
            this.updateActive(this.mark_intro['all_li'], this.mark_intro['all_input'], false);
        } else {
            this.parseUrl(url);
        }
        this.fireEvent('changeName', this.getActiveText(true));
    },
    parseUrl: function(url){
        var cars = url.split(this.options.delimiters[0]);
        var marks = [];
        cars.each(function(str){
            if(str=='')
                return;
            var mark = str;
            var models = [];
            var regex = /^([^(]+)\((.*?)\)$/.exec(str);
            if(regex){
                mark = regex[1];
                regex[2].split(this.options.delimiters[1]).each(function(model){
                    models.include(model);
                }.bind(this));
            }
            marks.include({
                'name': mark,
                'models': models
            });
            //
        }.bind(this));
        marks.each(function(mark){
            this.menu.each(function(mark2, i){
                if(mark['name']==mark2['name']){
                    this.menu[i]['active'] = true;
                    if(mark['models'].length>0 && mark2['models'].length>1){
                        mark['models'].each(function(model){
                            mark2['models'].each(function(model2, j){
                                if(model2['name']==model){
                                    this.menu[i]['models'][j]['active'] = true;
                                    this.modelStatus(i, j, true);
                                }
                            }.bind(this));
                        }.bind(this));
                    } else {
                        this.markStatus(i, true);
                    }
                }
            }.bind(this));
        }.bind(this));
    }













//
//    //marks function list
//    //fires then all mark change
//    allMarkChange: function(pressed){
//        var list = this.mark_intro['all_li'],
//            input = this.mark_intro['all_input'];
//        var active = input.get('checked');
//        var active_marks = this.getActiveMarks();
//        if(active_marks && pressed && active)
//            this.disableMarks();
//        this.updateActive(list, input, pressed || !active_marks);
//    },
//    //fires then mark checked
//    markChange: function(mark, pressed){
//        var list = this.menu[mark]['content']['list'],
//            input = this.menu[mark]['content']['input'];
//        this.menu[mark]['active'] = pressed ? input.get('checked') : this.menu[mark]['active'];
//        this.updateActive(list, input, this.menu[mark]['active']);
//        //update all button
//        this.allMarkChange();
//        if(this.menu[mark]['intro'])
//             this.updateActive(this.menu[mark]['intro']['all_li'], this.menu[mark]['intro']['all_input'], true);
//    },
////    //return all active marks
//    getActiveMarks: function(){
//        var ac = [];
//        this.menu.each(function(m, i){
//            if(m['active'])
//                ac.include(i);
//        }.bind(this));
//        return ac.length>0 ? ac : false;
//    },
//    disableMarks: function(){
//        this.menu.each(function(m, i){
//            if(this.menu[i]['active'])
//                this.menu[i]['active'] = false;
//                this.updateActive(m['content']['list'], m['content']['input'], false);
//        }.bind(this));
//    },
//
//
//    //model function list
////    //fires then all button pressed
//    allModelChange: function(mark, pressed){
//        var list = this.menu[mark]['intro']['all_li'],
//            input = this.menu[mark]['intro']['all_input'];
//        var active = input.get('checked');
//        if(active && this.getActiveModel(mark) && pressed)
//            this.disableMarkModel(mark);
//        this.menu[mark]['active'] = active;
//        this.markChange(mark);
//        this.updateActive(list, input, active);
//    },
//    //fires then model button pressed
//    modelChange: function(mark, model){
//        var list = this.menu[mark]['models'][model]['content']['list'],
//            input = this.menu[mark]['models'][model]['content']['input'];
//        var active = input.get('checked');
//        this.menu[mark]['models'][model]['active'] = active;
//        var model_active = this.getActiveModel(mark);
//        if(model_active && model_active.length==this.menu[mark]['models'].length){
//            this.disableMarkModel(mark);
//            this.updateActive(this.menu[mark]['intro']['all_li'], this.menu[mark]['intro']['all_input'], true);
//            this.allModelChange(mark);
//            return;
//        }
//        this.updateActive(this.menu[mark]['intro']['all_li'], this.menu[mark]['intro']['all_input'], false);
//        //any value active
//        this.menu[mark]['active'] = model_active.length>0;
//        this.updateActive(list, input, active);
//        this.markChange(mark);
//    },
//    getActiveModel: function(mark){
//        var ac = [];
//        this.menu[mark]['models'].each(function(model, j){
//            if(model['active'])
//                ac.include(j);
//        }.bind(this));
//        return ac.length>0 ? ac : false;
//    },
//    //disable all mark modlels
//    disableMarkModel: function(mark){
//        this.menu[mark]['models'].each(function(model, j){
//            if(this.menu[mark]['models'][j]['active'])
//                this.menu[mark]['models'][j]['active'] = false;
//                this.updateActive(model['content']['list'], model['content']['input'], false);
//        }.bind(this));
//    },
//
//    //update classes and input status
//    updateActive: function(el, input, active){
//        if(active){
//            input.set('checked', 'checked');
//            el.addClass(this.options.classes[0]);
//        } else {
//            input.set('checked', '');
//            el.removeClass(this.options.classes[0]);
//        }
//    },







//    draw: function(){
//        this.filter = {};
////        var pos = this.element.getPosition();
//        this.filter['cont'] = new Element('div', {
//            'class': 'filter',
//            'id': 'mark-filter'
////            'styles': {
////                'top': pos.y,
////                'left': pos.x
////            }
//        }).inject('cont');
//
//        new Drag(this.filter['cont']);
//        this.filter['list'] = {};
//        this.filter['all'] = {};
//        this.filter['input'] = {};
//        this.filter['adit'] = {};
//        this.drawList('', this.filter['cont']);
//    },
//    drawList: function(id, cont){
//        this.filter['list'][id] = new Element('ul').inject(cont);
//        this.filter['list'][id].setStyle('top', this.filter['list'][id].getPosition('wrap').y);
//        new Drag(this.filter['list'][id], {
//            stopPropagation: true
//        });
//        new Element('li', {'class': 'close', 'html': 'x'})
//            .inject(this.filter['list'][id])
//            .addEvent('click', function(){
//                if(id=='')
//                    this.filter['cont'].dissolve();
//                else
//                    this.filter['list'][id].toggle()
//            }.bind(this));
//        this.filter['all'][id] = new Element('li', {
//            'html': '<span class="fil-name">'+this.options.lang['all']+'</span>'
//        }).inject(this.filter['list'][id]);
//        this.filter['input'][id] = new Element('input', {
//            'type': 'checkbox',
//            'events': {
//                'change': function(){
////                    document.id(e.target).getParent('li').toggleClass(this.options.classes[0]);
//                    this.activate(id, true, true);
//                }.bind(this)
//            }
//        }).inject(this.filter['all'][id], 'top');
//        Object.each(this.menu[id], function(mark){
//            var sub = this.menu[mark.id];
//            this.menu[id][mark.id]['element'] = new Element('li').inject(this.filter['list'][id]);
//            new Element('span', {
//               'class': 'fil-name'+(this.menu[mark.id] ? ' fil-name-sub' : ''),
//               'html': mark['name']
//            }).inject(this.menu[id][mark.id]['element']).addEvent('click', function(e){
//                if(sub)
//                    this.toggleSub(mark.id);
//            }.bind(this));
//            this.menu[id][mark.id]['input'] = new Element('input', {
//                'type': 'checkbox',
//                'events': {
//                    'change': function(e){
////                        document.id(e.target).getParent('li').toggleClass(this.options.classes[0]);
//                        this.activate(mark.id, true);
//                    }.bind(this)
//                }
//            }).inject(this.menu[id][mark.id]['element'], 'top');
//            if(sub){
//                this.filter['adit'][mark.id] = new Element('span', {
//                    'class': 'adit'
//                }).inject(this.menu[id][mark.id]['element']);
//                this.drawList(mark.id, this.menu[id][mark.id]['element']);
//            }
//        }.bind(this));
//    },
//    toggleSub: function(id){
//        if(!this.filter['list'][id])
//            return;
//        this.filter['list'][id].toggle();
//    },
//    activate: function(id, auto, all){
//        auto = auto==undefined ? false : auto;
//        all = all==undefined ? false : all;
//        var ids = id.split('/');
//        //model choose
//        if(ids.length>1){
//            this.menu[ids[0]][id].active = !this.menu[ids[0]][id].active;
//            if(this.filter['input'][ids[0]].get('checked'))
//                this.toogleCheck(ids[0], false);
//            this.activate(ids[0]);
//            return;
//        }
//        //mark choose
//        if(id!=''){
//            var isActive = false;
//            var isAllActive = true;
//            Object.each(this.menu[id], function(item){
//                if(isAllActive&&!this.menu[id][item.id].active)
//                    isAllActive = false;
//                if(!isActive&&this.menu[id][item.id].active)
//                    isActive = true;
//            }.bind(this));
//            //if all cheked, check only one main
//            if(isAllActive){
//                this.toogleCheck(id, true);
//                all = true;
//            }
//            //if checked all
//            if(all){
//                Object.each(this.menu[id], function(item){
//                    this.menu[id][item.id].active = false;
//                }.bind(this));
//            //checked on mark
//            } else if(auto){
//                this.toogleCheck('', false);
//                if(!isActive&&!this.menu[''][id].active)
//                    this.toogleCheck(id, true);
//                else if(this.menu[''][id].active && this.filter['input'][id].get('checked'))
//                    this.toogleCheck(id, false);
//                isActive = !this.menu[''][id].active;
//            }
//            this.menu[''][id].active = isActive || this.filter['input'][id].get('checked');
//        } else {
//            Object.each(this.menu[''], function(item){
//                this.menu[''][item.id].active = false;
//            }.bind(this));
//            this.toogleCheck('', true);
//        }
//        this.mark();
//    },
//    mark: function(){
//        var anyActive = false;
//        Object.each(this.menu, function(item, id){
//            var active = false;
//            var names = [];
//            Object.each(item, function(el){
//                if(el.active){
//                    el.input.set('checked', 'checked');
//                    el.element.addClass(this.options.classes);
//                    names.include(el.name);
//                    if(!active)
//                        active = true;
//                } else {
//                    el.input.set('checked', '');
//                    el.element.removeClass(this.options.classes)
//                }
//            }.bind(this));
//            if(!anyActive&&active&&id=='')
//                anyActive = true;
//            if(id!=''&&!active&&this.menu[''][id].active){
//                this.toogleCheck(id, true);
//            }
//            if(id!='')
//                this.filter['adit'][id].set('html', (names.length>0 ? ' ('+names.join(', ')+')' : ''));
//        }.bind(this));
//        if(!anyActive)
//            this.toogleCheck('', true);
//        else
//            this.toogleCheck('', false);
//        this.checkUrl();
//    },
//    toogleCheck: function(id, check){
//        if(check){
//            this.filter['all'][id].addClass(this.options.classes);
//            this.filter['input'][id].set('checked', 'checked');
//        } else {
//            this.filter['all'][id].removeClass(this.options.classes);
//            this.filter['input'][id].set('checked', '');
//        }
//    },
//    checkUrl: function(){
//        var newUrl = this.getActiveUrl();
//        if(this.url==undefined){
//            this.url = newUrl;
//        } else if (this.url!=newUrl) {
//            this.url = newUrl;
//            this.fireEvent('change', newUrl);
//            this.fireEvent('changeName', this.getActiveText());
//        }
//    },
//    getActiveText: function(){
//        var active = [];
//        Object.each(this.menu[''], function(item){
//            if(item.active){
//                var subActive = [];
//                Object.each(this.menu[item.id], function(item2){
//                    if(item2.active)
//                        subActive.include(item2.name.trim());
//                }.bind(this));
//                active.include(item.name.trim()+(subActive.length>0 ? ' ('+subActive.join(this.options.delimiters[1]+' ')+')' : ''))
//            }
//        }.bind(this));
//        return active.length>0 ? active.join(this.options.delimiters[0]+' ') : this.options.lang['all'];
//    },
//    getActiveUrl: function(){
//        var active = [];
//        Object.each(this.menu[''], function(item){
//            if(item.active){
//                var subActive = [];
//                Object.each(this.menu[item.id], function(item2){
//                    if(item2.active)
//                        subActive.include(item2.name.trim());
//                }.bind(this));
//                active.include(item.name.trim()+(subActive.length>0 ? '('+subActive.join(this.options.delimiters[1])+')' : ''))
//            }
//        }.bind(this));
//        return active.length>0 ? active.join(this.options.delimiters[0]) : '';
//    },
//    setActiveUrl:function(url){
//        this.url = url;
//        Object.each(this.menu, function(item){
//            Object.each(item, function(item2){
//                item2.active = false;
//            }.bind(this));
//        }.bind(this));
//        this.parseUrl(url);
//        this.mark();
//        this.fireEvent('changeName', this.getActiveText());
//    },
//    parseUrl: function(url){
//        var cars = url.split(this.options.delimiters[0])
//        cars.each(function(str){
//            if(str=='')
//                return;
//            var parent = str;
//            var regex = /(.*)\((.*)\)/.exec(str);
//            if(regex){
//                parent = regex[1];
//                this.menu[''][parent].active=true;
//                regex[2].split(this.options.delimiters[1]).each(function(mo){
//                    this.menu[parent][parent+'/'+mo].active = true;
//                }.bind(this));
//            } else {
//                this.menu[''][parent].active = true;
//            }
//        }.bind(this));
//    },
//    parse: function(menu){
//        var m = {'':{}};
//        menu.each(function(mark){
//            m[''][mark['name']] = {
//                'id':mark['name'],
//                'parent':'',
//                'name':mark['name'],
//                'active':false
//            };
//            mark['models'].each(function(model){
//                var id = mark['name']+'/'+model['name'];
//                if(!m[mark['name']])
//                    m[mark['name']] = {};
//                m[mark['name']][id] = {
//                    'id':id,
//                    'parent':mark['name'],
//                    'name':model['name'],
//                    'active':false
//                };
//            });
//        });
//        return m;
//    }
////    parse: function(parent, id, unique){
////        id = id==undefined ? '' : id;
////        unique = unique==undefined ? '' : unique;
////        if(!this.menu[id])
////            this.menu[id] = {};
////        parent.getChildren('li').each(function(el){
////            var link = (el.getElement(this.options.heads) ? el.getElement(this.options.heads) : el).getElement('a');
////            var name = link.get('text').trim();
////            this.menu[id][unique+name] = {
////                'id': unique+name,
////                'parent': id,
////                'name': name,
////                'active': false
////            }
////            if(el.getElement('ul'))
////                this.parse(el.getElement('ul'), unique+name, unique+name+'/')
////        }.bind(this));
////    }

});/*
---
description: A Class that provides a cross-browser history-management functionaility, using the browser hash to store the application's state

license: MIT-style

authors:
- Arieh Glazer
- Dave De Vos
- Digitarald

requires:
- core/1.3: [Object,Class,Class.Extras,Element,Element.Event,Element.Style]

provides: [HashListener]

...
*/
(function($){

Element.NativeEvents['hashchange'] =  2;

HashListener = new Class({
	Implements : [Options,Events],
	options : {
		blank_page : 'blank.html',
		start : false
	},
	iframe : null,
	currentHash : '',
	firstLoad : true,
	handle : false,
	useIframe : (Browser.ie && (typeof(document.documentMode)=='undefined' || document.documentMode < 8)),
	ignoreLocationChange : false,
	initialize : function(options){
		var $this=this;
			
		this.setOptions(options);
		
		// Disable Opera's fast back/forward navigation mode
		if (Browser.opera && window.history.navigationMode) {
			window.history.navigationMode = 'compatible';
		}

		
		 // IE8 in IE7 mode defines window.onhashchange, but never fires it...
        if (
			('onhashchange' in window) &&
            (typeof(document.documentMode) == 'undefined' || document.documentMode > 7)
		   ){
				
                // The HTML5 way of handling DHTML history...
				window.addEvent('hashchange' , function () {
					var hash = $this.getHash();
//					if (hash == $this.currentHash) {
//						return;
//					}
					$this.fireEvent('hashChanged',hash);
					$this.fireEvent('hash-changed',hash);
				});;
        } else  {
			if (this.useIframe){
				this.initializeHistoryIframe();
			} 
        } 
		
		window.addEvent('unload', function(event) {
			$this.firstLoad = null;
		});
		
		if (this.options.start) this.start();
	},
	initializeHistoryIframe : function(){
		var hash = this.getHash(), doc;
		this.iframe = new IFrame({
			src		: this.options.blank_page,
			styles	: { 
				'position'	: 'absolute',
				'top'		: 0,
				'left'		: 0,
				'width'		: '1px', 
				'height'	: '1px',
				'visibility': 'hidden'
			}
		}).inject(document.body);

		doc	= (this.iframe.contentDocument) ? this.iframe.contentDocument  : this.iframe.contentWindow.document;
		doc.open();
		doc.write('<html><body id="state">' + hash + '</body></html>');
		doc.close();
		return;
	},
	checkHash : function(){
		var hash = this.getHash(), ie_state, doc;
		if (this.ignoreLocationChange) {
			this.ignoreLocationChange = false;
			return;
		}

		if (this.useIframe){
			doc	= (this.iframe.contentDocument) ? this.iframe.contentDocumnet  : this.iframe.contentWindow.document;
			ie_state = doc.body.innerHTML;
			
			if (ie_state!=hash){                
                this.setHash(ie_state);				
                hash = ie_state;                
			} 
		}		
		
		if (this.currentLocation == hash) {
			return;
		}
		
		this.currentLocation = hash;
		
		this.fireEvent('hashChanged',hash);
		this.fireEvent('hash-changed',hash);
	},
	setHash : function(newHash){
		window.location.hash = this.currentLocation = newHash;
		
		if (
			('onhashchange' in window) &&
            (typeof(document.documentMode) == 'undefined' || document.documentMode > 7)
		   ) return;
		
		this.fireEvent('hashChanged',newHash);
		this.fireEvent('hash-changed',newHash);
	},
	getHash : function(){
		var m;
		if (Browser.firefox){
			m = /#(.*)$/.exec(window.location.href);
			return m && m[1] ? m[1] : '';
		}else if (Browser.safari || Browser.chrome){
			return decodeURI(window.location.hash.substr(1));
		}else{
			return window.location.hash.substr(1);
		}
	},
	setIframeHash: function(newHash) {
		var doc	= (this.iframe.contentDocument) ? this.iframe.contentDocumnet  : this.iframe.contentWindow.document;
		doc.open();
		doc.write('<html><body id="state">' + newHash + '</body></html>');
		doc.close();
		
	},
	updateHash : function (newHash){
		if (document.id(newHash)) {
			this.debug_msg(
				"Exception: History locations can not have the same value as _any_ IDs that might be in the document,"
				+ " due to a bug in IE; please ask the developer to choose a history location that does not match any HTML"
				+ " IDs in this document. The following ID is already taken and cannot be a location: "
				+ newHash
			);
		}
		
		this.ignoreLocationChange = true;
		
		if (this.useIframe) this.setIframeHash(newHash);
		else this.setHash(newHash);
	},
	start : function(){
		this.handle = this.checkHash.periodical(100, this);
	},
	stop : function(){
		clearInterval(this.handle);
	}
});

})(document.id);/*
---
description: A Class that provides a cross-browser history-management functionaility, using the browser hash to store the application's state

license: MIT-style

authors:
- Arieh Glazer

requires:
- Core/1.3 : JSON
- HistoryManager/1.2: HashListener

provides: [HistoryManager]

...
*/

(function($,undef){

HistoryManager = new Class({
	
	Extends : HashListener,
	
	options : {
		delimiter : '',
		serializeHash: null,
		deserializeHash: null,
        compat : false
	}, 
	
	state : {},
	stateCache : {},
	
	initialize : function(options){
		this.parent(options);

		this.serializeHash = this.options.serializeHash || this.serializeHash;
		this.deserializeHash = this.options.deserializeHash || this.deserializeHash;
		
		this.addEvent('hashChanged',this.updateState.bind(this));
	},

	serializeHash : function (d) {
		return JSON.encode(d);
	},

	deserializeHash : function (d) {
		return JSON.decode(decodeURIComponent(d));
	},
	
	updateState : function (hash){
		var $this = this;
		
		if (this.options.delimiter) hash = hash.substr(this.options.delimiter.length);

		hash = this.deserializeHash(hash);
        
        Object.each(this.state,function(value,key){
			var nvalue, comperable, h_type;

			if (!hash || hash[key]===undef){
				nvalue = $this.state[key];
				
                if ($this.options.compat){
                    $this.fireEvent(key+'-removed',[nvalue]);
                }
                
                $this.fireEvent(key+':removed',[nvalue]);
                $this.fireEvent(key,[nvalue]);
				delete $this.state[key];
				delete $this.stateCache[key];
				if (hash && hash[key]) delete hash[key];
				return;
			}
			
			h_type = typeOf(hash[key]);
			
			comperable = (h_type=='string' || h_type=='number' || h_type =='boolean') ? hash[key] : JSON.encode(hash[key]);
			
			if (comperable != $this.stateCache[key]){
                nvalue = hash[key];
				$this.state[key] = nvalue;
				$this.stateCache[key] =comperable;
				
                if ($this.options.compat){
                    $this.fireEvent(key+'-updated',[nvalue]);
                    $this.fireEvent(key+'-changed',[nvalue]);
                }
                
				$this.fireEvent(key+':updated',[nvalue]);
				$this.fireEvent(key+':changed',[nvalue]);	
                $this.fireEvent(key,[nvalue]);
			}
			
			delete hash[key];
		});
		
		Object.each(hash,function(value,key){
			$this.state[key]=value;
        
			v_type = typeOf(hash[key]);
			$this.stateCache[key] = (v_type=='string' || v_type=='number' || v_type =='boolean') ? value : JSON.encode(value);
				
                if ($this.options.compat){
                    $this.fireEvent(key+'-added',[value]);			
                    $this.fireEvent(key+'-changed',[value]);	
                }
                
			$this.fireEvent(key+':added',[value]);			
			$this.fireEvent(key+':changed',[value]);	
            $this.fireEvent(key,[value]);
		});
	},
	
	set : function(key,value){
		var newState = Object.clone(this.state);
		
		newState[key] = value;
		
		this.updateHash(this.options.delimiter + this.serializeHash(newState));
		
		return this;
	},
	
	remove : function(key){
		var newState = Object.clone(this.state);
		
		delete newState[key];
		
		this.updateHash(this.options.delimiter + this.serializeHash(newState));
		
		return this;
	}
});

})(document.id);var UrlManager = new Class({

    Extends : HistoryManager,

    Binds: ['updateParams', 'set', 'addEvent'],

    options: {
        'variables': ['a', 'b', 'c'],
        'prefix': 's/'
    },
    lastUrl: undefined,
    same: false,
    newValues: {},
    initialize: function(options){
        this.parent(options);
    },
    serializeHash: function(d){
        if(!d||d=='')
            return '';
        var url = [];
        this.options.variables.each(function(v){
            if(d[v])
                url.include(v+'-'+encodeURIComponent(d[v]));
        });
        return url.length>0 ? this.options.prefix+url.join('/') : '';
    },
    deserializeHash: function(d){
        var obj = {};
        if(!d||d=='')
            return obj;
        d = d.substr(this.options.prefix.length);
        d.split('/').each(function(url){
            var v = url.split('-', 2);
            if(v.length>1)
                obj[v[0]] = decodeURIComponent(url.substr(v[0].length+1));
            else
                obj[url] = '';
        });
        return obj;
    },
    updateParams: function(get){
        var newState = Object.clone(this.state);
        Object.each(this.newValues, function(value, key){
            newState[key] = value;
        }.bind(this));
        var hash = this.options.delimiter + this.serializeHash(newState);
        if(get==undefined || !get)
            this.updateHash(hash);
        return hash;
    },
    set: function(key, value){
        this.newValues[key] = value;
        var hash = this.updateParams(true);
        this.fireEvent('newHash', hash);
        if(hash==this.lastUrl)
            this.same = true;
        else
            this.same = false;
    },
    updateState : function (hash){
        this.parent(hash);
        if(this.lastUrl!=hash){
            this.lastUrl = hash;
            this.fireEvent('change', hash);
        }
    }
});
window.addEvent('domready', function(){
    Locale.use('lv-LV');
    var window_scroll = new Fx.Scroll(window);
    var popup = new Popup({
//        'onFeedback': function(form){
//            console.info(form);
//            req.send('feedback', {
//                'url': form.get('action'),
////                'data': {
////                    'name': form.getElement('input').get('value'),
////                    'text': form.getElement('textarea').get('value')
////                }
//            });
//        }
    });
    $$('a').each(function(a){
        if(a.get('href')=='#wrap')
            a.addEvent('click', function(){
                window_scroll.toTop();
                return false;
            });
    });
    var showError = function(xhr){
        popup.showText(Locale.get('Error.Error'), Locale.get('Error.Error simple text').substitute({'status': xhr.status}));
    }
//    popup.showText('Kļūda', 'Notikusi nenovēršama kļūda, mēs atvainojamies par neērtībām - atjaunojiet lūdzu mājaslapu');
    
//    (function(){
//        $$('a.json').each(function(el){
//            var href = el.get('href');
//            el.addEvent('click', function(e){
////                e.stop();
//                popup.showFeedback('Pievieno savu atsauksmi!',
//                'Ja tev ir idejas, ieteikumi tad raksti mums',
//                href+'.json');
////                req.send('content', {'url': href+'.json'});
//                return false;
//            });
//        });
//    })();
//    return;
    var car_list = new CarList({
        'el': document.id('objects'),
        'params': [
            {'name': Locale.get('Object.'+'Year'), 'value': 'year'},
            {'name': Locale.get('Object.'+'Engine'), 'value': 'engine'},
            {'name': Locale.get('Object.'+'Gearbox'), 'value': 'gearbox'},
            {'name': Locale.get('Object.'+'Mileage'), 'value': 'mileage'},
//            {'name': Locale.get('Object.'+'Drive type'), 'value': 'drive_type'},
            {'name': Locale.get('Object.'+'Tehpassport'), 'value': 'tehpassport'},
            {'name': Locale.get('Object.'+'Car type'), 'value': 'car_type'},
            {'name': Locale.get('Object.'+'Place'), 'value': 'place'},
//            {'name': Locale.get('Object.'+'Color'), 'value': 'color'},
            {'name': Locale.get('Object.'+'Price'), 'value': 'price'}
        ],
        'lang': {
            'no value': '-',
            'next': Locale.get('Object.Next'),
            'none': Locale.get('Object.None'),
            'months': Locale.get('Object.Months'),
            'month': Locale.get('Object.Month'),
            'one month': Locale.get('Object.Less the month'),
            'gears': Locale.get('Object.gears')
        },
        onNext: function(n){
            car_list.loadingNext();
            req.send('objects', {'url': '/next/'+n+(SU.lastUrl=='' ? '/s' : SU.lastUrl)+'.json'});
        }
    });
//    //url manager
    var req_delay = {
        'objects_count': 0
    };
    var SU = new UrlManager({
        'blank_page': '/design/html/blank.html',
//        'currentHash': new URI(window.location).get('fragment'),
        'variables': ['m', 'y', 'c', 'f', 'g', 'k', 't', 'o', 'l', 'p'],
        'prefix': '/s/',
        onChange: function(d){
            //lets leave this two line for lazy loading
            window.clearTimeout(req_delay['objects_count']);
            req.cancel('objects_count');
            
            filter.deactiveCount();
            car_list.rebild();
            car_list.diactiveButton();
            car_list.loading();
            window_scroll.toTop();
            req.send('objects', {'url': ''+(d=='' ? '/s' : d)+'.json'});
        },
        onNewHash: function(d){
            window.clearTimeout(req_delay['objects_count']);
            req.cancel('objects_count');
            filter.loading();
            req_delay['objects_count'] = function(){
                req.send('objects_count', {'url': '/c'+(d=='' ? '/s' : d)+'.json'});
            }.delay(1000);
        }
    });
    var filter = new Filter({
        'SU': SU,
        'button': Locale.get('Filter.Submit button'),
        'button_loading': Locale.get('Filter.Submit loading'),
        'onFilter': function(){
            SU.updateParams();
        }.bind(this)
    });

    var req = new Request.Queue({
        requests: {
            filter: new Request.JSON({
                url: '/search/params.json',
                method: 'get',
                noCache: true,
                link: 'cancel',
                onFailure: showError,
                onSuccess: function(f){
                    filter.draw({
                        'mark': {
                            'name': Locale.get('Filter.Models'),
                            'lang': {
                                'All': Locale.get('Filter.All')
                            },
                            'value': f['mark']['value'],
                            'type': f['mark']['type'],
                            'url': f['mark']['url']
                        },
                        'year': {
                            'name': Locale.get('Filter.Year'),
                            'value': f['year']['value'],
                            'type': f['year']['type'],
                            'url': f['year']['url']
                        },
                        'engine': {
                            'name': Locale.get('Filter.Engine'),
                            'value': f['engine']['value'],
                            'type': f['engine']['type'],
                            'url': f['engine']['url']
                        },
                        'engine_type': {
                            'name': Locale.get('Filter.Engine type'),
                            'value': f['engine_type']['value'],
                            'type': f['engine_type']['type'],
                            'url': f['engine_type']['url']
                        },
                        'gear_type': {
                            'name': Locale.get('Filter.Gear type'),
                            'value': f['gear_type']['value'],
                            'type': f['gear_type']['type'],
                            'url': f['gear_type']['url']
                        },
                        'mileage': {
                            'name': Locale.get('Filter.Mileage'),
                            'value': f['mileage']['value'],
                            'type': f['mileage']['type'],
                            'url': f['mileage']['url']
                        },
                        'tehpassport': {
                            'name': Locale.get('Filter.Tehpassport'),
                            'value': f['tehpassport']['value'],
                            'type': f['tehpassport']['type'],
                            'url': f['tehpassport']['url']
                        },
                        'car_type': {
                            'name': Locale.get('Filter.Car type'),
                            'value': f['car_type']['value'],
                            'type': f['car_type']['type'],
                            'url': f['car_type']['url']
                        },
                        'place': {
                            'name': Locale.get('Filter.Place'),
                            'value': f['place']['value'],
                            'type': f['place']['type'],
                            'url': f['place']['url']
                        },
                        'price': {
                            'name': Locale.get('Filter.Price')+' Ls',
                            'value': f['price']['value'],
                            'type': f['price']['type'],
                            'url': f['price']['url']
                        }
                    });
//                    filter.loading();
                    SU.start();
                }
            }),
            objects_count: new Request.JSON({
                method: 'get',
                noCache: true,
//                link: 'cancel',
//                onRequest: function() {
////                    filter.loading();
//                },
                onFailure: showError,
                onSuccess: function(n){
                    filter.stopLoading();
                    if(n['error']){
                        filter.updateCount(0);
                        filter.deactiveCount();
                    } else {
                        filter.updateCount(n['t']);
                        if(SU.same)
                            filter.deactiveCount();
                    }
                }
                
            }),
            objects: new Request.JSON({
                method: 'get',
                noCache: true,
//                link: 'cancel',
//                onRequest: function(){
//
//                },
                onFailure: showError,
                onSuccess: function(o){
                    car_list.stopLoading();
                    if(o['error']){
                        
                    } else {
                        if(o['auto']){
                            car_list.addObjects(o['auto']);
                            if(o['total']>12){
                                car_list.activateNext(o['total']-12);
                            } else {
                                car_list.diactiveButton();
                            }
//                            filter.updateCount(o['total']);
//                            filter.deactiveCount();
                        }
                    }
                }
            })
//            feedback: new Request.JSON({
//                method: 'post',
////                link: 'cancel',
//                onRequest: function(){
//                    popup.popupSpinner();
//                },
//                onSuccess: function(o){
//                    popup.hide();
//                }
//            })
        }
    });
    req.send('filter');

    //header
//    [
//        document.id('menu'),
////        document.id('filter'),
//        document.id('footer-wrap')
//    ]
//    .each(function(l){
//        l.set('tween', {duration: 300})
//        .addEvents({
//            'mouseenter': function(){
//                l.fade(1)
//            },
//            'mouseleave': function(){
//                l.fade(.3)
//            }
//
//        }).fireEvent('mouseleave');
//    });
    //ie6 patchs
    (function(){
        if(Browser.ie6)
            popup.showText(Locale.get('Error.Browser error'), Locale.get('Error.Browser error text'));
    })();
});
