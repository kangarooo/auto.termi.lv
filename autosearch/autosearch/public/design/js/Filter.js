var Filter = new Class({

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
            var c = new Element('li').inject(list);
            var name = new Element('span', {'class': 'f-name', 'html': item['name']}).inject(c);
            this[item['type']](c, item, this.options.SU);
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
                'opacity': .8
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
               this.fade(1);
           },
           'mouseleave': function(){
               if(!this.activeUrl||this.activeUrl=='')
                   this.fade(0.3);
               else this.fade(1);
           }
        }).fireEvent('mouseleave');
    },
    mark: function(c, item, SU){
        var view = new Element('span', {
            'class': 'active-decor',
            'html': Locale.get('Filter.All')
        }).inject(c).addEvent('click', function(){
            document.id('mark-filter').get('reveal').toggle();
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
                precision: -1
            },
            'k': {
                group: ' ',
                precision: -3,
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
                'events': { 'change': checkStatus }
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
    }
});