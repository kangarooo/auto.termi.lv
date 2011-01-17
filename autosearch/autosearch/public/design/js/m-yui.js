var Mooml={version:"1.2.4",templates:{},engine:{callstack:[],tags:{}},htmlTags:["a","abbr","address","area","article","aside","audio","b","base","bdo","blockquote","body","br","button","canvas","caption","cite","col","colgroup","command","datalist","dd","del","details","dialog","dfn","div","dl","dt","em","embed","fieldset","figure","footer","form","h1","h2","h3","h4","h5","h6","head","header","hgroup","hr","html","i","iframe","img","input","ins","keygen","kbd","label","legend","li","link","map","mark","menu","meta","meter","nav","noscript","object","ol","optgroup","option","output","p","param","pre","progress","q","rp","rt","ruby","samp","script","section","select","small","source","span","strong","style","sub","sup","table","tbody","td","textarea","tfoot","th","thead","time","title","tr","ul","var","video","acronym","applet","basefont","big","center","dir","font","frame","frameset","noframes","s","strike","tt","u","xmp"],evaluate:function(b,d){var c=[];this.engine.callstack.push(b);if(b.prepared==false){b.code=this.prepare(b.code);b.prepared=true}Array.from([d,{}].pick()).each(function(f,e){b.code(f,e);c.append(b.nodes.filter(function(g){return g.getParent()===null}));b.nodes.empty()});this.engine.callstack.pop();if(this.engine.callstack.length){if(b.elementRefs){Array.extend(this.engine.callstack.getLast().elementRefs,b.elementRefs)}}return(c.length>1)?c:c.shift()},initEngine:function(){this.htmlTags.each(function(b){Mooml.engine.tags[b]=function(){var f=Mooml.engine.callstack.getLast();var e=new Element(b);for(var d=0,c=arguments.length;d<c;d++){var g=arguments[d];if(typeOf(g)==="function"){g=g()}switch(typeOf(g)){case"array":case"element":case"collection":e.adopt(g);break;case"string":if(f){e.getChildren().each(function(h){f.nodes.erase(h)})}e.set("html",e.get("html")+g);break;case"number":e.appendText(g.toString());break;case"object":if(d===0){if(f&&f.elementRefs&&g.id){f.elementRefs[g.id]=e}e.set(g)}else{if(typeOf(g.toElement)=="function"){e.adopt(g.toElement())}}break}}if(f){f.nodes.push(e)}return e}});window.addEvent("domready",function(){document.getElements("script[type=text/mooml]").each(function(b){Mooml.register(b.get("name"),new Function(["data","index"],b.get("text")))})})},prepare:function(f){var c=f.toString();var d=c.match(/\(([a-zA-Z0-9,\s]*)\)/)[1].replace(/\s/g,"").split(",");var b=c.match(/\{([\s\S]*)\}/m)[1];for(var e=this.htmlTags.length;--e>=0;){b=b.replace(new RegExp("(^|[^\\w.])("+this.htmlTags[e]+")([\\s]*(?=\\())","g"),"$1Mooml.engine.tags.$2$3")}return new Function(d,b)}};Mooml.Template=new Class({nodes:[],initialize:function(c,d,b){if(b&&b.elementRefs&&typeof(b.elementRefs)==="object"){this.elementRefs=b.elementRefs}this.name=c;this.code=d;this.prepared=false},render:function(b){return Mooml.evaluate(this,b)}});Mooml.Templates=new Class({templates:{},registerTemplate:function(c,e,b){var d=this.templates[c];return(d)?d:this.templates[c]=new Mooml.Template(c,e,b)},renderTemplate:function(b,d){var c=this.templates[b];return(c)?c.render(d):null}});Object.append(Mooml,new Mooml.Templates());Mooml.register=Mooml.registerTemplate;Mooml.render=Mooml.renderTemplate;Mooml.initEngine();Locale.define("lv-LV","Filter",{All:"Visi",Models:"Modeļi",Year:"Izlaiduma gads",Engine:"Dzinēja tilpums","Engine type":"Degviela","Gear type":"Ātrumkārba",Mileage:"Nobraukums",Tehpassport:"Tehniskā apskate","Car type":"Virsbūves tips",Place:"Vieta",Price:"Cena","Submit button":"Atlasīt","Submit loading":"Skaitam"});Locale.define("lv-LV","Object",{Year:"Gads",Engine:"Motors",Gearbox:"Ātrumkārba",Mileage:"Nobraukums","Drive type":"Piedziņa",Tehpassport:"Tehniskā","Car type":"Virsbūve",Place:"Vieta",Color:"Krāsa",Price:"Cena",Next:"Nākamie {total} rezultāti",None:"Nav",Months:"mēneši",Month:"mēnesis","Less the month":"Mazāk par mēnesi",gears:"ātrumi"});Locale.define("lv-LV","Error",{Error:"Notikusi nenovēršama kļūda!","Error simple text":"Saņēmām <strong>{status}</strong> kļūdu,\n        ja tas jums neko neizsaka, tad mēs iesakām atjaunot lapu\n        (nospiežot pogu atjaunot - refresh),\n         savādāk jūs varat novērot negaidītus rezultātus",Warning:"Šī ir pagaidu versija!","Warning message":'Pagaidu versijā var tikt novērotas kļūdas. Mes būsim ļoti pateicīgi,\n    ja jūs atradīsiet laiku paziņot mums par šīm kļūdām un nepilnībām. Ka arī gaidam jūsu ieteikumus.<br />\n    Sazināties ar mums var <a href="/feedback">šeit.</a>.',"Browser error":"Pārlūka problēma!","Browser error text":"Diemžēl mums nācas secināt, ka mūsu lapa netiek\n     atbalstīta uz jūsu pārlūka. Lai novērst šo problēmu, mēs iesakām\n    sazināties ar datormeistaru."});Locale.define("en-US","Date",{months:["January","February","March","April","May","June","July","August","September","October","November","December"],months_abbr:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],days:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],days_abbr:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],dateOrder:["month","date","year"],shortDate:"%m/%d/%Y",shortTime:"%I:%M%p",AM:"AM",PM:"PM",ordinal:function(b){return(b>3&&b<21)?"th":["th","st","nd","rd","th"][Math.min(b%10,4)]},lessThanMinuteAgo:"mazāk par minūti",minuteAgo:"minūti atpakaļ",minutesAgo:"pirms {delta} minūtēm",hourAgo:"pirms stundas",hoursAgo:"pirms {delta} stundām",dayAgo:"pirms 1 dienas",daysAgo:"pirms {delta} dienām",weekAgo:"pirms nedēļas",weeksAgo:"pirms {delta} nedēļām",monthAgo:"pirms mēneša",monthsAgo:"pirms {delta} mēnešiem",yearAgo:"pirms gada",yearsAgo:"pirms {delta} gadiem",lessThanMinuteUntil:"mazāk par minūti",minuteUntil:"līdz minūtei",minutesUntil:"līdz {delta} minūtēm",hourUntil:"about an hour from now",hoursUntil:"about {delta} hours from now",dayUntil:"1 day from now",daysUntil:"{delta} days from now",weekUntil:"1 week from now",weeksUntil:"{delta} weeks from now",monthUntil:"1 month from now",monthsUntil:"{delta} months from now",yearUntil:"1 year from now",yearsUntil:"{delta} years from now"});var Popup=new Class({Implements:[Events,Options],options:{container:false,lang:{submit:"Submit"}},initialize:function(b){this.setOptions(b);this.container=this.options.container?this.options.container:document.body;this.mask=new Mask();this.popup=new Element("div",{"class":"popup-window"}).inject(this.container).setStyle("top",-1000);this.popup_txt=new Element("div",{"class":"popup-window-content"}).inject(this.popup);this.close=new Element("span",{"class":"popup-window-close",html:"x",events:{click:function(){this.hide()}.bind(this)}}).inject(this.popup)},show:function(){this.mask.show();this.popup.morph({top:this.container.getScroll().y+(window.getSize().y-this.popup.getSize().y)/2,left:this.container.getScroll().x+(window.getSize().x-this.popup.getSize().x)/2})},hide:function(){this.mask.hide();this.removeSpinner();this.popup.morph({top:-1000});this.popup_txt.empty()},showFeedback:function(g,e,f){var d={email:{name:"name",field:"input",value:{type:"text"}},text:{name:"sugsession",field:"textarea",value:{cols:10,rows:10}}};new Element("h2",{html:g}).inject(this.popup_txt);new Element("p",{html:e}).inject(this.popup_txt);var h=new Element("form",{action:f}).inject(this.popup_txt);Object.each(d,function(j,i){var b=new Element("label",{"for":i}).inject(h);new Element("span",{html:j.name}).inject(b);new Element(j.field,j.params).inject(b)});var c=new Element("div",{"class":"button submit-button",html:this.options.lang.submit,events:{click:function(){this.fireEvent("feedback",h)}.bind(this)}}).inject(h);this.show()},showText:function(c,b){new Element("h2",{html:c}).inject(this.popup_txt);new Element("p",{html:b}).inject(this.popup_txt);this.show()},popupSpinner:function(){this.spiner=new Spinner(this.popup).show()},removeSpinner:function(){if(this.spiner){this.spiner.destroy()}this.spiner=undefined}});var Filter=new Class({Implements:[Events,Options],Binds:["deactiveCount","activeCount"],options:{},button_period:0,initialize:function(b){this.setOptions(b);this.filter=document.id("filter");this.list=new Element("ol").inject(this.filter)},draw:function(b){var c=this.list;Object.each(b,function(g,e){var h=new Element("li",{"class":"filter-item-"+g.url}).inject(c);var d=new Element("span",{"class":"f-name",html:g.name}).inject(h);var f=this[g.type](h,g,this.options.SU);if(["l","o"].contains(g.url)){d.addClass("clickable").addEvents({click:function(){f.get("reveal").toggle()}}).fireEvent("click")}}.bind(this));this.drawButton()},drawButton:function(){this.button=new Element("div",{"class":"button inactive",events:{click:function(){this.fireEvent("filter")}.bind(this)}}).inject(this.filter);this.button_text=new Element("span",{html:this.options.button}).inject(this.button);this.button_counter=new Element("span").inject(this.button);this.loader=new Element("div",{"class":"loader",styles:{opacity:0.9}}).inject(this.button)},updateCount:function(b){this.button.removeClass("loading");if(b==0){this.deactiveCount()}else{this.activeCount()}this.button_counter.set("html"," ("+b+")")},activeCount:function(){this.button.removeClass("inactive")},deactiveCount:function(){this.button.addClass("inactive")},loading:function(){this.button.removeClass("inactive");this.button.addClass("loading")},stopLoading:function(){this.button.removeClass("loading")},activateList:function(b){b.addEvents({mouseenter:function(){this.setStyle("opacity",1)},mouseleave:function(){if(!this.activeUrl||this.activeUrl==""){this.setStyle("opacity",0.3)}else{this.setStyle("opacity",1)}}}).fireEvent("mouseleave")},mark:function(g,e,d){var b=new Element("span",{"class":"active-decor",html:Locale.get("Filter.All")}).inject(g).addEvent("click",function(){document.id("mark-filter").setStyle("display","block").morph({top:30})});var f=new AdvancedList(g,{menu:e.value,lang:{all:e.lang["All"]},onChange:function(c){g.activeUrl=c;g.fireEvent("mouseleave");d.set(e.url,c)},onChangeName:function(c){b.set("html",c)}});d.addEvent(e.url+":changed",function(c){g.activeUrl=c;g.fireEvent("mouseleave");f.setActiveUrl(c)});d.addEvent(e.url+":removed",function(){g.activeUrl="";g.fireEvent("mouseleave");f.setActiveUrl("")});this.activateList(g);return b},slider:function(l,q,f){var d=new Element("ul",{"class":"slider"}).inject(l);var e=new Element("li",{"class":"min",html:q.value["min"]}).inject(d);var m=new Element("li",{"class":"max",html:q.value["max"]}).inject(d);var o=q.value["min"].toFloat();var i=q.value["max"].toFloat();var p=new Element("li",{"class":"decor"}).inject(d);var b="";var h={c:{precision:1},k:{group:" ",precision:-4,scientific:false},p:{group:" ",precision:-2,scientific:false}};var j=h[q.url]?h[q.url]:false;var k=q.value["min_str"]?q.value["min_str"]:"";var n=function(r,c,s){e.set("html",r==o&&k!=""?k:(j?r.format(j):r));m.set("html",c==o&&k!=""?k:(j?c.format(j):c));if(r==o&&c==i){b=""}else{b=(r>o?r:"")+"-"+(c<i?c:"")}if(!s){f.set(q.url,b)}l.activeUrl=b;l.fireEvent("mouseleave")};var g=new InlineSlider(d,{range:[o,i],round:j?j.precision:0,knobs:[e,m],decor:p,onChange:function(c){n(c.left,c.right,true)},onComplete:function(c){n(c.left,c.right)}});n(o,i,true);f.addEvent(q.url+":changed",function(r){var t=r.split("-");var s=t[0]==""?o:t[0].toFloat();var c=t[1]==""?i:t[1].toFloat();g.setPosition([s,c]);n(s,c,true)});f.addEvent(q.url+":removed",function(){g.setPosition([o,i]);n(o,i,true)});this.activateList(l);return d},chooser:function(j,g,d){var f=[];var b="";var e=function(){var c=true;var k=[];f.each(function(l){c=c&&l.input.get("checked")?c:false;if(l.input.get("checked")){k.include(l)}});if(c){f.each(function(l){l.input.set("checked","")});k=[]}else{k=k.map(function(l){return l.li})}b=k.length>0?k.join(";"):"";j.activeUrl=b;j.fireEvent("mouseleave");d.set(g.url,b)};var i=function(){f.each(function(c){c.input.set("checked","")})};var h=new Element("ul",{"class":"chooser"}).inject(j);g.value.each(function(k){var l=new Element("li").inject(h);var c=new Element("input",{type:"checkbox",events:{click:e}}).inject(l);new Element("span",{html:k}).inject(l);f.include({input:c,li:k})});d.addEvent(g.url+":changed",function(c){i();c.split(";").each(function(k){f.each(function(l){if(l.li==k){l.input.set("checked","checked")}})});j.activeUrl=c;j.fireEvent("mouseleave")});d.addEvent(g.url+":removed",function(){i();j.activeUrl="";j.fireEvent("mouseleave")});this.activateList(j);return h}});var CarList=new Class({Implements:[Options,Events,Mooml.Templates],options:{el:null,params:[{name:"Year",value:"year"},{name:"Price",value:"price"},{name:"Place",value:"place"},{name:"Tehpassport",value:"tehpassport"},],lang:{next:"nav",none:"nav",months:"mēneši",month:"mēnesis","one month":"mazāk par mēnesi"}},initialize:function(b){this.setOptions(b);this.button=new Element("div",{html:"","class":"button button-next",events:{click:function(){this.fireEvent("next",this.last_id)}.bind(this)}}).inject(this.options.el);this.buttonTxt=new Element("span").inject(this.button);new Element("div",{"class":"loader",styles:{opacity:0.9}}).inject(this.button);this.diactiveButton();this.params=this.options.params;this.rebild();this.registerTemplate("image",function(c){img({src:c.src,alt:c.alt})});this.registerTemplate("param",function(c){li({"class":c["class"]},strong({"class":"type"},c.type),span({"class":"value"},c.value))});this.registerTemplate("url",function(c){li(a({href:c.href,target:"_blank"},c.source))});this.registerTemplate("auto",function(c){li(h2(a({href:c.url,target:"_blank"},c.mark+" "+c.model),span({"class":"added"},c.added)),c.image?div({"class":"images"},c.image):false,ul({"class":"params"},c.params),ul({"class":"additional"},c.urls))})},diactiveButton:function(){this.stopLoadingNext();this.button.setStyle("display","none")},activateNext:function(b){this.button.setStyle("display","block");this.buttonTxt.set("html",this.options.lang.next.substitute({total:b}))},loadingNext:function(){this.button.addClass("loading")},stopLoadingNext:function(){this.button.removeClass("loading")},rebild:function(){var b=this.options.el.getElement("ol");if(b){b.destroy()}this.ol=new Element("ol").inject(this.options.el,"top");return this.ol},loading:function(){this.options.el.addClass("car-list-loading")},stopLoading:function(){this.stopLoadingNext();this.options.el.removeClass("car-list-loading")},addObjects:function(b){this.render(b)},render:function(b){b.each(function(c){c.added=Date.parse(c.added).timeDiffInWords();c.image=c.image?this.renderImages(c):false;c.params=this.renderParams(c);c.url=c.urls[0];c.urls=this.renderUrl(c.urls);this.last_id=c.id;this.renderTemplate("auto",c).inject(this.ol)}.bind(this))},renderImages:function(c){var b=[];c.image.each(function(d){b.include({src:d.src,url:d.url,alt:c.mark+" "+c.model})}.bind(this));return this.renderTemplate("image",b)},renderParams:function(c){var b=[];this.params.each(function(e){var d=this.prepareValue(e.value,c);b.include({type:e.name,value:d,"class":d==this.options.lang["no value"]?"empty-value":""})}.bind(this));return this.renderTemplate("param",b)},renderUrl:function(c){var b=[];c.each(function(g){var e,d,f;e=new URI(g);d=e.get("directory")+e.get("file")+e.get("query")+e.get("fragment");if(d.length>25){d=d.substr(1,10)+"..."+d.substr(d.length-8)}b.include({href:g,source:e.get("host")+"/"+d})}.bind(this));return this.renderTemplate("url",b)},prepareValue:function(d,e){var b=function(f,g){if(g[f]&&g[f]!="None"){return true}return false};var c={year:function(f,g){if(b(f,g)){return g[f]}return this.options.lang["no value"]}.bind(this),engine:function(f,g){if(b(f,g)){return g[f].format({decimal:".",decimals:1})+" "+g.engine_type}return this.options.lang["no value"]}.bind(this),gearbox:function(f,g){if(b(f,g)&&b("gear_type",g)){return g[f]+" "+g.gear_type}if(b(f,g)){return g[f]+" "+this.options.lang.gears}if(b("gear_type",g)){return this.options.lang["no value"]}return this.options.lang["no value"]}.bind(this),mileage:function(f,g){if(b(f,g)){return g[f].format({group:" ",suffix:" km"})}return this.options.lang["no value"]}.bind(this),tehpassport:function(g,h){if(h.tehpassport_is===false){return this.options.lang.none}if(b(g,h)){var f=Date.parse(h[g]).diff(new Date(),"month");if(f>=0){return this.options.lang["one month"]}f=-1*f;return f+" "+this.options.lang["months".substr(0,f==1?5:6)]}return this.options.lang["no value"]}.bind(this),price:function(f,g){if(b(f,g)){return g[f].format({decimal:".",group:" ",decimals:0})+" "+g.currency}return this.options.lang["no value"]}};if(c[d]){return c[d](d,e)}return b(d,e)?e[d]:this.options.lang["no value"]}});var InlineSlider=new Class({Implements:[Events,Options],Binds:["onDrag","onStart","onComplete"],options:{range:[0,300],round:0,knobs:false,decor:false},initialize:function(c,b){this.setOptions(b);this.element={el:document.id(c),width:document.id(c).getSize().x};["left","right"].each(function(d,e){this[d]={el:this.options.knobs[e],width:this.options.knobs[e].getSize().x}}.bind(this));if(this.options.decor){this.decor={el:document.id(this.options.decor)}}this.range=this["element"]["width"]-this["left"]["width"]-this["right"]["width"];this.proportion=this.range/(this.options.range[1]-this.options.range[0]);this.setPosition(this.options.range);this.drag()},setPosition:function(b){this["left"]["el"].setStyle("left",(b[0]-this.options.range[0])*this.proportion);this["right"]["el"].setStyle("left",(b[1]-this.options.range[0])*this.proportion+this["left"]["width"]);this.updatePosition()},updatePosition:function(){["left","right"].each(function(b){this[b]["left"]=this[b]["el"].getStyle("left").toInt()}.bind(this));if(this.decor){this.decor.width=this["right"]["left"]-this["left"]["left"]-this["left"]["width"];this.decor.el.setStyles({left:this["left"]["left"]+this["left"]["width"],width:this.decor.width})}},drag:function(){["right","left"].each(function(b){this[b]["drag"]=new Drag(this[b]["el"],{limit:this.getDragLimit(b),onStart:this.onStart,onDrag:function(){this.onDrag(b)}.bind(this),onComplete:this.onComplete})}.bind(this))},onStart:function(b){b.addClass("dragging")},onDrag:function(b){this.updatePosition();this.fireEvent("change",this.getKnob());this[b]["drag"].limit=this.getDragLimit(b)},onComplete:function(b){b.removeClass("dragging");this.fireEvent("complete",this.getKnob());["right","left"].each(function(c){this[c]["drag"].options.limit=this.getDragLimit(c)}.bind(this))},getKnob:function(){return{right:(this.options.range[0]+(this["right"]["left"]-this["left"]["width"])/this.proportion).round(this.options.round),left:(this.options.range[0]+(this["left"]["left"])/this.proportion).round(this.options.round)}},getDragLimit:function(b){return{x:[(b=="right"?this["left"]["width"]+this["left"]["left"]:0),(b=="left"?this["right"]["left"]-this["left"]["width"]:this["element"]["width"]-this["right"]["width"])],y:[0,0]}}});var AdvancedList=new Class({Implements:[Events,Options],options:{onTick:function(b){if(this.options.snap){b=this.toPosition(this.step)}this.knob.setStyle(this.property,b)},heads:"h3",delimiters:[";",","],url:"",classes:["t-active"],lang:{all:"All"},menu:{}},initialize:function(c,b){this.setOptions(b);this.element=document.id(c);this.menu=this.options.menu;this.draw()},draw:function(){this.content=new Element("div",{"class":"filter",id:"mark-filter"}).inject("cont");new Drag(this.content);var b=this.drawListIntro(this.content,this.content);this.mark_intro=b;b.all_input.set("checked","checked").addEvent("click",function(){if(b.all_input.get("checked")){this.disableMarks()}else{b.all_input.set("checked","checked")}this.checkUrl()}.bind(this));this.menu.each(function(f,d){var c=this.drawListContent(b.ul,f.name);this.menu[d]["content"]=c;if(f.models.length>1){var e=this.drawListIntro(c.list);this.menu[d]["intro"]=e;new Drag(e.ul,{stopPropagation:true});f.models.each(function(h,g){var i=this.drawListContent(e.ul,h.name);this.menu[d]["models"][g]["content"]=i;i.input.addEvent("click",function(){this.modelStatus(d,g,i.input.get("checked"));this.checkUrl()}.bind(this))}.bind(this));c.text.addClass("fil-name-sub").addEvent("click",function(){e.ul.setStyle("display","block").morph({top:e.ul.startPosition})}.bind(this));e.all_input.addEvent("click",function(){if(e.all_input.get("checked")){this.disableModels(d);this.markStatus(d,true)}else{this.markStatus(d,false)}this.checkUrl()}.bind(this))}c.input.addEvent("click",function(){this.markStatus(d,c.input.get("checked"));this.checkUrl()}.bind(this))}.bind(this))},drawListIntro:function(e,d){var c=new Element("ul").inject(e);c.startPosition=e.getPosition("wrap").y+1000;var e=d?d:c;e.setStyles({top:-1000,left:e.getPosition("wrap").x});if(d==undefined){e.setStyle("display","none")}new Element("li",{"class":"close",html:"x"}).inject(c).addEvent("click",function(){e.morph({top:-1000}).get("morph").chain(function(){e.setStyle("display","none")})}.bind(this));var b=new Element("li",{html:'<span class="fil-name">'+this.options.lang.all+"</span>"}).inject(c);var f=new Element("input",{type:"checkbox"}).inject(b,"top");return{ul:c,all_li:b,all_input:f}},drawListContent:function(d,c){var f=new Element("li").inject(d);var g=new Element("span",{"class":"fil-name",html:c}).inject(f);var b=new Element("input",{type:"checkbox"}).inject(f,"top");var e=new Element("span",{"class":"adit"}).inject(f);return{list:f,text:g,input:b,adit:e}},markStatus:function(i,g){var e=this.menu[i]["content"]["list"],d=this.menu[i]["content"]["input"];this.menu[i]["active"]=g;this.updateActive(e,d,g);if(this.menu[i]["intro"]){var b=this.getActiveModel(i);var c=b&&b.length==this.menu[i]["models"].length;if(g&&!b){this.updateActive(this.menu[i]["intro"]["all_li"],this.menu[i]["intro"]["all_input"],true)}if(g&&c){this.disableModels(i);this.updateActive(this.menu[i]["intro"]["all_li"],this.menu[i]["intro"]["all_input"],true)}if(g&&b&&!c){this.updateActive(this.menu[i]["intro"]["all_li"],this.menu[i]["intro"]["all_input"],false)}b=this.getActiveModel(i);if(b){var f=[];b.each(function(k){f.include(this.menu[i]["models"][k]["name"])}.bind(this));this.menu[i]["content"]["adit"].set("html"," ("+f.join(", ")+")")}else{this.menu[i]["content"]["adit"].set("html","")}}var h=this.getActiveMark();if(!h){this.updateActive(this.mark_intro.all_li,this.mark_intro.all_input,true)}else{this.updateActive(this.mark_intro.all_li,this.mark_intro.all_input,false)}},modelStatus:function(f,c,e){var d=this.menu[f]["models"][c]["content"]["list"],b=this.menu[f]["models"][c]["content"]["input"];this.menu[f]["models"][c]["active"]=e;this.updateActive(d,b,e);this.markStatus(f,this.getActiveModel(f)?true:false)},getActiveMark:function(){var b=[];this.menu.each(function(c,d){if(c.active){b.include(d)}}.bind(this));return b.length>0?b:false},getActiveModel:function(c){var b=[];this.menu[c]["models"].each(function(e,d){if(e.active){b.include(d)}}.bind(this));return b.length>0?b:false},updateActive:function(c,b,d){if(d){b.set("checked","checked");c.addClass(this.options.classes[0])}else{b.set("checked","");c.removeClass(this.options.classes[0])}},disableMarks:function(){this.menu.each(function(b,c){if(this.menu[c]["active"]){this.menu[c]["active"]=false;this.updateActive(b.content["list"],b.content["input"],false)}}.bind(this))},disableModels:function(b){this.menu[b]["models"].each(function(d,c){if(this.menu[b]["models"][c]["active"]){this.menu[b]["models"][c]["active"]=false;this.updateActive(d.content["list"],d.content["input"],false)}}.bind(this))},disableModelAll:function(){this.menu.each(function(b,c){if(b.intro){this.updateActive(b.intro["all_li"],b.intro["all_input"],false)}}.bind(this))},checkUrl:function(){var b=this.getActiveText();if(this.url!=b){this.url=b;this.fireEvent("change",b);this.fireEvent("changeName",this.getActiveText(true))}},getActiveText:function(c){c=c==undefined?"":c;var b=[];this.menu.each(function(e){if(e.active){var d=[];if(e.models.length>1){e.models.each(function(f){if(f.active){d.include(f.name)}}.bind(this))}b.include(e.name+(d.length>0?(c?" ":"")+"("+d.join(this.options.delimiters[1]+(c?" ":""))+")":""))}}.bind(this));return b.length>0?b.join(this.options.delimiters[0]+(c?" ":"")):(c?this.options.lang.all:"")},setActiveUrl:function(b){this.url=b;this.disableMarks();this.menu.each(function(d,c){if(d.models.length>1){this.disableModels(c)}}.bind(this));this.disableModelAll();if(b==""){this.updateActive(this.mark_intro.all_li,this.mark_intro.all_input,false)}else{this.parseUrl(b)}this.fireEvent("changeName",this.getActiveText(true))},parseUrl:function(b){var d=b.split(this.options.delimiters[0]);var c=[];d.each(function(f){if(f==""){return}var h=f;var g=[];var e=/^([^(]+)\((.*?)\)$/.exec(f);if(e){h=e[1];e[2].split(this.options.delimiters[1]).each(function(i){g.include(i)}.bind(this))}c.include({name:h,models:g})}.bind(this));c.each(function(e){this.menu.each(function(g,f){if(e.name==g.name){this.menu[f]["active"]=true;if(e.models.length>0&&g.models.length>1){e.models.each(function(h){g.models.each(function(k,i){if(k.name==h){this.menu[f]["models"][i]["active"]=true;this.modelStatus(f,i,true)}}.bind(this))}.bind(this))}else{this.markStatus(f,true)}}}.bind(this))}.bind(this))}});(function(b){Element.NativeEvents.hashchange=2;HashListener=new Class({Implements:[Options,Events],options:{blank_page:"blank.html",start:false},iframe:null,currentHash:"",firstLoad:true,handle:false,useIframe:(Browser.ie&&(typeof(document.documentMode)=="undefined"||document.documentMode<8)),ignoreLocationChange:false,initialize:function(c){var d=this;this.setOptions(c);if(Browser.opera&&window.history.navigationMode){window.history.navigationMode="compatible"}if(("onhashchange" in window)&&(typeof(document.documentMode)=="undefined"||document.documentMode>7)){window.addEvent("hashchange",function(){var e=d.getHash();d.fireEvent("hashChanged",e);d.fireEvent("hash-changed",e)})}else{if(this.useIframe){this.initializeHistoryIframe()}}window.addEvent("unload",function(e){d.firstLoad=null});if(this.options.start){this.start()}},initializeHistoryIframe:function(){var d=this.getHash(),c;this.iframe=new IFrame({src:this.options.blank_page,styles:{position:"absolute",top:0,left:0,width:"1px",height:"1px",visibility:"hidden"}}).inject(document.body);c=(this.iframe.contentDocument)?this.iframe.contentDocument:this.iframe.contentWindow.document;c.open();c.write('<html><body id="state">'+d+"</body></html>");c.close();return},checkHash:function(){var e=this.getHash(),c,d;if(this.ignoreLocationChange){this.ignoreLocationChange=false;return}if(this.useIframe){d=(this.iframe.contentDocument)?this.iframe.contentDocumnet:this.iframe.contentWindow.document;c=d.body.innerHTML;if(c!=e){this.setHash(c);e=c}}if(this.currentLocation==e){return}this.currentLocation=e;this.fireEvent("hashChanged",e);this.fireEvent("hash-changed",e)},setHash:function(c){window.location.hash=this.currentLocation=c;if(("onhashchange" in window)&&(typeof(document.documentMode)=="undefined"||document.documentMode>7)){return}this.fireEvent("hashChanged",c);this.fireEvent("hash-changed",c)},getHash:function(){var c;if(Browser.firefox){c=/#(.*)$/.exec(window.location.href);return c&&c[1]?c[1]:""}else{if(Browser.safari||Browser.chrome){return decodeURI(window.location.hash.substr(1))}else{return window.location.hash.substr(1)}}},setIframeHash:function(c){var d=(this.iframe.contentDocument)?this.iframe.contentDocumnet:this.iframe.contentWindow.document;d.open();d.write('<html><body id="state">'+c+"</body></html>");d.close()},updateHash:function(c){if(document.id(c)){this.debug_msg("Exception: History locations can not have the same value as _any_ IDs that might be in the document, due to a bug in IE; please ask the developer to choose a history location that does not match any HTML IDs in this document. The following ID is already taken and cannot be a location: "+c)}this.ignoreLocationChange=true;if(this.useIframe){this.setIframeHash(c)}else{this.setHash(c)}},start:function(){this.handle=this.checkHash.periodical(100,this)},stop:function(){clearInterval(this.handle)}})})(document.id);(function(c,b){HistoryManager=new Class({Extends:HashListener,options:{delimiter:"",serializeHash:null,deserializeHash:null,compat:false},state:{},stateCache:{},initialize:function(d){this.parent(d);this.serializeHash=this.options.serializeHash||this.serializeHash;this.deserializeHash=this.options.deserializeHash||this.deserializeHash;this.addEvent("hashChanged",this.updateState.bind(this))},serializeHash:function(e){return JSON.encode(e)},deserializeHash:function(e){return JSON.decode(decodeURIComponent(e))},updateState:function(e){var d=this;if(this.options.delimiter){e=e.substr(this.options.delimiter.length)}e=this.deserializeHash(e);Object.each(this.state,function(h,g){var i,j,f;if(!e||e[g]===b){i=d.state[g];if(d.options.compat){d.fireEvent(g+"-removed",[i])}d.fireEvent(g+":removed",[i]);d.fireEvent(g,[i]);delete d.state[g];delete d.stateCache[g];if(e&&e[g]){delete e[g]}return}f=typeOf(e[g]);j=(f=="string"||f=="number"||f=="boolean")?e[g]:JSON.encode(e[g]);if(j!=d.stateCache[g]){i=e[g];d.state[g]=i;d.stateCache[g]=j;if(d.options.compat){d.fireEvent(g+"-updated",[i]);d.fireEvent(g+"-changed",[i])}d.fireEvent(g+":updated",[i]);d.fireEvent(g+":changed",[i]);d.fireEvent(g,[i])}delete e[g]});Object.each(e,function(g,f){d.state[f]=g;v_type=typeOf(e[f]);d.stateCache[f]=(v_type=="string"||v_type=="number"||v_type=="boolean")?g:JSON.encode(g);if(d.options.compat){d.fireEvent(f+"-added",[g]);d.fireEvent(f+"-changed",[g])}d.fireEvent(f+":added",[g]);d.fireEvent(f+":changed",[g]);d.fireEvent(f,[g])})},set:function(d,e){var f=Object.clone(this.state);f[d]=e;this.updateHash(this.options.delimiter+this.serializeHash(f));return this},remove:function(d){var e=Object.clone(this.state);delete e[d];this.updateHash(this.options.delimiter+this.serializeHash(e));return this}})})(document.id);var UrlManager=new Class({Extends:HistoryManager,Binds:["updateParams","set","addEvent"],options:{variables:["a","b","c"],prefix:"s/"},lastUrl:undefined,same:false,newValues:{},initialize:function(b){this.parent(b)},serializeHash:function(c){if(!c||c==""){return""}var b=[];this.options.variables.each(function(d){if(c[d]){b.include(d+"-"+encodeURIComponent(c[d]))}});return b.length>0?this.options.prefix+b.join("/"):""},deserializeHash:function(c){var b={};if(!c||c==""){return b}c=c.substr(this.options.prefix.length);c.split("/").each(function(e){var d=e.split("-",2);if(d.length>1){b[d[0]]=decodeURIComponent(e.substr(d[0].length+1))}else{b[e]=""}});return b},updateParams:function(b){var d=Object.clone(this.state);Object.each(this.newValues,function(f,e){d[e]=f}.bind(this));var c=this.options.delimiter+this.serializeHash(d);if(b==undefined||!b){this.updateHash(c)}return c},set:function(b,c){this.newValues[b]=c;var d=this.updateParams(true);this.fireEvent("newHash",d);if(d==this.lastUrl){this.same=true}else{this.same=false}},updateState:function(b){this.parent(b);if(this.lastUrl!=b){this.lastUrl=b;this.fireEvent("change",b)}}});window.addEvent("domready",function(){Locale.use("lv-LV");var d=new Fx.Scroll(window);var c=new Popup({});$$("a").each(function(j){if(j.get("href")=="#wrap"){j.addEvent("click",function(){d.toTop();return false})}});var b=function(j){c.showText(Locale.get("Error.Error"),Locale.get("Error.Error simple text").substitute({status:j.status}))};var i=new CarList({el:document.id("objects"),params:[{name:Locale.get("Object.Year"),value:"year"},{name:Locale.get("Object.Engine"),value:"engine"},{name:Locale.get("Object.Gearbox"),value:"gearbox"},{name:Locale.get("Object.Mileage"),value:"mileage"},{name:Locale.get("Object.Tehpassport"),value:"tehpassport"},{name:Locale.get("Object.Car type"),value:"car_type"},{name:Locale.get("Object.Place"),value:"place"},{name:Locale.get("Object.Price"),value:"price"}],lang:{"no value":"-",next:Locale.get("Object.Next"),none:Locale.get("Object.None"),months:Locale.get("Object.Months"),month:Locale.get("Object.Month"),"one month":Locale.get("Object.Less the month"),gears:Locale.get("Object.gears")},onNext:function(j){i.loadingNext();h.send("objects",{url:"/next/"+j+(e.lastUrl==""?"/s":e.lastUrl)+".json"})}});var f={objects_count:0};var e=new UrlManager({blank_page:"/design/html/blank.html",variables:["m","y","c","f","g","k","t","o","l","p"],prefix:"/s/",onChange:function(j){window.clearTimeout(f.objects_count);h.cancel("objects_count");g.deactiveCount();i.rebild();i.diactiveButton();i.loading();d.toTop();h.send("objects",{url:""+(j==""?"/s":j)+".json"})},onNewHash:function(j){window.clearTimeout(f.objects_count);h.cancel("objects_count");g.loading();f.objects_count=function(){h.send("objects_count",{url:"/c"+(j==""?"/s":j)+".json"})}.delay(1000)}});var g=new Filter({SU:e,button:Locale.get("Filter.Submit button"),button_loading:Locale.get("Filter.Submit loading"),onFilter:function(){e.updateParams()}.bind(this)});var h=new Request.Queue({requests:{filter:new Request.JSON({url:"/search/params.json",method:"get",noCache:true,link:"cancel",onFailure:b,onSuccess:function(j){g.draw({mark:{name:Locale.get("Filter.Models"),lang:{All:Locale.get("Filter.All")},value:j.mark["value"],type:j.mark["type"],url:j.mark["url"]},year:{name:Locale.get("Filter.Year"),value:j.year["value"],type:j.year["type"],url:j.year["url"]},engine:{name:Locale.get("Filter.Engine"),value:j.engine["value"],type:j.engine["type"],url:j.engine["url"]},engine_type:{name:Locale.get("Filter.Engine type"),value:j.engine_type["value"],type:j.engine_type["type"],url:j.engine_type["url"]},gear_type:{name:Locale.get("Filter.Gear type"),value:j.gear_type["value"],type:j.gear_type["type"],url:j.gear_type["url"]},mileage:{name:Locale.get("Filter.Mileage"),value:j.mileage["value"],type:j.mileage["type"],url:j.mileage["url"]},tehpassport:{name:Locale.get("Filter.Tehpassport"),value:j.tehpassport["value"],type:j.tehpassport["type"],url:j.tehpassport["url"]},car_type:{name:Locale.get("Filter.Car type"),value:j.car_type["value"],type:j.car_type["type"],url:j.car_type["url"]},place:{name:Locale.get("Filter.Place"),value:j.place["value"],type:j.place["type"],url:j.place["url"]},price:{name:Locale.get("Filter.Price")+" Ls",value:j.price["value"],type:j.price["type"],url:j.price["url"]}});e.start()}}),objects_count:new Request.JSON({method:"get",noCache:true,onFailure:b,onSuccess:function(j){g.stopLoading();if(j.error){g.updateCount(0);g.deactiveCount()}else{g.updateCount(j.t);if(e.same){g.deactiveCount()}}}}),objects:new Request.JSON({method:"get",noCache:true,onFailure:b,onSuccess:function(j){i.stopLoading();if(j.error){}else{if(j.auto){i.addObjects(j.auto);if(j.total>12){i.activateNext(j.total-12)}else{i.diactiveButton()}}}}})}});h.send("filter");(function(){if(Browser.ie6){c.showText(Locale.get("Error.Browser error"),Locale.get("Error.Browser error text"))}})()});