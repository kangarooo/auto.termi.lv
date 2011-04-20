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
            'button': [],
            'none': 'nav',
            'months': 'mēneši',
            'month': 'mēnesis',
            'one month': 'mazāk par mēnesi'
        }
    },
    //params for buttons [0 - prev button, 1 - next]
    id: [],
    button: [],
    buttonTxt: [],
    pressedButton: 0,
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
        this.ol = new Element('ol').inject(this.options.el);
        [0, 1].each(function(i){
            this.button[i] = new Element('div', {
                'html': '',
                'class': 'button button-'+['next', 'prev'][i],
                'events': {
                    'click': function(){
                        this.pressedButton = i;
                        this.fireEvent(['next', 'prev'][i], this.id[i]);
                    }.bind(this)
                }
            }).inject(this.options.el, ['bottom', 'top'][i]);
            this.buttonTxt[i] = new Element('span').inject(this.button[i]);
            new Element('div', {'class': 'loader', 'styles': {
                'opacity': .9
            }}).inject(this.button[i]);
            this.diactiveButton(i);
        }.bind(this));
        this.params = this.options.params;
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
                a({'href': data['href'], 'target': '_new'}, data['source'])
            );
        });
        //main auto template
        this.registerTemplate('auto', function(auto) {
            li({'class': 'auto'},
                h2(
                    a({ href: auto['url'], 'target': '_new'},
                    auto['name'].length>20 ? auto['name'].substr(0, 20)+'...' : auto['name']),
                    span({ 'class': 'added', 'datetime': auto['added']}, auto['added_text'])
                ),
                auto['image'] ? div({'class': 'images'},
                    auto['image']
                ) : false,
                ul({'class': 'params'}, auto['params']),
                ul({'class': 'additional'}, auto['urls'])
            );
        });
    },
    diactiveButton: function(bt){
        bt = bt==undefined ? 0 : bt;
        this.stopLoadingButton(bt);
        this.button[bt].setStyle('display', 'none');
    },
    activateButton: function(bt, t){
        bt = bt==undefined ? 0 : bt;
//        this.button[bt].setStyle('display', 'block');
        this.button[bt].reveal();
        this.buttonTxt[bt].set('html', this.options.lang['button'][bt](t));
    },
    loadingButton: function(bt){
        bt = bt==undefined ? 0 : bt;
        this.button[bt].addClass('loading');
    },
    stopLoadingButton: function(bt){
        bt = bt==undefined ? 0 : bt;
        this.button[bt].removeClass('loading');
    },
    rebild: function(){
        this.ol.empty();
        [0, 1].each(function(i){
            this.diactiveButton(i)
            this.id[i] = undefined;
        }.bind(this));
        return this.ol;
    },
    loading: function(){
        this.options.el.addClass('car-list-loading');
    },
    stopLoading: function(){
        this.stopLoadingButton(this.pressedButton);
        this.options.el.removeClass('car-list-loading');
    },
    addObjects: function(data, type){
        this.render(data, type);
    },
    render: function(data, type) {
        var len = data.length;
        if(type==1)
            new Element('li', {'class': 'delimiter'}).inject(this.ol, 'top')
        data.each(function(auto, i, obj){
            if(!this.id[1])
                this.id[1] = auto['id'];
            this.id[type] = auto['id'];
            auto['name'] = auto['mark']+' '+auto['model'];
            auto['added'] = auto['added'];
            auto['added_text'] = Date.parse(auto['added']).timeDiffInWords();
            auto['image'] = auto['image'] ? this.renderImages(auto) : false;
            auto['params'] = this.renderParams(auto);
            auto['url'] = auto['urls'][0];
            auto['urls'] = this.renderUrl(auto['urls']);
            this.renderTemplate('auto', auto).inject(this.ol, type==1 ? 'top' : 'bottom');
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
                if(check(type, value)&&check('engine_type', value))
                    return value[type].format(format)+' '+value['engine_type'];
                if(check(type, value))
                    return value[type].format(format);
                if(check('engine_type', value))
                    return value['engine_type'];
                return this.options.lang['no value'];
            }.bind(this),
            'gearbox': function(type, value){
                if(check(type, value)&&check('gear_type', value))
                    return value[type]+' '+value['gear_type'];
                if(check(type, value))
                    return this.options.lang['gears'](value[type]);
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
                    var m = Date.parse(value[type]).diff(new Date().set('date', 1), 'month');
                    /*if(m>=0)
                        return this.options.lang['one month'];
                    m = -1*m;
                    return m+' '+this.options.lang['months'.substr(0, m==1 ? 5 : 6)]*/
                    return this.options.lang['month'](m);
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
