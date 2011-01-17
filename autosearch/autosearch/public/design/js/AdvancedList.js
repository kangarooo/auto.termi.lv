var AdvancedList = new Class({

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

});