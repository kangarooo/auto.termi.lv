var lang;
(function(){
    lang = 0;
    var possibleLanguage = ['ru', 'lg'];
    
    var redirect = function(url, file){
        file = file==undefined ? '' : file;
        u.set('directory', '')
        .set('file', file)
        .set('fragment', url)
        .go();
    }
    var u = new URI(window.location);
    var url = (u.get('directory')+u.get('file')).substr(1);
    if(url.substr(-4)=='json')
        return;
    if(url.substr(0, 1)=='s')
        redirect(url);
    possibleLanguage.each(function(pr, i){
        if(url.substr(0, 2)==pr)
            lang = i+1;
        if(url.substr(0, 4)==pr+'/s')
            redirect(url.substr(3), pr);
    });
    
})();