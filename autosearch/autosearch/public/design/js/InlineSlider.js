var InlineSlider = new Class({

    Implements: [Events, Options],

    Binds: ['onDrag', 'onStart', 'onComplete'],

    options: {
        range: [0, 300],
        round: 0,
        knobs: false,
        decor: false,
        possible: false
    },
    
    initialize: function(element, options)
    {
        this.setOptions(options);
        if (this.options.possible){
            this.options.range = [0, this.options.possible.length-1];
        }
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
        this.setDefaultPosition();
        this.drag();
    },
    setDefaultPosition: function(){
        if(this.options.possible)
            this.setPosition([this.options.possible[0], this.options.possible.getLast()]);
        else
            this.setPosition(this.options.range);
    },
    setPosition: function(v){
        if(this.options.possible){
            v = [this.options.possible.indexOf(v[0]), this.options.possible.indexOf(v[1])];
        }
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
        var v = [
            (this.options.range[0]+(this['right']['left'] - this['left']['width'])/this.proportion),
            (this.options.range[0]+(this['left']['left'])/this.proportion)
        ];
        if(this.options.possible){
            v = [this.options.possible[v[0].round()], this.options.possible[v[1].round()]];
        }
        return {
            'right': v[0].round(this.options.round),
            'left': v[1].round(this.options.round)
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
});