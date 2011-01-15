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
                    a({ href: auto['url']}, auto['mark']+' '+auto['model']),
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
            auto['added'] = Date.parse(auto['added']).timeDiffInWords();
            auto['image'] = auto['image'] ? this.renderImages(auto) : false;
            auto['params'] = this.renderParams(auto);
            auto['urls'] = this.renderUrl(auto['urls']);
            this.last_id = auto['id'];
            this.renderTemplate('auto', auto).inject(this.ol);
        }.bind(this));
    },
    renderImages: function(data){
        var render_data = [];
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
                end = end.substr(1, 10)+'...'+end.substr(-8);
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
                if(check(type, value))
                    return value[type].format({
                        'decimal': ".",
                        'decimals': 1
                    })+' '+value['engine_type'];
                return this.options.lang['no value'];
            }.bind(this),
            'gearbox': function(type, value){
                if(check(type, value)&&check('gear_type', value))
                    return value[type]+' '+value['gear_type'];
                if(check(type, value))
                    return value[type]+' '+this.options.lang['gears'];
                if(check('gear_type', value))
                    return this.options.lang['no value'];
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
            }
        }
        if(formatter[type])
            return formatter[type](type, value);
        return check(type, value) ? value[type] : this.options.lang['no value'];
    }
});
