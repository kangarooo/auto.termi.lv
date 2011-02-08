var filter = function(params){
    var SU = params.SU;
    var activateList = function(el){
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
    };
    (function(){
        var filter = document.id('filter');
        var list = new Element('ol').inject(filter);
        Object.each(params.filter, function(item, index){
            var c = new Element('li').inject(list);
            var name = new Element('span', {'class': 'f-name', 'html': item['name']}).inject(c);
            switch(item['type']){
                case 'mark':
                    (function(){
                        var view = new Element('span', {
                            'class': 'active-decor',
                            'html': Locale.get('Filter.All')
                        }).inject(c).addEvent('click', function(){
                            document.id('mark-filter').get('reveal').toggle();
                        });
                        var advancedList = new AdvancedList(c, {
                            'menu': item['value'],
                            lang: {
                                'all': 'Visi'
                            },
                            onChange: function(url){
                                c.activeUrl = url;
                                c.fireEvent('mouseleave');
                                SU.set('m', url);
                            },
                            onChangeName: function(name){
                                view.set('html', name);
                            }
                        });
                        SU.addEvent('m:changed', function(url){
                            c.activeUrl = url;
                            c.fireEvent('mouseleave');
                            advancedList.setActiveUrl(url);
                        });
                        SU.addEvent('m:removed', function(){
                            c.activeUrl = '';
                            c.fireEvent('mouseleave');
                            advancedList.setActiveUrl('');
                        });
                        activateList(c);
                    })();
                
                break;
                case 'slider':
                    (function(){
                        var minValue, maxValue,
                            url = '', numberFormat = false,
                            numberPrecision = 0;

                        var slider = new Element('ul', {'class': 'slider'}).inject(c);

                        var min = new Element('li', {'class':'min', 'html': item['value']['min']}).inject(slider);
                        var max = new Element('li', {'class':'max', 'html': item['value']['max']}).inject(slider);
                        
                        var possibleValue = item['value']['value'] ? item['value']['value'] : false;

                        if (possibleValue){
                            minValue = 0;
                            maxValue = possibleValue.length-1;
                        } else {
                            minValue = item['value']['min'].toFloat();
                            maxValue = item['value']['max'].toFloat();
                        }
                        var decor = new Element('li', {'class':'decor'}).inject(slider);
                        var min_str = item['value']['min_str'] ? item['value']['min_str'] : '';
                        (function(){
                            switch (item['url']){
                                case 'c':
                                    numberPrecision = 1;
                                break;
                                case 'k':
                                    numberFormat = {
                                        group: ' ',
                                        precision: 3,
                                        scientific: false
                                    };
                                    numberPrecision = -3;
                                break;
                                case 'p':
                                    console.info(item);
                                    if (possibleValue)
                                        break;
                                    numberFormat = {
                                        group: ' ',
                                        precision: 2,
                                        scientific: false
                                    };
                                    numberPrecision = -2;
                                break;
                            }
                        })();
                        var updateSum = function(left, right, isBubble){
                            var min_value = minValue,
                                max_value = maxValue;
                            if(possibleValue){
                                left = possibleValue[left];
                                right = possibleValue[right];
                            }

                            min.set('html', left==min_value&&min_str!='' ? min_str : (numberFormat ? left.format(numberFormat) : left));
                            max.set('html', right==min_value&&min_str!='' ? min_str : (numberFormat ? right.format(numberFormat) : right));
                            if(left==minValue&&right==maxValue)
                                url = '';
                            else
                                url = (left>min_value ? left : '')+'-'+(right<max_value ? right : '');
                            if(!isBubble)
                                SU.set(item['url'], url);
                            c.activeUrl = url;
                            c.fireEvent('mouseleave');
                        };
                        var dbsl = new InlineSlider(slider, {
                            'range': [minValue, maxValue],
                            'round': numberPrecision,
                            'knobs': [min, max],
                            'decor': decor,
                            'onChange': function(k){
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
                        activateList(c);
                    })();
                break;
                case 'chooser':
                    (function(){
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
                            allElements.each(function(el){
                                   el['input'].set('checked', '');
                            });
                            c.activeUrl = '';
                            c.fireEvent('mouseleave');
                        });
                        activateList(c);
                    })();
                break;
            }
        });
    })();

    document.id('search-button').addEvent('click', function(){
        SU.updateParams();
    });
}