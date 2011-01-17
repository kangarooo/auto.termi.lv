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