window.addEvent('domready', function(){
    Locale.use(['lv-LV', 'ru-LV', 'lg-LG'][lang]);
    var path = ['', '/ru', '/lg'][lang]
    var window_scroll = new Fx.Scroll(window);
    var Title = new Class({
        initialize: function(t){
            this['title'] = t;
        },
        'set': function(t){
            document.title = t+this['title'];
        },
        'new_values': function(c){
            this.set('('+c+') ');
        },
        'original': function(){
            document.title=this['title'];
        }
    });
    var title = new Title(document.title);
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
//    var showError =
    var showError = {
        'timeout': function(){
            popup.showText(Locale.get('Error.Error'), Locale.get('Error.Error simple text').substitute({'status': 'timeout'}));
        },
        'urlError': function(){
            showError.nothing();
        },
        'nothing': function(){
            popup.showText(Locale.get('Error.Nothing'), Locale.get('Error.Nothing found'));
        }
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
            'button': [
                function(next){
                    return Locale.get('Object.Next', next)
                },
                function(prev){
                    return Locale.get('Object.Prev', prev)
                }
            ],
            'none': Locale.get('Object.None'),
            'month': function(month){
                return Locale.get('Object.Month', month);
            },
            'one month': Locale.get('Object.Less the month'),
            'gears': function(gear){
                return Locale.get('Object.Gears', gear);
            }
        },
        onNext: function(n){
            car_list.loadingButton(0);
            req.send('objects', {'url': path+'/next/'+n+'/'+(SU.lastUrl=='' ? 's' : SU.lastUrl)+'.json'});
        },
        onPrev: function(n){
            car_list.loadingButton(1);
            req.send('objects', {'url': path+'/prev/'+n+'/'+(SU.lastUrl=='' ? 's' : SU.lastUrl)+'.json'});
        }
    });
//    //url manager
    var req_delay = {
        'objects_count': 0,
        'new_objects_count': 0
    };
    var SU = new UrlManager({
        'blank_page': '/design/html/blank.html',
//        'currentHash': new URI(window.location).get('fragment'),
        'variables': ['m', 'y', 'c', 'f', 'g', 'k', 't', 'o', 'l', 'p'],
        'prefix': 's/',
        onChange: function(d){
            var url = path+'/'+(d=='' ? 's' : d);
            //lets leave this two line for lazy loading
            window.clearTimeout(req_delay['objects_count']);
            req.cancel('objects_count');
            
            filter.deactiveCount();
            car_list.rebild();
            car_list.loading();
            window_scroll.toTop();
            req.send('objects', {'url': url+'.json'});
            
            title.original();

            //trach to analytic
            _gaq.push(['_trackPageview', url]);
        },
        onNewHash: function(d){
            window.clearTimeout(req_delay['objects_count']);
            req.cancel('objects_count');
            filter.loading();
            req_delay['objects_count'] = function(){
                req.send('objects_count', {'url': path+'/c/'+(d=='' ? 's' : d)+'.json'});
            }.delay(500);
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
        stopOnFailure: false,
        requests: {
            filter: new Request.JSONP({
                url: path+'/search/params.json',
                link: 'cancel',
                onComplete: function(f){
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
            objects_count: new Request.JSONP({
                link: 'cancel',
//                onRequest: function() {
////                    filter.loading();
//                },
//                timeout: 2,
                onTimeout: function(){
                    filter.stopLoading();
                    filter.updateCount(0);
                    showError.timeout();
                },
                onComplete: function(n){
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
            new_objects_count: new Request.JSONP({
//                onTimeout: showError,
                onComplete: function(n){
                    if(!n['error']&&n['t']>0){
                        title.new_values(n['t']);
                        car_list.activateButton(1, n['t']);
                    }
                }

            }),
            objects: new Request.JSONP({
                link: 'cancel',
                onRequest: function(){
                    window.clearTimeout(req_delay['new_objects_count']);
                    req.cancel('new_objects_count');
                },
                onTimeout: function(){
                    car_list.stopLoading();
                    showError.timeout();
                },
                onComplete: function(o){
                    car_list.stopLoading();
                    if(o['error']){
                        if(o['error']=='UrlError'){
                            showError.urlError();
                        }
                    } else {
                        if(o['auto']){
                            var type = o['type']=='prev' ? 1 : 0;
                            car_list.addObjects(o['auto'], type);
                            if(o['total']>12){
                                car_list.activateButton(type, o['total']-12);
                                if(type==1)
                                    title.new_values(o['total']-12);
                            } else {
                                car_list.diactiveButton(type);
                                if(type==1)
                                    title.original();
                            }
                            if(o['total']==0){
                                showError.nothing();
                                return;
                            }
                            window.clearTimeout(req_delay['new_objects_count']);
                            req.cancel('new_objects_count');
                            req_delay['new_objects_count'] = function(){
                                if(car_list.id[1])
                                    req.send('new_objects_count', {'url': path+'/new/'+car_list.id[1]+'/'+(SU.lastUrl=='' ? 's' : SU.lastUrl)+'.json'});
                            }.periodical(3*60*1000);
                        }
                    }
                }
            })
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
