var UrlManager = new Class({

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
            this.newValues = this.state;
        }
    }
});
