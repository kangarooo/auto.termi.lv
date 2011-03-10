// MooTools: the javascript framework.
// Load this file's selection again by visiting: http://mootools.net/more/ec09d264185c9e4c30e05dcc4a998d77
// Or build this file again with packager using: packager build More/Date.Extras More/Number.Format More/String.Extras More/URI More/Fx.Reveal More/Fx.Scroll More/Slider More/Request.JSONP More/Request.Queue More/Spinner More/Locale
/*
---
copyrights:
  - [MooTools](http://mootools.net)

licenses:
  - [MIT License](http://mootools.net/license.txt)
...
*/
MooTools.More={version:"1.3.1.1",build:"0292a3af1eea242b817fecf9daa127417d10d4ce"};(function(){var b=function(c){return c!=null;};var a=Object.prototype.hasOwnProperty;
Object.extend({getFromPath:function(e,f){if(typeof f=="string"){f=f.split(".");}for(var d=0,c=f.length;d<c;d++){if(a.call(e,f[d])){e=e[f[d]];}else{return null;
}}return e;},cleanValues:function(c,e){e=e||b;for(var d in c){if(!e(c[d])){delete c[d];}}return c;},erase:function(c,d){if(a.call(c,d)){delete c[d];}return c;
},run:function(d){var c=Array.slice(arguments,1);for(var e in d){if(d[e].apply){d[e].apply(d,c);}}return d;}});}).call(this);(function(){var b=null,a={},d={};
var c=function(f){if(instanceOf(f,e.Set)){return f;}else{return a[f];}};var e=this.Locale={define:function(f,j,h,i){var g;if(instanceOf(f,e.Set)){g=f.name;
if(g){a[g]=f;}}else{g=f;if(!a[g]){a[g]=new e.Set(g);}f=a[g];}if(j){f.define(j,h,i);}if(!b){b=f;}return f;},use:function(f){f=c(f);if(f){b=f;this.fireEvent("change",f);
}return this;},getCurrent:function(){return b;},get:function(g,f){return(b)?b.get(g,f):"";},inherit:function(f,g,h){f=c(f);if(f){f.inherit(g,h);}return this;
},list:function(){return Object.keys(a);}};Object.append(e,new Events);e.Set=new Class({sets:{},inherits:{locales:[],sets:{}},initialize:function(f){this.name=f||"";
},define:function(i,g,h){var f=this.sets[i];if(!f){f={};}if(g){if(typeOf(g)=="object"){f=Object.merge(f,g);}else{f[g]=h;}}this.sets[i]=f;return this;},get:function(r,j,q){var p=Object.getFromPath(this.sets,r);
if(p!=null){var m=typeOf(p);if(m=="function"){p=p.apply(null,Array.from(j));}else{if(m=="object"){p=Object.clone(p);}}return p;}var h=r.indexOf("."),o=h<0?r:r.substr(0,h),k=(this.inherits.sets[o]||[]).combine(this.inherits.locales).include("en-US");
if(!q){q=[];}for(var g=0,f=k.length;g<f;g++){if(q.contains(k[g])){continue;}q.include(k[g]);var n=a[k[g]];if(!n){continue;}p=n.get(r,j,q);if(p!=null){return p;
}}return"";},inherit:function(g,h){g=Array.from(g);if(h&&!this.inherits.sets[h]){this.inherits.sets[h]=[];}var f=g.length;while(f--){(h?this.inherits.sets[h]:this.inherits.locales).unshift(g[f]);
}return this;}});}).call(this);Locale.define("en-US","Date",{months:["January","February","March","April","May","June","July","August","September","October","November","December"],months_abbr:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],days:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],days_abbr:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],dateOrder:["month","date","year"],shortDate:"%m/%d/%Y",shortTime:"%I:%M%p",AM:"AM",PM:"PM",firstDayOfWeek:0,ordinal:function(a){return(a>3&&a<21)?"th":["th","st","nd","rd","th"][Math.min(a%10,4)];
},lessThanMinuteAgo:"less than a minute ago",minuteAgo:"about a minute ago",minutesAgo:"{delta} minutes ago",hourAgo:"about an hour ago",hoursAgo:"about {delta} hours ago",dayAgo:"1 day ago",daysAgo:"{delta} days ago",weekAgo:"1 week ago",weeksAgo:"{delta} weeks ago",monthAgo:"1 month ago",monthsAgo:"{delta} months ago",yearAgo:"1 year ago",yearsAgo:"{delta} years ago",lessThanMinuteUntil:"less than a minute from now",minuteUntil:"about a minute from now",minutesUntil:"{delta} minutes from now",hourUntil:"about an hour from now",hoursUntil:"about {delta} hours from now",dayUntil:"1 day from now",daysUntil:"{delta} days from now",weekUntil:"1 week from now",weeksUntil:"{delta} weeks from now",monthUntil:"1 month from now",monthsUntil:"{delta} months from now",yearUntil:"1 year from now",yearsUntil:"{delta} years from now"});
(function(){var a=this.Date;var f=a.Methods={ms:"Milliseconds",year:"FullYear",min:"Minutes",mo:"Month",sec:"Seconds",hr:"Hours"};["Date","Day","FullYear","Hours","Milliseconds","Minutes","Month","Seconds","Time","TimezoneOffset","Week","Timezone","GMTOffset","DayOfYear","LastMonth","LastDayOfMonth","UTCDate","UTCDay","UTCFullYear","AMPM","Ordinal","UTCHours","UTCMilliseconds","UTCMinutes","UTCMonth","UTCSeconds","UTCMilliseconds"].each(function(t){a.Methods[t.toLowerCase()]=t;
});var p=function(v,u,t){if(u==1){return v;}return v<Math.pow(10,u-1)?(t||"0")+p(v,u-1,t):v;};a.implement({set:function(v,t){v=v.toLowerCase();var u=f[v]&&"set"+f[v];
if(u&&this[u]){this[u](t);}return this;}.overloadSetter(),get:function(u){u=u.toLowerCase();var t=f[u]&&"get"+f[u];if(t&&this[t]){return this[t]();}return null;
}.overloadGetter(),clone:function(){return new a(this.get("time"));},increment:function(t,v){t=t||"day";v=v!=null?v:1;switch(t){case"year":return this.increment("month",v*12);
case"month":var u=this.get("date");this.set("date",1).set("mo",this.get("mo")+v);return this.set("date",u.min(this.get("lastdayofmonth")));case"week":return this.increment("day",v*7);
case"day":return this.set("date",this.get("date")+v);}if(!a.units[t]){throw new Error(t+" is not a supported interval");}return this.set("time",this.get("time")+v*a.units[t]());
},decrement:function(t,u){return this.increment(t,-1*(u!=null?u:1));},isLeapYear:function(){return a.isLeapYear(this.get("year"));},clearTime:function(){return this.set({hr:0,min:0,sec:0,ms:0});
},diff:function(u,t){if(typeOf(u)=="string"){u=a.parse(u);}return((u-this)/a.units[t||"day"](3,3)).round();},getLastDayOfMonth:function(){return a.daysInMonth(this.get("mo"),this.get("year"));
},getDayOfYear:function(){return(a.UTC(this.get("year"),this.get("mo"),this.get("date")+1)-a.UTC(this.get("year"),0,1))/a.units.day();},setDay:function(u,t){if(t==null){t=a.getMsg("firstDayOfWeek");
if(t===""){t=1;}}u=(7+a.parseDay(u,true)-t)%7;var v=(7+this.get("day")-t)%7;return this.increment("day",u-v);},getWeek:function(w){if(w==null){w=a.getMsg("firstDayOfWeek");
if(w===""){w=1;}}var y=this,v=(7+y.get("day")-w)%7,u=0,x;if(w==1){var z=y.get("month"),t=y.get("date")-v;if(z==11&&t>28){return 1;}if(z==0&&t<-2){y=new a(y).decrement("day",v);
v=0;}x=new a(y.get("year"),0,1).get("day")||7;if(x>4){u=-7;}}else{x=new a(y.get("year"),0,1).get("day");}u+=y.get("dayofyear");u+=6-v;u+=(7+x-w)%7;return(u/7);
},getOrdinal:function(t){return a.getMsg("ordinal",t||this.get("date"));},getTimezone:function(){return this.toString().replace(/^.*? ([A-Z]{3}).[0-9]{4}.*$/,"$1").replace(/^.*?\(([A-Z])[a-z]+ ([A-Z])[a-z]+ ([A-Z])[a-z]+\)$/,"$1$2$3");
},getGMTOffset:function(){var t=this.get("timezoneOffset");return((t>0)?"-":"+")+p((t.abs()/60).floor(),2)+p(t%60,2);},setAMPM:function(t){t=t.toUpperCase();
var u=this.get("hr");if(u>11&&t=="AM"){return this.decrement("hour",12);}else{if(u<12&&t=="PM"){return this.increment("hour",12);}}return this;},getAMPM:function(){return(this.get("hr")<12)?"AM":"PM";
},parse:function(t){this.set("time",a.parse(t));return this;},isValid:function(t){return !isNaN((t||this).valueOf());},format:function(u){if(!this.isValid()){return"invalid date";
}if(!u){u="%x %X";}var t=u.toLowerCase();if(s[t]){return s[t](this);}u=g[t]||u;var v=this;return u.replace(/%([a-z%])/gi,function(x,w){switch(w){case"a":return a.getMsg("days_abbr")[v.get("day")];
case"A":return a.getMsg("days")[v.get("day")];case"b":return a.getMsg("months_abbr")[v.get("month")];case"B":return a.getMsg("months")[v.get("month")];
case"c":return v.format("%a %b %d %H:%M:%S %Y");case"d":return p(v.get("date"),2);case"e":return p(v.get("date"),2," ");case"H":return p(v.get("hr"),2);
case"I":return p((v.get("hr")%12)||12,2);case"j":return p(v.get("dayofyear"),3);case"k":return p(v.get("hr"),2," ");case"l":return p((v.get("hr")%12)||12,2," ");
case"L":return p(v.get("ms"),3);case"m":return p((v.get("mo")+1),2);case"M":return p(v.get("min"),2);case"o":return v.get("ordinal");case"p":return a.getMsg(v.get("ampm"));
case"s":return Math.round(v/1000);case"S":return p(v.get("seconds"),2);case"T":return v.format("%H:%M:%S");case"U":return p(v.get("week"),2);case"w":return v.get("day");
case"x":return v.format(a.getMsg("shortDate"));case"X":return v.format(a.getMsg("shortTime"));case"y":return v.get("year").toString().substr(2);case"Y":return v.get("year");
case"z":return v.get("GMTOffset");case"Z":return v.get("Timezone");}return w;});},toISOString:function(){return this.format("iso8601");}}).alias({toJSON:"toISOString",compare:"diff",strftime:"format"});
var g={db:"%Y-%m-%d %H:%M:%S",compact:"%Y%m%dT%H%M%S","short":"%d %b %H:%M","long":"%B %d, %Y %H:%M"};var k=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],h=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
var s={rfc822:function(t){return k[t.get("day")]+t.format(", %d ")+h[t.get("month")]+t.format(" %Y %H:%M:%S %Z");},rfc2822:function(t){return k[t.get("day")]+t.format(", %d ")+h[t.get("month")]+t.format(" %Y %H:%M:%S %z");
},iso8601:function(t){return(t.getUTCFullYear()+"-"+p(t.getUTCMonth()+1,2)+"-"+p(t.getUTCDate(),2)+"T"+p(t.getUTCHours(),2)+":"+p(t.getUTCMinutes(),2)+":"+p(t.getUTCSeconds(),2)+"."+p(t.getUTCMilliseconds(),3)+"Z");
}};var c=[],n=a.parse;var r=function(w,y,v){var u=-1,x=a.getMsg(w+"s");switch(typeOf(y)){case"object":u=x[y.get(w)];break;case"number":u=x[y];if(!u){throw new Error("Invalid "+w+" index: "+y);
}break;case"string":var t=x.filter(function(z){return this.test(z);},new RegExp("^"+y,"i"));if(!t.length){throw new Error("Invalid "+w+" string");}if(t.length>1){throw new Error("Ambiguous "+w);
}u=t[0];}return(v)?x.indexOf(u):u;};var i=1900,o=70;a.extend({getMsg:function(u,t){return Locale.get("Date."+u,t);},units:{ms:Function.from(1),second:Function.from(1000),minute:Function.from(60000),hour:Function.from(3600000),day:Function.from(86400000),week:Function.from(608400000),month:function(u,t){var v=new a;
return a.daysInMonth(u!=null?u:v.get("mo"),t!=null?t:v.get("year"))*86400000;},year:function(t){t=t||new a().get("year");return a.isLeapYear(t)?31622400000:31536000000;
}},daysInMonth:function(u,t){return[31,a.isLeapYear(t)?29:28,31,30,31,30,31,31,30,31,30,31][u];},isLeapYear:function(t){return((t%4===0)&&(t%100!==0))||(t%400===0);
},parse:function(w){var v=typeOf(w);if(v=="number"){return new a(w);}if(v!="string"){return w;}w=w.clean();if(!w.length){return null;}var u;c.some(function(x){var t=x.re.exec(w);
return(t)?(u=x.handler(t)):false;});if(!(u&&u.isValid())){u=new a(n(w));if(!(u&&u.isValid())){u=new a(w.toInt());}}return u;},parseDay:function(t,u){return r("day",t,u);
},parseMonth:function(u,t){return r("month",u,t);},parseUTC:function(u){var t=new a(u);var v=a.UTC(t.get("year"),t.get("mo"),t.get("date"),t.get("hr"),t.get("min"),t.get("sec"),t.get("ms"));
return new a(v);},orderIndex:function(t){return a.getMsg("dateOrder").indexOf(t)+1;},defineFormat:function(t,u){g[t]=u;return this;},defineFormats:function(t){for(var u in t){a.defineFormat(u,t[u]);
}return this;},defineParser:function(t){c.push((t.re&&t.handler)?t:l(t));return this;},defineParsers:function(){Array.flatten(arguments).each(a.defineParser);
return this;},define2DigitYearStart:function(t){o=t%100;i=t-o;return this;}});var d=function(t){return new RegExp("(?:"+a.getMsg(t).map(function(u){return u.substr(0,3);
}).join("|")+")[a-z]*");};var m=function(t){switch(t){case"T":return"%H:%M:%S";case"x":return((a.orderIndex("month")==1)?"%m[-./]%d":"%d[-./]%m")+"([-./]%y)?";
case"X":return"%H([.:]%M)?([.:]%S([.:]%s)?)? ?%p? ?%z?";}return null;};var j={d:/[0-2]?[0-9]|3[01]/,H:/[01]?[0-9]|2[0-3]/,I:/0?[1-9]|1[0-2]/,M:/[0-5]?\d/,s:/\d+/,o:/[a-z]*/,p:/[ap]\.?m\.?/,y:/\d{2}|\d{4}/,Y:/\d{4}/,z:/Z|[+-]\d{2}(?::?\d{2})?/};
j.m=j.I;j.S=j.M;var e;var b=function(t){e=t;j.a=j.A=d("days");j.b=j.B=d("months");c.each(function(v,u){if(v.format){c[u]=l(v.format);}});};var l=function(v){if(!e){return{format:v};
}var t=[];var u=(v.source||v).replace(/%([a-z])/gi,function(x,w){return m(w)||x;}).replace(/\((?!\?)/g,"(?:").replace(/ (?!\?|\*)/g,",? ").replace(/%([a-z%])/gi,function(x,w){var y=j[w];
if(!y){return w;}t.push(w);return"("+y.source+")";}).replace(/\[a-z\]/gi,"[a-z\\u00c0-\\uffff;&]");return{format:v,re:new RegExp("^"+u+"$","i"),handler:function(z){z=z.slice(1).associate(t);
var w=new a().clearTime(),y=z.y||z.Y;if(y!=null){q.call(w,"y",y);}if("d" in z){q.call(w,"d",1);}if("m" in z||z.b||z.B){q.call(w,"m",1);}for(var x in z){q.call(w,x,z[x]);
}return w;}};};var q=function(t,u){if(!u){return this;}switch(t){case"a":case"A":return this.set("day",a.parseDay(u,true));case"b":case"B":return this.set("mo",a.parseMonth(u,true));
case"d":return this.set("date",u);case"H":case"I":return this.set("hr",u);case"m":return this.set("mo",u-1);case"M":return this.set("min",u);case"p":return this.set("ampm",u.replace(/\./g,""));
case"S":return this.set("sec",u);case"s":return this.set("ms",("0."+u)*1000);case"w":return this.set("day",u);case"Y":return this.set("year",u);case"y":u=+u;
if(u<100){u+=i+(u<o?100:0);}return this.set("year",u);case"z":if(u=="Z"){u="+00";}var v=u.match(/([+-])(\d{2}):?(\d{2})?/);v=(v[1]+"1")*(v[2]*60+(+v[3]||0))+this.getTimezoneOffset();
return this.set("time",this-v*60000);}return this;};a.defineParsers("%Y([-./]%m([-./]%d((T| )%X)?)?)?","%Y%m%d(T%H(%M%S?)?)?","%x( %X)?","%d%o( %b( %Y)?)?( %X)?","%b( %d%o)?( %Y)?( %X)?","%Y %b( %d%o( %X)?)?","%o %b %d %X %z %Y","%T","%H:%M( ?%p)?");
Locale.addEvent("change",function(t){if(Locale.get("Date")){b(t);}}).fireEvent("change",Locale.getCurrent());}).call(this);Date.implement({timeDiffInWords:function(a){return Date.distanceOfTimeInWords(this,a||new Date);
},timeDiff:function(f,c){if(f==null){f=new Date;}var h=((f-this)/1000).floor();var e=[],a=[60,60,24,365,0],d=["s","m","h","d","y"],g,b;for(var i=0;i<a.length;
i++){if(i&&!h){break;}g=h;if((b=a[i])){g=(h%b);h=(h/b).floor();}e.unshift(g+(d[i]||""));}return e.join(c||":");}}).extend({distanceOfTimeInWords:function(b,a){return Date.getTimePhrase(((a-b)/1000).toInt());
},getTimePhrase:function(f){var d=(f<0)?"Until":"Ago";if(f<0){f*=-1;}var b={minute:60,hour:60,day:24,week:7,month:52/12,year:12,eon:Infinity};var e="lessThanMinute";
for(var c in b){var a=b[c];if(f<1.5*a){if(f>0.75*a){e=c;}break;}f/=a;e=c+"s";}f=f.round();return Date.getMsg(e+d,f).substitute({delta:f});}}).defineParsers({re:/^(?:tod|tom|yes)/i,handler:function(a){var b=new Date().clearTime();
switch(a[0]){case"tom":return b.increment();case"yes":return b.decrement();default:return b;}}},{re:/^(next|last) ([a-z]+)$/i,handler:function(e){var f=new Date().clearTime();
var b=f.getDay();var c=Date.parseDay(e[2],true);var a=c-b;if(c<=b){a+=7;}if(e[1]=="last"){a-=7;}return f.set("date",f.getDate()+a);}}).alias("timeAgoInWords","timeDiffInWords");
Locale.define("en-US","Number",{decimal:".",group:",",currency:{prefix:"$ "}});Number.implement({format:function(q){var n=this;if(!q){q={};}var a=function(i){if(q[i]!=null){return q[i];
}return Locale.get("Number."+i);};var f=n<0,h=a("decimal"),k=a("precision"),o=a("group"),c=a("decimals");if(f){var e=Locale.get("Number.negative")||{};
if(e.prefix==null&&e.suffix==null){e.prefix="-";}Object.each(e,function(r,i){q[i]=(i=="prefix"||i=="suffix")?(a(i)+r):r;});n=-n;}var l=a("prefix"),p=a("suffix");
if(c!==""&&c>=0&&c<=20){n=n.toFixed(c);}if(k>=1&&k<=21){n=(+n).toPrecision(k);}n+="";var m;if(a("scientific")===false&&n.indexOf("e")>-1){var j=n.split("e"),b=+j[1];
n=j[0].replace(".","");if(b<0){b=-b-1;m=j[0].indexOf(".");if(m>-1){b-=m-1;}while(b--){n="0"+n;}n="0."+n;}else{m=j[0].lastIndexOf(".");if(m>-1){b-=j[0].length-m-1;
}while(b--){n+="0";}}}if(h!="."){n=n.replace(".",h);}if(o){m=n.lastIndexOf(h);m=(m>-1)?m:n.length;var d=n.substring(m),g=m;while(g--){if((m-g-1)%3==0&&g!=(m-1)){d=o+d;
}d=n.charAt(g)+d;}n=d;}if(l){n=l+n;}if(p){n+=p;}return n;},formatCurrency:function(){var a=Locale.get("Number.currency")||{};if(a.scientific==null){a.scientific=false;
}if(a.decimals==null){a.decimals=2;}return this.format(a);},formatPercentage:function(){var a=Locale.get("Number.percentage")||{};if(a.suffix==null){a.suffix="%";
}if(a.decimals==null){a.decimals=2;}return this.format(a);}});(function(){var c={a:/[àáâãäåăą]/g,A:/[ÀÁÂÃÄÅĂĄ]/g,c:/[ćčç]/g,C:/[ĆČÇ]/g,d:/[ďđ]/g,D:/[ĎÐ]/g,e:/[èéêëěę]/g,E:/[ÈÉÊËĚĘ]/g,g:/[ğ]/g,G:/[Ğ]/g,i:/[ìíîï]/g,I:/[ÌÍÎÏ]/g,l:/[ĺľł]/g,L:/[ĹĽŁ]/g,n:/[ñňń]/g,N:/[ÑŇŃ]/g,o:/[òóôõöøő]/g,O:/[ÒÓÔÕÖØ]/g,r:/[řŕ]/g,R:/[ŘŔ]/g,s:/[ššş]/g,S:/[ŠŞŚ]/g,t:/[ťţ]/g,T:/[ŤŢ]/g,ue:/[ü]/g,UE:/[Ü]/g,u:/[ùúûůµ]/g,U:/[ÙÚÛŮ]/g,y:/[ÿý]/g,Y:/[ŸÝ]/g,z:/[žźż]/g,Z:/[ŽŹŻ]/g,th:/[þ]/g,TH:/[Þ]/g,dh:/[ð]/g,DH:/[Ð]/g,ss:/[ß]/g,oe:/[œ]/g,OE:/[Œ]/g,ae:/[æ]/g,AE:/[Æ]/g},b={" ":/[\xa0\u2002\u2003\u2009]/g,"*":/[\xb7]/g,"'":/[\u2018\u2019]/g,'"':/[\u201c\u201d]/g,"...":/[\u2026]/g,"-":/[\u2013]/g,"&raquo;":/[\uFFFD]/g};
var a=function(f,h){var e=f,g;for(g in h){e=e.replace(h[g],g);}return e;};var d=function(e,g){e=e||"";var h=g?"<"+e+"(?!\\w)[^>]*>([\\s\\S]*?)</"+e+"(?!\\w)>":"</?"+e+"([^>]+)?>",f=new RegExp(h,"gi");
return f;};String.implement({standardize:function(){return a(this,c);},repeat:function(e){return new Array(e+1).join(this);},pad:function(e,h,g){if(this.length>=e){return this;
}var f=(h==null?" ":""+h).repeat(e-this.length).substr(0,e-this.length);if(!g||g=="right"){return this+f;}if(g=="left"){return f+this;}return f.substr(0,(f.length/2).floor())+this+f.substr(0,(f.length/2).ceil());
},getTags:function(e,f){return this.match(d(e,f))||[];},stripTags:function(e,f){return this.replace(d(e,f),"");},tidy:function(){return a(this,b);},truncate:function(e,f,i){var h=this;
if(f==null&&arguments.length==1){f="…";}if(h.length>e){h=h.substring(0,e);if(i){var g=h.lastIndexOf(i);if(g!=-1){h=h.substr(0,g);}}if(f){h+=f;}}return h;
}});}).call(this);String.implement({parseQueryString:function(d,a){if(d==null){d=true;}if(a==null){a=true;}var c=this.split(/[&;]/),b={};if(!c.length){return b;
}c.each(function(i){var e=i.indexOf("=")+1,g=e?i.substr(e):"",f=e?i.substr(0,e-1).match(/([^\]\[]+|(\B)(?=\]))/g):[i],h=b;if(!f){return;}if(a){g=decodeURIComponent(g);
}f.each(function(k,j){if(d){k=decodeURIComponent(k);}var l=h[k];if(j<f.length-1){h=h[k]=l||{};}else{if(typeOf(l)=="array"){l.push(g);}else{h[k]=l!=null?[l,g]:g;
}}});});return b;},cleanQueryString:function(a){return this.split("&").filter(function(e){var b=e.indexOf("="),c=b<0?"":e.substr(0,b),d=e.substr(b+1);return a?a.call(null,c,d):(d||d===0);
}).join("&");}});(function(){var b=function(){return this.get("value");};var a=this.URI=new Class({Implements:Options,options:{},regex:/^(?:(\w+):)?(?:\/\/(?:(?:([^:@\/]*):?([^:@\/]*))?@)?([^:\/?#]*)(?::(\d*))?)?(\.\.?$|(?:[^?#\/]*\/)*)([^?#]*)(?:\?([^#]*))?(?:#(.*))?/,parts:["scheme","user","password","host","port","directory","file","query","fragment"],schemes:{http:80,https:443,ftp:21,rtsp:554,mms:1755,file:0},initialize:function(d,c){this.setOptions(c);
var e=this.options.base||a.base;if(!d){d=e;}if(d&&d.parsed){this.parsed=Object.clone(d.parsed);}else{this.set("value",d.href||d.toString(),e?new a(e):false);
}},parse:function(e,d){var c=e.match(this.regex);if(!c){return false;}c.shift();return this.merge(c.associate(this.parts),d);},merge:function(d,c){if((!d||!d.scheme)&&(!c||!c.scheme)){return false;
}if(c){this.parts.every(function(e){if(d[e]){return false;}d[e]=c[e]||"";return true;});}d.port=d.port||this.schemes[d.scheme.toLowerCase()];d.directory=d.directory?this.parseDirectory(d.directory,c?c.directory:""):"/";
return d;},parseDirectory:function(d,e){d=(d.substr(0,1)=="/"?"":(e||"/"))+d;if(!d.test(a.regs.directoryDot)){return d;}var c=[];d.replace(a.regs.endSlash,"").split("/").each(function(f){if(f==".."&&c.length>0){c.pop();
}else{if(f!="."){c.push(f);}}});return c.join("/")+"/";},combine:function(c){return c.value||c.scheme+"://"+(c.user?c.user+(c.password?":"+c.password:"")+"@":"")+(c.host||"")+(c.port&&c.port!=this.schemes[c.scheme]?":"+c.port:"")+(c.directory||"/")+(c.file||"")+(c.query?"?"+c.query:"")+(c.fragment?"#"+c.fragment:"");
},set:function(d,f,e){if(d=="value"){var c=f.match(a.regs.scheme);if(c){c=c[1];}if(c&&this.schemes[c.toLowerCase()]==null){this.parsed={scheme:c,value:f};
}else{this.parsed=this.parse(f,(e||this).parsed)||(c?{scheme:c,value:f}:{value:f});}}else{if(d=="data"){this.setData(f);}else{this.parsed[d]=f;}}return this;
},get:function(c,d){switch(c){case"value":return this.combine(this.parsed,d?d.parsed:false);case"data":return this.getData();}return this.parsed[c]||"";
},go:function(){document.location.href=this.toString();},toURI:function(){return this;},getData:function(e,d){var c=this.get(d||"query");if(!(c||c===0)){return e?null:{};
}var f=c.parseQueryString();return e?f[e]:f;},setData:function(c,f,d){if(typeof c=="string"){var e=this.getData();e[arguments[0]]=arguments[1];c=e;}else{if(f){c=Object.merge(this.getData(),c);
}}return this.set(d||"query",Object.toQueryString(c));},clearData:function(c){return this.set(c||"query","");},toString:b,valueOf:b});a.regs={endSlash:/\/$/,scheme:/^(\w+):/,directoryDot:/\.\/|\.$/};
a.base=new a(Array.from(document.getElements("base[href]",true)).getLast(),{base:document.location});String.implement({toURI:function(c){return new a(this,c);
}});}).call(this);Element.implement({isDisplayed:function(){return this.getStyle("display")!="none";},isVisible:function(){var a=this.offsetWidth,b=this.offsetHeight;
return(a==0&&b==0)?false:(a>0&&b>0)?true:this.style.display!="none";},toggle:function(){return this[this.isDisplayed()?"hide":"show"]();},hide:function(){var b;
try{b=this.getStyle("display");}catch(a){}if(b=="none"){return this;}return this.store("element:_originalDisplay",b||"").setStyle("display","none");},show:function(a){if(!a&&this.isDisplayed()){return this;
}a=a||this.retrieve("element:_originalDisplay")||"block";return this.setStyle("display",(a=="none")?"block":a);},swapClass:function(a,b){return this.removeClass(a).addClass(b);
}});Document.implement({clearSelection:function(){if(window.getSelection){var a=window.getSelection();if(a&&a.removeAllRanges){a.removeAllRanges();}}else{if(document.selection&&document.selection.empty){try{document.selection.empty();
}catch(b){}}}}});(function(){var b=function(e,d){var f=[];Object.each(d,function(g){Object.each(g,function(h){e.each(function(i){f.push(i+"-"+h+(i=="border"?"-width":""));
});});});return f;};var c=function(f,e){var d=0;Object.each(e,function(h,g){if(g.test(f)){d=d+h.toInt();}});return d;};var a=function(d){return !!(!d||d.offsetHeight||d.offsetWidth);
};Element.implement({measure:function(h){if(a(this)){return h.call(this);}var g=this.getParent(),e=[];while(!a(g)&&g!=document.body){e.push(g.expose());
g=g.getParent();}var f=this.expose(),d=h.call(this);f();e.each(function(i){i();});return d;},expose:function(){if(this.getStyle("display")!="none"){return function(){};
}var d=this.style.cssText;this.setStyles({display:"block",position:"absolute",visibility:"hidden"});return function(){this.style.cssText=d;}.bind(this);
},getDimensions:function(d){d=Object.merge({computeSize:false},d);var i={x:0,y:0};var h=function(j,e){return(e.computeSize)?j.getComputedSize(e):j.getSize();
};var f=this.getParent("body");if(f&&this.getStyle("display")=="none"){i=this.measure(function(){return h(this,d);});}else{if(f){try{i=h(this,d);}catch(g){}}}return Object.append(i,(i.x||i.x===0)?{width:i.x,height:i.y}:{x:i.width,y:i.height});
},getComputedSize:function(d){d=Object.merge({styles:["padding","border"],planes:{height:["top","bottom"],width:["left","right"]},mode:"both"},d);var g={},e={width:0,height:0},f;
if(d.mode=="vertical"){delete e.width;delete d.planes.width;}else{if(d.mode=="horizontal"){delete e.height;delete d.planes.height;}}b(d.styles,d.planes).each(function(h){g[h]=this.getStyle(h).toInt();
},this);Object.each(d.planes,function(i,h){var k=h.capitalize(),j=this.getStyle(h);if(j=="auto"&&!f){f=this.getDimensions();}j=g[h]=(j=="auto")?f[h]:j.toInt();
e["total"+k]=j;i.each(function(m){var l=c(m,g);e["computed"+m.capitalize()]=l;e["total"+k]+=l;});},this);return Object.append(e,g);}});}).call(this);(function(){var a=function(d){var b=d.options.hideInputs;
if(window.OverText){var c=[null];OverText.each(function(e){c.include("."+e.options.labelClass);});if(c){b+=c.join(", ");}}return(b)?d.element.getElements(b):null;
};Fx.Reveal=new Class({Extends:Fx.Morph,options:{link:"cancel",styles:["padding","border","margin"],transitionOpacity:!Browser.ie6,mode:"vertical",display:function(){return this.element.get("tag")!="tr"?"block":"table-row";
},opacity:1,hideInputs:Browser.ie?"select, input, textarea, object, embed":null},dissolve:function(){if(!this.hiding&&!this.showing){if(this.element.getStyle("display")!="none"){this.hiding=true;
this.showing=false;this.hidden=true;this.cssText=this.element.style.cssText;var d=this.element.getComputedSize({styles:this.options.styles,mode:this.options.mode});
if(this.options.transitionOpacity){d.opacity=this.options.opacity;}var c={};Object.each(d,function(f,e){c[e]=[f,0];});this.element.setStyles({display:Function.from(this.options.display).call(this),overflow:"hidden"});
var b=a(this);if(b){b.setStyle("visibility","hidden");}this.$chain.unshift(function(){if(this.hidden){this.hiding=false;this.element.style.cssText=this.cssText;
this.element.setStyle("display","none");if(b){b.setStyle("visibility","visible");}}this.fireEvent("hide",this.element);this.callChain();}.bind(this));this.start(c);
}else{this.callChain.delay(10,this);this.fireEvent("complete",this.element);this.fireEvent("hide",this.element);}}else{if(this.options.link=="chain"){this.chain(this.dissolve.bind(this));
}else{if(this.options.link=="cancel"&&!this.hiding){this.cancel();this.dissolve();}}}return this;},reveal:function(){if(!this.showing&&!this.hiding){if(this.element.getStyle("display")=="none"){this.hiding=false;
this.showing=true;this.hidden=false;this.cssText=this.element.style.cssText;var d;this.element.measure(function(){d=this.element.getComputedSize({styles:this.options.styles,mode:this.options.mode});
}.bind(this));if(this.options.heightOverride!=null){d.height=this.options.heightOverride.toInt();}if(this.options.widthOverride!=null){d.width=this.options.widthOverride.toInt();
}if(this.options.transitionOpacity){this.element.setStyle("opacity",0);d.opacity=this.options.opacity;}var c={height:0,display:Function.from(this.options.display).call(this)};
Object.each(d,function(f,e){c[e]=0;});c.overflow="hidden";this.element.setStyles(c);var b=a(this);if(b){b.setStyle("visibility","hidden");}this.$chain.unshift(function(){this.element.style.cssText=this.cssText;
this.element.setStyle("display",Function.from(this.options.display).call(this));if(!this.hidden){this.showing=false;}if(b){b.setStyle("visibility","visible");
}this.callChain();this.fireEvent("show",this.element);}.bind(this));this.start(d);}else{this.callChain();this.fireEvent("complete",this.element);this.fireEvent("show",this.element);
}}else{if(this.options.link=="chain"){this.chain(this.reveal.bind(this));}else{if(this.options.link=="cancel"&&!this.showing){this.cancel();this.reveal();
}}}return this;},toggle:function(){if(this.element.getStyle("display")=="none"){this.reveal();}else{this.dissolve();}return this;},cancel:function(){this.parent.apply(this,arguments);
if(this.cssText!=null){this.element.style.cssText=this.cssText;}this.hiding=false;this.showing=false;return this;}});Element.Properties.reveal={set:function(b){this.get("reveal").cancel().setOptions(b);
return this;},get:function(){var b=this.retrieve("reveal");if(!b){b=new Fx.Reveal(this);this.store("reveal",b);}return b;}};Element.Properties.dissolve=Element.Properties.reveal;
Element.implement({reveal:function(b){this.get("reveal").setOptions(b).reveal();return this;},dissolve:function(b){this.get("reveal").setOptions(b).dissolve();
return this;},nix:function(b){var c=Array.link(arguments,{destroy:Type.isBoolean,options:Type.isObject});this.get("reveal").setOptions(b).dissolve().chain(function(){this[c.destroy?"destroy":"dispose"]();
}.bind(this));return this;},wink:function(){var c=Array.link(arguments,{duration:Type.isNumber,options:Type.isObject});var b=this.get("reveal").setOptions(c.options);
b.reveal().chain(function(){(function(){b.dissolve();}).delay(c.duration||2000);});}});}).call(this);(function(){Fx.Scroll=new Class({Extends:Fx,options:{offset:{x:0,y:0},wheelStops:true},initialize:function(c,b){this.element=this.subject=document.id(c);
this.parent(b);if(typeOf(this.element)!="element"){this.element=document.id(this.element.getDocument().body);}if(this.options.wheelStops){var d=this.element,e=this.cancel.pass(false,this);
this.addEvent("start",function(){d.addEvent("mousewheel",e);},true);this.addEvent("complete",function(){d.removeEvent("mousewheel",e);},true);}},set:function(){var b=Array.flatten(arguments);
if(Browser.firefox){b=[Math.round(b[0]),Math.round(b[1])];}this.element.scrollTo(b[0],b[1]);},compute:function(d,c,b){return[0,1].map(function(e){return Fx.compute(d[e],c[e],b);
});},start:function(c,d){if(!this.check(c,d)){return this;}var b=this.element.getScroll();return this.parent([b.x,b.y],[c,d]);},calculateScroll:function(g,f){var d=this.element,b=d.getScrollSize(),h=d.getScroll(),j=d.getSize(),c=this.options.offset,i={x:g,y:f};
for(var e in i){if(!i[e]&&i[e]!==0){i[e]=h[e];}if(typeOf(i[e])!="number"){i[e]=b[e]-j[e];}i[e]+=c[e];}return[i.x,i.y];},toTop:function(){return this.start.apply(this,this.calculateScroll(false,0));
},toLeft:function(){return this.start.apply(this,this.calculateScroll(0,false));},toRight:function(){return this.start.apply(this,this.calculateScroll("right",false));
},toBottom:function(){return this.start.apply(this,this.calculateScroll(false,"bottom"));},toElement:function(d,e){e=e?Array.from(e):["x","y"];var c=a(this.element)?{x:0,y:0}:this.element.getScroll();
var b=Object.map(document.id(d).getPosition(this.element),function(g,f){return e.contains(f)?g+c[f]:false;});return this.start.apply(this,this.calculateScroll(b.x,b.y));
},toElementEdge:function(d,g,e){g=g?Array.from(g):["x","y"];d=document.id(d);var i={},f=d.getPosition(this.element),j=d.getSize(),h=this.element.getScroll(),b=this.element.getSize(),c={x:f.x+j.x,y:f.y+j.y};
["x","y"].each(function(k){if(g.contains(k)){if(c[k]>h[k]+b[k]){i[k]=c[k]-b[k];}if(f[k]<h[k]){i[k]=f[k];}}if(i[k]==null){i[k]=h[k];}if(e&&e[k]){i[k]=i[k]+e[k];
}},this);if(i.x!=h.x||i.y!=h.y){this.start(i.x,i.y);}return this;},toElementCenter:function(e,f,h){f=f?Array.from(f):["x","y"];e=document.id(e);var i={},c=e.getPosition(this.element),d=e.getSize(),b=this.element.getScroll(),g=this.element.getSize();
["x","y"].each(function(j){if(f.contains(j)){i[j]=c[j]-(g[j]-d[j])/2;}if(i[j]==null){i[j]=b[j];}if(h&&h[j]){i[j]=i[j]+h[j];}},this);if(i.x!=b.x||i.y!=b.y){this.start(i.x,i.y);
}return this;}});function a(b){return(/^(?:body|html)$/i).test(b.tagName);}}).call(this);Class.Mutators.Binds=function(a){if(!this.prototype.initialize){this.implement("initialize",function(){});
}return a;};Class.Mutators.initialize=function(a){return function(){Array.from(this.Binds).each(function(b){var c=this[b];if(c){this[b]=c.bind(this);}},this);
return a.apply(this,arguments);};};var Drag=new Class({Implements:[Events,Options],options:{snap:6,unit:"px",grid:false,style:true,limit:false,handle:false,invert:false,preventDefault:false,stopPropagation:false,modifiers:{x:"left",y:"top"}},initialize:function(){var b=Array.link(arguments,{options:Type.isObject,element:function(c){return c!=null;
}});this.element=document.id(b.element);this.document=this.element.getDocument();this.setOptions(b.options||{});var a=typeOf(this.options.handle);this.handles=((a=="array"||a=="collection")?$$(this.options.handle):document.id(this.options.handle))||this.element;
this.mouse={now:{},pos:{}};this.value={start:{},now:{}};this.selection=(Browser.ie)?"selectstart":"mousedown";if(Browser.ie&&!Drag.ondragstartFixed){document.ondragstart=Function.from(false);
Drag.ondragstartFixed=true;}this.bound={start:this.start.bind(this),check:this.check.bind(this),drag:this.drag.bind(this),stop:this.stop.bind(this),cancel:this.cancel.bind(this),eventStop:Function.from(false)};
this.attach();},attach:function(){this.handles.addEvent("mousedown",this.bound.start);return this;},detach:function(){this.handles.removeEvent("mousedown",this.bound.start);
return this;},start:function(a){var k=this.options;if(a.rightClick){return;}if(k.preventDefault){a.preventDefault();}if(k.stopPropagation){a.stopPropagation();
}this.mouse.start=a.page;this.fireEvent("beforeStart",this.element);var c=k.limit;this.limit={x:[],y:[]};var j=this.element.getStyles("left","right","top","bottom");
this._invert={x:k.modifiers.x=="left"&&j.left=="auto"&&!isNaN(j.right.toInt())&&(k.modifiers.x="right"),y:k.modifiers.y=="top"&&j.top=="auto"&&!isNaN(j.bottom.toInt())&&(k.modifiers.y="bottom")};
var e,g;for(e in k.modifiers){if(!k.modifiers[e]){continue;}var b=this.element.getStyle(k.modifiers[e]);if(b&&!b.match(/px$/)){if(!g){g=this.element.getCoordinates(this.element.getOffsetParent());
}b=g[k.modifiers[e]];}if(k.style){this.value.now[e]=(b||0).toInt();}else{this.value.now[e]=this.element[k.modifiers[e]];}if(k.invert){this.value.now[e]*=-1;
}if(this._invert[e]){this.value.now[e]*=-1;}this.mouse.pos[e]=a.page[e]-this.value.now[e];if(c&&c[e]){var d=2;while(d--){var f=c[e][d];if(f||f===0){this.limit[e][d]=(typeof f=="function")?f():f;
}}}}if(typeOf(this.options.grid)=="number"){this.options.grid={x:this.options.grid,y:this.options.grid};}var h={mousemove:this.bound.check,mouseup:this.bound.cancel};
h[this.selection]=this.bound.eventStop;this.document.addEvents(h);},check:function(a){if(this.options.preventDefault){a.preventDefault();}var b=Math.round(Math.sqrt(Math.pow(a.page.x-this.mouse.start.x,2)+Math.pow(a.page.y-this.mouse.start.y,2)));
if(b>this.options.snap){this.cancel();this.document.addEvents({mousemove:this.bound.drag,mouseup:this.bound.stop});this.fireEvent("start",[this.element,a]).fireEvent("snap",this.element);
}},drag:function(b){var a=this.options;if(a.preventDefault){b.preventDefault();}this.mouse.now=b.page;for(var c in a.modifiers){if(!a.modifiers[c]){continue;
}this.value.now[c]=this.mouse.now[c]-this.mouse.pos[c];if(a.invert){this.value.now[c]*=-1;}if(this._invert[c]){this.value.now[c]*=-1;}if(a.limit&&this.limit[c]){if((this.limit[c][1]||this.limit[c][1]===0)&&(this.value.now[c]>this.limit[c][1])){this.value.now[c]=this.limit[c][1];
}else{if((this.limit[c][0]||this.limit[c][0]===0)&&(this.value.now[c]<this.limit[c][0])){this.value.now[c]=this.limit[c][0];}}}if(a.grid[c]){this.value.now[c]-=((this.value.now[c]-(this.limit[c][0]||0))%a.grid[c]);
}if(a.style){this.element.setStyle(a.modifiers[c],this.value.now[c]+a.unit);}else{this.element[a.modifiers[c]]=this.value.now[c];}}this.fireEvent("drag",[this.element,b]);
},cancel:function(a){this.document.removeEvents({mousemove:this.bound.check,mouseup:this.bound.cancel});if(a){this.document.removeEvent(this.selection,this.bound.eventStop);
this.fireEvent("cancel",this.element);}},stop:function(b){var a={mousemove:this.bound.drag,mouseup:this.bound.stop};a[this.selection]=this.bound.eventStop;
this.document.removeEvents(a);if(b){this.fireEvent("complete",[this.element,b]);}}});Element.implement({makeResizable:function(a){var b=new Drag(this,Object.merge({modifiers:{x:"width",y:"height"}},a));
this.store("resizer",b);return b.addEvent("drag",function(){this.fireEvent("resize",b);}.bind(this));}});var Slider=new Class({Implements:[Events,Options],Binds:["clickedElement","draggedKnob","scrolledElement"],options:{onTick:function(a){this.setKnobPosition(a);
},initialStep:0,snap:false,offset:0,range:false,wheel:false,steps:100,mode:"horizontal"},initialize:function(f,a,e){this.setOptions(e);e=this.options;this.element=document.id(f);
a=this.knob=document.id(a);this.previousChange=this.previousEnd=this.step=-1;var b={},d={x:false,y:false},g;switch(e.mode){case"vertical":this.axis="y";
this.property="top";this.offset="offsetHeight";break;case"horizontal":this.axis="x";this.property="left";this.offset="offsetWidth";}this.setSliderDimensions();
this.setRange(e.range);if(a.getStyle("position")=="static"){a.setStyle("position","relative");}a.setStyle(this.property,-e.offset);d[this.axis]=this.property;
b[this.axis]=[-e.offset,this.full-e.offset];var c={snap:0,limit:b,modifiers:d,onDrag:this.draggedKnob,onStart:this.draggedKnob,onBeforeStart:(function(){this.isDragging=true;
}).bind(this),onCancel:function(){this.isDragging=false;}.bind(this),onComplete:function(){this.isDragging=false;this.draggedKnob();this.end();}.bind(this)};
if(e.snap){this.setSnap(c);}this.drag=new Drag(a,c);this.attach();if(e.initialStep!=null){this.set(e.initialStep);}},attach:function(){this.element.addEvent("mousedown",this.clickedElement);
if(this.options.wheel){this.element.addEvent("mousewheel",this.scrolledElement);}this.drag.attach();return this;},detach:function(){this.element.removeEvent("mousedown",this.clickedElement).element.removeEvent("mousewheel",this.scrolledElement);
this.drag.detach();return this;},autosize:function(){this.setSliderDimensions().setKnobPosition(this.toPosition(this.step));this.drag.options.limit[this.axis]=[-this.options.offset,this.full-this.options.offset];
if(this.options.snap){this.setSnap();}return this;},setSnap:function(a){if(!a){a=this.drag.options;}a.grid=Math.ceil(this.stepWidth);a.limit[this.axis][1]=this.full;
return this;},setKnobPosition:function(a){if(this.options.snap){a=this.toPosition(this.step);}this.knob.setStyle(this.property,a);return this;},setSliderDimensions:function(){this.full=this.element.measure(function(){this.half=this.knob[this.offset]/2;
return this.element[this.offset]-this.knob[this.offset]+(this.options.offset*2);}.bind(this));return this;},set:function(a){if(!((this.range>0)^(a<this.min))){a=this.min;
}if(!((this.range>0)^(a>this.max))){a=this.max;}this.step=Math.round(a);return this.checkStep().fireEvent("tick",this.toPosition(this.step)).end();},setRange:function(a,b){this.min=Array.pick([a[0],0]);
this.max=Array.pick([a[1],this.options.steps]);this.range=this.max-this.min;this.steps=this.options.steps||this.full;this.stepSize=Math.abs(this.range)/this.steps;
this.stepWidth=this.stepSize*this.full/Math.abs(this.range);if(a){this.set(Array.pick([b,this.step]).floor(this.min).max(this.max));}return this;},clickedElement:function(c){if(this.isDragging||c.target==this.knob){return;
}var b=this.range<0?-1:1,a=c.page[this.axis]-this.element.getPosition()[this.axis]-this.half;a=a.limit(-this.options.offset,this.full-this.options.offset);
this.step=Math.round(this.min+b*this.toStep(a));this.checkStep().fireEvent("tick",a).end();},scrolledElement:function(a){var b=(this.options.mode=="horizontal")?(a.wheel<0):(a.wheel>0);
this.set(this.step+(b?-1:1)*this.stepSize);a.stop();},draggedKnob:function(){var b=this.range<0?-1:1,a=this.drag.value.now[this.axis];a=a.limit(-this.options.offset,this.full-this.options.offset);
this.step=Math.round(this.min+b*this.toStep(a));this.checkStep();},checkStep:function(){var a=this.step;if(this.previousChange!=a){this.previousChange=a;
this.fireEvent("change",a);}return this;},end:function(){var a=this.step;if(this.previousEnd!==a){this.previousEnd=a;this.fireEvent("complete",a+"");}return this;
},toStep:function(a){var b=(a+this.options.offset)*this.stepSize/this.full*this.steps;return this.options.steps?Math.round(b-=b%this.stepSize):b;},toPosition:function(a){return(this.full*Math.abs(this.min-a))/(this.steps*this.stepSize)-this.options.offset;
}});Request.JSONP=new Class({Implements:[Chain,Events,Options],options:{onRequest:function(a){if(this.options.log&&window.console&&console.log){console.log("JSONP retrieving script with url:"+a);
}},onError:function(a){if(this.options.log&&window.console&&console.warn){console.warn("JSONP "+a+" will fail in Internet Explorer, which enforces a 2083 bytes length limit on URIs");
}},url:"",callbackKey:"callback",injectScript:document.head,data:"",link:"ignore",timeout:0,log:false},initialize:function(a){this.setOptions(a);},send:function(c){if(!Request.prototype.check.call(this,c)){return this;
}this.running=true;var d=typeOf(c);if(d=="string"||d=="element"){c={data:c};}c=Object.merge(this.options,c||{});var e=c.data;switch(typeOf(e)){case"element":e=document.id(e).toQueryString();
break;case"object":case"hash":e=Object.toQueryString(e);}var b=this.index=Request.JSONP.counter++;var f=c.url+(c.url.test("\\?")?"&":"?")+(c.callbackKey)+"=Request.JSONP.request_map.request_"+b+(e?"&"+e:"");
if(f.length>2083){this.fireEvent("error",f);}Request.JSONP.request_map["request_"+b]=function(){this.success(arguments,b);}.bind(this);var a=this.getScript(f).inject(c.injectScript);
this.fireEvent("request",[f,a]);if(c.timeout){this.timeout.delay(c.timeout,this);}return this;},getScript:function(a){if(!this.script){this.script=new Element("script[type=text/javascript]",{async:true,src:a});
}return this.script;},success:function(b,a){if(!this.running){return false;}this.clear().fireEvent("complete",b).fireEvent("success",b).callChain();},cancel:function(){if(this.running){this.clear().fireEvent("cancel");
}return this;},isRunning:function(){return !!this.running;},clear:function(){this.running=false;if(this.script){this.script.destroy();this.script=null;
}return this;},timeout:function(){if(this.running){this.running=false;this.fireEvent("timeout",[this.script.get("src"),this.script]).fireEvent("failure").cancel();
}return this;}});Request.JSONP.counter=0;Request.JSONP.request_map={};Request.Queue=new Class({Implements:[Options,Events],Binds:["attach","request","complete","cancel","success","failure","exception"],options:{stopOnFailure:true,autoAdvance:true,concurrent:1,requests:{}},initialize:function(a){var b;
if(a){b=a.requests;delete a.requests;}this.setOptions(a);this.requests={};this.queue=[];this.reqBinders={};if(b){this.addRequests(b);}},addRequest:function(a,b){this.requests[a]=b;
this.attach(a,b);return this;},addRequests:function(a){Object.each(a,function(c,b){this.addRequest(b,c);},this);return this;},getName:function(a){return Object.keyOf(this.requests,a);
},attach:function(a,b){if(b._groupSend){return this;}["request","complete","cancel","success","failure","exception"].each(function(c){if(!this.reqBinders[a]){this.reqBinders[a]={};
}this.reqBinders[a][c]=function(){this["on"+c.capitalize()].apply(this,[a,b].append(arguments));}.bind(this);b.addEvent(c,this.reqBinders[a][c]);},this);
b._groupSend=b.send;b.send=function(c){this.send(a,c);return b;}.bind(this);return this;},removeRequest:function(b){var a=typeOf(b)=="object"?this.getName(b):b;
if(!a&&typeOf(a)!="string"){return this;}b=this.requests[a];if(!b){return this;}["request","complete","cancel","success","failure","exception"].each(function(c){b.removeEvent(c,this.reqBinders[a][c]);
},this);b.send=b._groupSend;delete b._groupSend;return this;},getRunning:function(){return Object.filter(this.requests,function(a){return a.running;});
},isRunning:function(){return !!(Object.keys(this.getRunning()).length);},send:function(b,a){var c=function(){this.requests[b]._groupSend(a);this.queue.erase(c);
}.bind(this);c.name=b;if(Object.keys(this.getRunning()).length>=this.options.concurrent||(this.error&&this.options.stopOnFailure)){this.queue.push(c);}else{c();
}return this;},hasNext:function(a){return(!a)?!!this.queue.length:!!this.queue.filter(function(b){return b.name==a;}).length;},resume:function(){this.error=false;
(this.options.concurrent-Object.keys(this.getRunning()).length).times(this.runNext,this);return this;},runNext:function(a){if(!this.queue.length){return this;
}if(!a){this.queue[0]();}else{var b;this.queue.each(function(c){if(!b&&c.name==a){b=true;c();}});}return this;},runAll:function(){this.queue.each(function(a){a();
});return this;},clear:function(a){if(!a){this.queue.empty();}else{this.queue=this.queue.map(function(b){if(b.name!=a){return b;}else{return false;}}).filter(function(b){return b;
});}return this;},cancel:function(a){this.requests[a].cancel();return this;},onRequest:function(){this.fireEvent("request",arguments);},onComplete:function(){this.fireEvent("complete",arguments);
if(!this.queue.length){this.fireEvent("end");}},onCancel:function(){if(this.options.autoAdvance&&!this.error){this.runNext();}this.fireEvent("cancel",arguments);
},onSuccess:function(){if(this.options.autoAdvance&&!this.error){this.runNext();}this.fireEvent("success",arguments);},onFailure:function(){this.error=true;
if(!this.options.stopOnFailure&&this.options.autoAdvance){this.runNext();}this.fireEvent("failure",arguments);},onException:function(){this.error=true;
if(!this.options.stopOnFailure&&this.options.autoAdvance){this.runNext();}this.fireEvent("exception",arguments);}});Class.refactor=function(b,a){Object.each(a,function(e,d){var c=b.prototype[d];
if(c&&c.$origin){c=c.$origin;}b.implement(d,(typeof e=="function")?function(){var f=this.previous;this.previous=c||function(){};var g=e.apply(this,arguments);
this.previous=f;return g;}:e);});return b;};(function(){var a=Element.prototype.position;Element.implement({position:function(g){if(g&&(g.x!=null||g.y!=null)){return a?a.apply(this,arguments):this;
}Object.each(g||{},function(u,t){if(u==null){delete g[t];}});g=Object.merge({relativeTo:document.body,position:{x:"center",y:"center"},offset:{x:0,y:0}},g);
var r={x:0,y:0},e=false;var c=this.measure(function(){return document.id(this.getOffsetParent());});if(c&&c!=this.getDocument().body){r=c.measure(function(){return this.getPosition();
});e=c!=document.id(g.relativeTo);g.offset.x=g.offset.x-r.x;g.offset.y=g.offset.y-r.y;}var s=function(t){if(typeOf(t)!="string"){return t;}t=t.toLowerCase();
var u={};if(t.test("left")){u.x="left";}else{if(t.test("right")){u.x="right";}else{u.x="center";}}if(t.test("upper")||t.test("top")){u.y="top";}else{if(t.test("bottom")){u.y="bottom";
}else{u.y="center";}}return u;};g.edge=s(g.edge);g.position=s(g.position);if(!g.edge){if(g.position.x=="center"&&g.position.y=="center"){g.edge={x:"center",y:"center"};
}else{g.edge={x:"left",y:"top"};}}this.setStyle("position","absolute");var f=document.id(g.relativeTo)||document.body,d=f==document.body?window.getScroll():f.getPosition(),l=d.y,h=d.x;
var n=this.getDimensions({computeSize:true,styles:["padding","border","margin"]});var j={},o=g.offset.y,q=g.offset.x,k=window.getSize();switch(g.position.x){case"left":j.x=h+q;
break;case"right":j.x=h+q+f.offsetWidth;break;default:j.x=h+((f==document.body?k.x:f.offsetWidth)/2)+q;break;}switch(g.position.y){case"top":j.y=l+o;break;
case"bottom":j.y=l+o+f.offsetHeight;break;default:j.y=l+((f==document.body?k.y:f.offsetHeight)/2)+o;break;}if(g.edge){var b={};switch(g.edge.x){case"left":b.x=0;
break;case"right":b.x=-n.x-n.computedRight-n.computedLeft;break;default:b.x=-(n.totalWidth/2);break;}switch(g.edge.y){case"top":b.y=0;break;case"bottom":b.y=-n.y-n.computedTop-n.computedBottom;
break;default:b.y=-(n.totalHeight/2);break;}j.x+=b.x;j.y+=b.y;}j={left:((j.x>=0||e||g.allowNegative)?j.x:0).toInt(),top:((j.y>=0||e||g.allowNegative)?j.y:0).toInt()};
var i={left:"x",top:"y"};["minimum","maximum"].each(function(t){["left","top"].each(function(u){var v=g[t]?g[t][i[u]]:null;if(v!=null&&((t=="minimum")?j[u]<v:j[u]>v)){j[u]=v;
}});});if(f.getStyle("position")=="fixed"||g.relFixedPosition){var m=window.getScroll();j.top+=m.y;j.left+=m.x;}if(g.ignoreScroll){var p=f.getScroll();
j.top-=p.y;j.left-=p.x;}if(g.ignoreMargins){j.left+=(g.edge.x=="right"?n["margin-right"]:g.edge.x=="center"?-n["margin-left"]+((n["margin-right"]+n["margin-left"])/2):-n["margin-left"]);
j.top+=(g.edge.y=="bottom"?n["margin-bottom"]:g.edge.y=="center"?-n["margin-top"]+((n["margin-bottom"]+n["margin-top"])/2):-n["margin-top"]);}j.left=Math.ceil(j.left);
j.top=Math.ceil(j.top);if(g.returnPos){return j;}else{this.setStyles(j);}return this;}});}).call(this);Class.Occlude=new Class({occlude:function(c,b){b=document.id(b||this.element);
var a=b.retrieve(c||this.property);if(a&&!this.occluded){return(this.occluded=a);}this.occluded=false;b.store(c||this.property,this);return this.occluded;
}});var IframeShim=new Class({Implements:[Options,Events,Class.Occlude],options:{className:"iframeShim",src:'javascript:false;document.write("");',display:false,zIndex:null,margin:0,offset:{x:0,y:0},browsers:(Browser.ie6||(Browser.firefox&&Browser.version<3&&Browser.Platform.mac))},property:"IframeShim",initialize:function(b,a){this.element=document.id(b);
if(this.occlude()){return this.occluded;}this.setOptions(a);this.makeShim();return this;},makeShim:function(){if(this.options.browsers){var c=this.element.getStyle("zIndex").toInt();
if(!c){c=1;var b=this.element.getStyle("position");if(b=="static"||!b){this.element.setStyle("position","relative");}this.element.setStyle("zIndex",c);
}c=((this.options.zIndex!=null||this.options.zIndex===0)&&c>this.options.zIndex)?this.options.zIndex:c-1;if(c<0){c=1;}this.shim=new Element("iframe",{src:this.options.src,scrolling:"no",frameborder:0,styles:{zIndex:c,position:"absolute",border:"none",filter:"progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)"},"class":this.options.className}).store("IframeShim",this);
var a=(function(){this.shim.inject(this.element,"after");this[this.options.display?"show":"hide"]();this.fireEvent("inject");}).bind(this);if(!IframeShim.ready){window.addEvent("load",a);
}else{a();}}else{this.position=this.hide=this.show=this.dispose=Function.from(this);}},position:function(){if(!IframeShim.ready||!this.shim){return this;
}var a=this.element.measure(function(){return this.getSize();});if(this.options.margin!=undefined){a.x=a.x-(this.options.margin*2);a.y=a.y-(this.options.margin*2);
this.options.offset.x+=this.options.margin;this.options.offset.y+=this.options.margin;}this.shim.set({width:a.x,height:a.y}).position({relativeTo:this.element,offset:this.options.offset});
return this;},hide:function(){if(this.shim){this.shim.setStyle("display","none");}return this;},show:function(){if(this.shim){this.shim.setStyle("display","block");
}return this.position();},dispose:function(){if(this.shim){this.shim.dispose();}return this;},destroy:function(){if(this.shim){this.shim.destroy();}return this;
}});window.addEvent("load",function(){IframeShim.ready=true;});var Mask=new Class({Implements:[Options,Events],Binds:["position"],options:{style:{},"class":"mask",maskMargins:false,useIframeShim:true,iframeShimOptions:{}},initialize:function(b,a){this.target=document.id(b)||document.id(document.body);
this.target.store("mask",this);this.setOptions(a);this.render();this.inject();},render:function(){this.element=new Element("div",{"class":this.options["class"],id:this.options.id||"mask-"+String.uniqueID(),styles:Object.merge({},this.options.style,{display:"none"}),events:{click:function(a){this.fireEvent("click",a);
if(this.options.hideOnClick){this.hide();}}.bind(this)}});this.hidden=true;},toElement:function(){return this.element;},inject:function(b,a){a=a||(this.options.inject?this.options.inject.where:"")||this.target==document.body?"inside":"after";
b=b||(this.options.inject&&this.options.inject.target)||this.target;this.element.inject(b,a);if(this.options.useIframeShim){this.shim=new IframeShim(this.element,this.options.iframeShimOptions);
this.addEvents({show:this.shim.show.bind(this.shim),hide:this.shim.hide.bind(this.shim),destroy:this.shim.destroy.bind(this.shim)});}},position:function(){this.resize(this.options.width,this.options.height);
this.element.position({relativeTo:this.target,position:"topLeft",ignoreMargins:!this.options.maskMargins,ignoreScroll:this.target==document.body});return this;
},resize:function(a,e){var b={styles:["padding","border"]};if(this.options.maskMargins){b.styles.push("margin");}var d=this.target.getComputedSize(b);if(this.target==document.body){this.element.setStyles({width:0,height:0});
var c=window.getScrollSize();if(d.totalHeight<c.y){d.totalHeight=c.y;}if(d.totalWidth<c.x){d.totalWidth=c.x;}}this.element.setStyles({width:Array.pick([a,d.totalWidth,d.x]),height:Array.pick([e,d.totalHeight,d.y])});
return this;},show:function(){if(!this.hidden){return this;}window.addEvent("resize",this.position);this.position();this.showMask.apply(this,arguments);
return this;},showMask:function(){this.element.setStyle("display","block");this.hidden=false;this.fireEvent("show");},hide:function(){if(this.hidden){return this;
}window.removeEvent("resize",this.position);this.hideMask.apply(this,arguments);if(this.options.destroyOnHide){return this.destroy();}return this;},hideMask:function(){this.element.setStyle("display","none");
this.hidden=true;this.fireEvent("hide");},toggle:function(){this[this.hidden?"show":"hide"]();},destroy:function(){this.hide();this.element.destroy();this.fireEvent("destroy");
this.target.eliminate("mask");}});Element.Properties.mask={set:function(b){var a=this.retrieve("mask");if(a){a.destroy();}return this.eliminate("mask").store("mask:options",b);
},get:function(){var a=this.retrieve("mask");if(!a){a=new Mask(this,this.retrieve("mask:options"));this.store("mask",a);}return a;}};Element.implement({mask:function(a){if(a){this.set("mask",a);
}this.get("mask").show();return this;},unmask:function(){this.get("mask").hide();return this;}});var Spinner=new Class({Extends:Mask,Implements:Chain,options:{"class":"spinner",containerPosition:{},content:{"class":"spinner-content"},messageContainer:{"class":"spinner-msg"},img:{"class":"spinner-img"},fxOptions:{link:"chain"}},initialize:function(c,a){this.target=document.id(c)||document.id(document.body);
this.target.store("spinner",this);this.setOptions(a);this.render();this.inject();var b=function(){this.active=false;}.bind(this);this.addEvents({hide:b,show:b});
},render:function(){this.parent();this.element.set("id",this.options.id||"spinner-"+String.uniqueID());this.content=document.id(this.options.content)||new Element("div",this.options.content);
this.content.inject(this.element);if(this.options.message){this.msg=document.id(this.options.message)||new Element("p",this.options.messageContainer).appendText(this.options.message);
this.msg.inject(this.content);}if(this.options.img){this.img=document.id(this.options.img)||new Element("div",this.options.img);this.img.inject(this.content);
}this.element.set("tween",this.options.fxOptions);},show:function(a){if(this.active){return this.chain(this.show.bind(this));}if(!this.hidden){this.callChain.delay(20,this);
return this;}this.active=true;return this.parent(a);},showMask:function(a){var b=function(){this.content.position(Object.merge({relativeTo:this.element},this.options.containerPosition));
}.bind(this);if(a){this.parent();b();}else{if(!this.options.style.opacity){this.options.style.opacity=this.element.getStyle("opacity").toFloat();}this.element.setStyles({display:"block",opacity:0}).tween("opacity",this.options.style.opacity);
b();this.hidden=false;this.fireEvent("show");this.callChain();}},hide:function(a){if(this.active){return this.chain(this.hide.bind(this));}if(this.hidden){this.callChain.delay(20,this);
return this;}this.active=true;return this.parent(a);},hideMask:function(a){if(a){return this.parent();}this.element.tween("opacity",0).get("tween").chain(function(){this.element.setStyle("display","none");
this.hidden=true;this.fireEvent("hide");this.callChain();}.bind(this));},destroy:function(){this.content.destroy();this.parent();this.target.eliminate("spinner");
}});Request=Class.refactor(Request,{options:{useSpinner:false,spinnerOptions:{},spinnerTarget:false},initialize:function(a){this._send=this.send;this.send=function(b){var c=this.getSpinner();
if(c){c.chain(this._send.pass(b,this)).show();}else{this._send(b);}return this;};this.previous(a);},getSpinner:function(){if(!this.spinner){var b=document.id(this.options.spinnerTarget)||document.id(this.options.update);
if(this.options.useSpinner&&b){b.set("spinner",this.options.spinnerOptions);var a=this.spinner=b.get("spinner");["complete","exception","cancel"].each(function(c){this.addEvent(c,a.hide.bind(a));
},this);}}return this.spinner;}});Element.Properties.spinner={set:function(a){var b=this.retrieve("spinner");if(b){b.destroy();}return this.eliminate("spinner").store("spinner:options",a);
},get:function(){var a=this.retrieve("spinner");if(!a){a=new Spinner(this,this.retrieve("spinner:options"));this.store("spinner",a);}return a;}};Element.implement({spin:function(a){if(a){this.set("spinner",a);
}this.get("spinner").show();return this;},unspin:function(){this.get("spinner").hide();return this;}});var lang;
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
    
})();﻿/*
---
script: mooml.js
version: 1.3.0
description: Mooml is a javasctript templating engine for HTML generation, powered by Mootools.
license: MIT-style
download: http://mootools.net/forge/p/mooml
source: http://github.com/eneko/mooml
htmltags: http://www.w3schools.com/html5/html5_reference.asp

authors:
- Eneko Alonso: (http://enekoalonso.com)

credits:
- Ed Spencer: Mooml is based on Ed Spencer's Jaml (http://edspencer.github.com/jaml)
- Tim Schmidt: contributed with function and number argument types
- Josh Cohen: helped with node stacks for nested templates
- Vasili Sviridov: for the mixin idea

provides:
- Mooml
- Mooml.Template
- Mooml.Templates

requires:
- core/1.3.0:Class
- core/1.3.0:Elements
- core/1.3.0:Array

...
*/

var Mooml = {

	version: '1.2.4',
	templates: {},
	engine: { callstack: [], tags: {} },

	htmlTags: [
		"a", "abbr", "address", "area", "article", "aside", "audio",
		"b", "base", "bdo", "blockquote", "body", "br", "button",
		"canvas", "caption", "cite", "col", "colgroup", "command",
		"datalist", "dd", "del", "details", "dialog", "dfn", "div", "dl", "dt",
		"em", "embed",
		"fieldset", "figure",
		"footer", "form",
		"h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "hgroup", "hr", "html",
		"i", "iframe", "img", "input", "ins",
		"keygen", "kbd",
		"label", "legend", "li", "link",
		"map", "mark", "menu", "meta", "meter",
		"nav", "noscript",
		"object", "ol", "optgroup", "option", "output",
		"p", "param", "pre", "progress",
		"q",
		"rp", "rt", "ruby",
		"samp", "script", "section", "select", "small", "source", "span", "strong", "style", "sub", "sup",
		"table", "tbody", "td", "textarea", "tfoot", "th", "thead", "time", "title", "tr",
		"ul",
		"var", "video",
		// Deprecated in HTML 5
		"acronym", "applet", "basefont", "big", "center", "dir", "font", "frame", "frameset", "noframes", "s", "strike", "tt", "u", "xmp"
		// Not supported tags
		// "code"
	],

	/**
	 * Evaluates a Mooml template supporting nested templates
	 * @param {Mooml.Template} template The template function
	 * @param {Object|Array} data Optional data object or array of objects
	 */
	evaluate: function(template, data) {
		var elements = [];
		this.engine.callstack.push(template);

		if (template.prepared == false) {
			template.code = this.prepare(template.code);
			template.prepared = true;
		}

		Array.from([data, {}].pick()).each(function(params, index) {
			template.code(params, index);
			elements.append(template.nodes.filter(function(node) {
				return node.getParent() === null;
			}));
			template.nodes.empty();
		});

		this.engine.callstack.pop();
		if (this.engine.callstack.length) {
			if (template.elementRefs) {
				Array.extend(this.engine.callstack.getLast().elementRefs, template.elementRefs);
			}
		}

		return (elements.length > 1) ? elements : elements.shift();
	},

	/**
	 * Initializes the engine generating a javascript function for every html
	 * tag that can be used on the template.
	 * Template tag functions can receive options for the element, child 
	 * elements and html code as parameters.
	 * initialize can be called by the user in case of adding additional tags.
	 */
	initEngine: function() {
		this.htmlTags.each(function(tag) {
			Mooml.engine.tags[tag] = function() {
				var template = Mooml.engine.callstack.getLast();
				var el = new Element(tag);

				for (var i=0, l=arguments.length; i<l; i++) {
					var argument = arguments[i];
					if (typeOf(argument) === "function") argument = argument();
					switch (typeOf(argument)) {
						case "array":
						case "element":
						case "collection": {
							el.adopt(argument);
							break;
						}
						case "string": {
							if (template) {
								el.getChildren().each(function(child) {
									template.nodes.erase(child);
								});
							}
							el.set('html', el.get('html') + argument);
							break;
						}
						case "number": {
							el.appendText(argument.toString());
							break;
						}
						case "object": {
							if (i === 0) {
								if (template && template.elementRefs && argument.id) {
									template.elementRefs[argument.id] = el;
								}
								el.set(argument);
							} else if (typeOf(argument.toElement) == "function") {
								el.adopt(argument.toElement());
							}
							break;
						}
					}
				}

				if (template) template.nodes.push(el);
				return el;
			}
		});

		window.addEvent('domready', function() {
			document.getElements('script[type=text/mooml]').each(function(template) {
				Mooml.register(template.get('name'), new Function(['data', 'index'], template.get('text')));
			});
		});
	},

	/**
	 * Prepares a template function so it can be called directly without using eval
	 * @param {Function} code The template function to prepare
	 */
	prepare: function(code) {
		var codeStr = code.toString();
		var args = codeStr.match(/\(([a-zA-Z0-9,\s]*)\)/)[1].replace(/\s/g, '').split(',');
		var body = codeStr.match(/\{([\s\S]*)\}/m)[1];
		for (var i=this.htmlTags.length; --i >= 0; ) {
			body = body.replace(new RegExp('(^|[^\\w.])(' + this.htmlTags[i] + ')([\\s]*(?=\\())', 'g'), '$1Mooml.engine.tags.$2$3')
		}
		return new Function(args, body);
	}

};

/**
 * Template class for Mooml templates
 */
Mooml.Template = new Class({
	nodes: [],

	initialize: function(name, code, options) {
		if (options && options.elementRefs && typeof(options.elementRefs) === "object") {
			this.elementRefs = options.elementRefs;
		}
		this.name = name;
		this.code = code;
		this.prepared = false;
	},

	render: function(data) {
		return Mooml.evaluate(this, data);
	}
});


/**
 * Mixin for implemenation in Mootools classes: Implements: [Mooml.Templates, Options, ...]
 */
Mooml.Templates = new Class({
	templates: {},

	/**
	 * Registers a new template for later use or returns an existing template with that name
	 * @param {String} name The name of the template
	 * @param {Function} code The code function of the template
	 */
	registerTemplate: function(name, code, options) {
		var template = this.templates[name];
		return (template)? template : this.templates[name] = new Mooml.Template(name, code, options);
	},

	/**
	 * Evaluates a registered template or returns null if template not registered
	 * @param {String} name The name of the template to evaluate
	 * @param {Object|Array} data Optional data object or array of objects
	 */
	renderTemplate: function(name, data) {
		var template = this.templates[name];
		return (template)? template.render(data) : null;
	}

});


/**
 * Implement Mooml.Templates into Mooml and alias for backwards compatibility
 */
Object.append(Mooml, new Mooml.Templates());
Mooml.register = Mooml.registerTemplate;
Mooml.render = Mooml.renderTemplate;

Mooml.initEngine();
(function(){
var pluralize = function (n, one, many){
	var modulo10 = n % 10,
		modulo100 = n % 100;
	if (modulo10 == 1 && modulo100 != 11)
		return one;
	return many;
};

Locale.define('lv-LV', 'Filter', {
    'All':'Visi',
    'Models':'Modeļi',
    'Year':'Izlaiduma gads',
    'Engine':'Dzinēja tilpums',
    'Engine type':'Degviela',
    'Gear type':'Ātrumkārba',
    'Mileage':'Nobraukums',
    'Tehpassport':'Tehniskā apskate',
    'Car type':'Virsbūves tips',
    'Place':'Vieta',
    'Price':'Cena',

    'Submit button': 'Atlasīt',
    'Submit loading': 'Skaitam'
});
Locale.define('lv-LV', 'Object', {
    'Year': 'Gads',

    'Engine': 'Motors',
    'Gearbox': 'Ātrumkārba',
    'Mileage': 'Nobraukums',
    'Drive type': 'Piedziņa',
    'Tehpassport': 'Tehniskā',
    'Car type': 'Virsbūve',
    'Place': 'Vieta',
    'Color': 'Krāsa',
    'Price': 'Cena',



    'Next': function(next){
        return pluralize(next, 'Nākamais', 'Nākamie')+' '+next+' '+pluralize(next, 'rezultāts', 'rezultāti');
    },
    'Prev': function(prev){
        return pluralize(prev, 'Jaunākais', 'Jaunākie')+' '+prev+' '+pluralize(prev, 'rezultāts', 'rezultāti');
    },
    'None':'Nav',
    'Month': function(month){
        month = -1*month;
        if(month<=0)
            return 'Mazāk par mēnesi';
        return month+' '+pluralize(month, 'mēnesis', 'meneši');
    },
    'Gears': function(gear){
        return gear+' '+pluralize(gear, 'ātrums', 'ātrumi');
    }
});
Locale.define('lv-LV', 'Error', {
    'Error': 'Notikusi nenovēršama kļūda!',
    'Error simple text': 'Saņēmām <strong>{status}.</strong> kļūdu,\n\
        ja tas jums neko neizsaka, tad mēs iesakām atjaunot lapu\n\
        (nospiežot pogu atjaunot - refresh),\n\
         savādāk jūs varat novērot negaidītus rezultātus',
    'Warning': 'Šī ir pagaidu versija!',
    'Warning message': 'Pagaidu versijā var tikt novērotas kļūdas. Mes būsim ļoti pateicīgi,\n\
    ja jūs atradīsiet laiku paziņot mums par šīm kļūdām un nepilnībām. Ka arī gaidam jūsu ieteikumus.<br />\n\
    Sazināties ar mums var <a href="/feedback">šeit.</a>.',

    'Browser error': 'Pārlūka problēma!',
    'Browser error text': 'Diemžēl mums nācas secināt, ka mūsu lapa netiek\n\
     atbalstīta uz jūsu pārlūka. Lai novērst šo problēmu, mēs iesakām\n\
    sazināties ar datormeistaru.',

    'Nothing': 'Nekas netika atrasts!',
    'Nothing found': 'Pēc ievadītiem parametriem nav neviena rezultāta.<br />\n\
    Lūdzu pārbaudiet ievadītos parametrus!'
});

Locale.define('lv-LV', 'Date', {

	months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
	months_abbr: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
	days_abbr: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

	// Culture's date order: MM/DD/YYYY
	dateOrder: ['month', 'date', 'year'],
	shortDate: '%m/%d/%Y',
	shortTime: '%I:%M%p',
	AM: 'AM',
	PM: 'PM',

	// Date.Extras
	ordinal: function(dayOfMonth){
		// 1st, 2nd, 3rd, etc.
		return (dayOfMonth > 3 && dayOfMonth < 21) ? 'th' : ['th', 'st', 'nd', 'rd', 'th'][Math.min(dayOfMonth % 10, 4)];
	},

	lessThanMinuteAgo: 'pirms mazāk kā minūti',
	minuteAgo: 'pirms minūtes',
	minutesAgo: 'pirms {delta} minūtēm',
	hourAgo: 'pirms stundas',
	hoursAgo: 'pirms {delta} stundām',
	dayAgo: 'pirms 1 dienas',
	daysAgo: 'pirms {delta} dienām',
	weekAgo: 'pirms nedēļas',
	weeksAgo: 'pirms {delta} nedēļām',
	monthAgo: 'pirms mēneša',
	monthsAgo: 'pirms {delta} mēnešiem',
	yearAgo: 'pirms gada',
	yearsAgo: 'pirms {delta} gadiem',

	lessThanMinuteUntil: 'mazāk par minūti',
	minuteUntil: 'līdz minūtei',
	minutesUntil: 'līdz {delta} minūtēm',
	hourUntil: 'about an hour from now',
	hoursUntil: 'about {delta} hours from now',
	dayUntil: '1 day from now',
	daysUntil: '{delta} days from now',
	weekUntil: '1 week from now',
	weeksUntil: '{delta} weeks from now',
	monthUntil: '1 month from now',
	monthsUntil: '{delta} months from now',
	yearUntil: '1 year from now',
	yearsUntil: '{delta} years from now'

});
})();
(function(){

// Russian language pluralization rules, taken from CLDR project, http://unicode.org/cldr/
// one -> n mod 10 is 1 and n mod 100 is not 11;
// few -> n mod 10 in 2..4 and n mod 100 not in 12..14;
// many -> n mod 10 is 0 or n mod 10 in 5..9 or n mod 100 in 11..14;
// other -> everything else (example 3.14)
var pluralize = function (n, one, few, many, other){
	var modulo10 = n % 10,
		modulo100 = n % 100;

	if (modulo10 == 1 && modulo100 != 11){
		return one;
	} else if ((modulo10 == 2 || modulo10 == 3 || modulo10 == 4) && !(modulo100 == 12 || modulo100 == 13 || modulo100 == 14)){
		return few;
	} else if (modulo10 == 0 || (modulo10 == 5 || modulo10 == 6 || modulo10 == 7 || modulo10 == 8 || modulo10 == 9) || (modulo100 == 11 || modulo100 == 12 || modulo100 == 13 || modulo100 == 14)){
		return many;
	} else {
		return other;
	}
};

Locale.define('ru-LV', 'Filter', {
    'All':'Все',
    'Models':'Модели',
    'Year':'Год',
    'Engine':'Объём двигателя',
    'Engine type':'Топливо',
    'Gear type':'Коробка передач',
    'Mileage':'Пробег',
    'Tehpassport':'Тех. осмотр',
    'Car type':'Кузов',
    'Place':'Место',
    'Price':'Цена',

    'Submit button': 'Отсеять',
    'Submit loading': 'Считаем'
});
Locale.define('ru-LV', 'Object', {
    'Year': 'Год',

    'Engine': 'Двигатель',
    'Gearbox': 'Коробка',
    'Mileage': 'Пробег',
    'Drive type': 'Привод',
    'Tehpassport': 'Тех-осмотр',
    'Car type': 'Кузов',
    'Place': 'Место',
    'Color': 'Цвет',
    'Price': 'Цена',

    'Next': function(next){
        return pluralize(next, 'Следующий', 'Следующие', 'Следующие')+' '+next+' '+pluralize(next, 'результат', 'результата', 'результаты');
    },
    'Prev': function(prev){
        return pluralize(prev, 'Новый', 'Новые', 'Новые')+' '+prev+' '+pluralize(prev, 'результат', 'результата', 'результаты');
    },
    'None':'Нету',
    'Month': function(month){
        month = -1*month;
        if(month<=0)
            return 'Меньше месяца';
        return month+' '+pluralize(month, 'месяц', 'месяца', 'месяцев');
    },
    'Gears': function(gear){
        return gear+' '+pluralize(gear, 'скорость', 'скорости', 'скоростей');
    },

    'Next': function(i){
        if(i%10==1 && i%100!=11)
            return 'Следующий {total} результат'.substitute({total: i});
        if([2, 3, 4].indexOf(i%10)!=-1 && [12, 13, 14].indexOf(i%100)==-1)
            return 'Следующие {total} результата'.substitute({total: i});
        return 'Следующие {total} результаты'.substitute({total: i});
    }
});
Locale.define('ru-LV', 'Error', {
    'Error': 'Произошла ошибка!',
    'Error simple text': 'Получена <strong>{status}.</strong> ошибка,\n\
        если вам это не о чём не говорит, тогда мы советуем обновить страницу\n\
        (нажав кнопку - refresh),\n\
         в противном случае вы можете наблюдать нежданные аномалии',
    'Warning': 'Это временная версия!',
    'Warning message': 'Во временной версии могут быть ошибки. Мы будем очень рады,\n\
    если вы найдёте время сообщить нам о ошибках. Ещё мы готовы выслушать ваши советы.<br />\n\
    Наши контакты доступны <a href="/ru/feedback">на странице.</a>.',

    'Browser error': 'Проблема программы!',
    'Browser error text': 'К сожелению эта страница\n\
     не поддерживается на вашей программе. Что бы решить эту проблему,\n\
    мы советуем обратится к компьютерному специалисту.',

    'Nothing': 'Ничего не нашлось!',
    'Nothing found': 'Проверьте введённые параметры и попробуйте ещё!'
});

Locale.define('ru-LV', 'Date', {

	months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
	months_abbr: ['янв', 'февр', 'март', 'апр', 'май','июнь','июль','авг','сент','окт','нояб','дек'],
	days: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
	days_abbr: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],

	// Culture's date order: DD.MM.YYYY
	dateOrder: ['date', 'month', 'year'],
	shortDate: '%d.%m.%Y',
	shortTime: '%H:%M',
	AM: 'AM',
	PM: 'PM',

	// Date.Extras
	ordinal: '',

	lessThanMinuteAgo: 'меньше минуты назад',
	minuteAgo: 'минуту назад',
	minutesAgo: function(delta){ return '{delta} ' + pluralize(delta, 'минуту', 'минуты', 'минут') + ' назад'; },
	hourAgo: 'час назад',
	hoursAgo: function(delta){ return '{delta} ' + pluralize(delta, 'час', 'часа', 'часов') + ' назад'; },
	dayAgo: 'вчера',
	daysAgo: function(delta){ return '{delta} ' + pluralize(delta, 'день', 'дня', 'дней') + ' назад'; },
	weekAgo: 'неделю назад',
	weeksAgo: function(delta){ return '{delta} ' + pluralize(delta, 'неделя', 'недели', 'недель') + ' назад'; },
	monthAgo: 'месяц назад',
	monthsAgo: function(delta){ return '{delta} ' + pluralize(delta, 'месяц', 'месяца', 'месецев') + ' назад'; },
	yearAgo: 'год назад',
	yearsAgo: function(delta){ return '{delta} ' + pluralize(delta, 'год', 'года', 'лет') + ' назад'; },

	lessThanMinuteUntil: 'меньше чем через минуту',
	minuteUntil: 'через минуту',
	minutesUntil: function(delta){ return 'через {delta} ' + pluralize(delta, 'час', 'часа', 'часов') + ''; },
	hourUntil: 'через час',
	hoursUntil: function(delta){ return 'через {delta} ' + pluralize(delta, 'час', 'часа', 'часов') + ''; },
	dayUntil: 'завтра',
	daysUntil: function(delta){ return 'через {delta} ' + pluralize(delta, 'день', 'дня', 'дней') + ''; },
	weekUntil: 'через неделю',
	weeksUntil: function(delta){ return 'через {delta} ' + pluralize(delta, 'неделю', 'недели', 'недель') + ''; },
	monthUntil: 'через месяц',
	monthsUntil: function(delta){ return 'через {delta} ' + pluralize(delta, 'месяц', 'месяца', 'месецев') + ''; },
	yearUntil: 'через',
	yearsUntil: function(delta){ return 'через {delta} ' + pluralize(delta, 'год', 'года', 'лет') + ''; }

});
})();
(function(){
var pluralize = function (n, one, many){
	var modulo10 = n % 10,
		modulo100 = n % 100;
	if (modulo10 == 1 && modulo100 != 11)
		return one;
	return many;
};

Locale.define('lg-LG', 'Filter', {
    'All':'Vysi',
    'Models':'Modeļi',
    'Year':'Izlaiduma gods',
    'Engine':'Tylpums',
    'Engine type':'Degvīla',
    'Gear type':'Kuorba',
    'Mileage':'Nūbraukums',
    'Tehpassport':'Tehniskuo',
    'Car type':'Kuzovs',
    'Place':'Vīta',
    'Price':'Cena',

    'Submit button': 'Atlasēt',
    'Submit loading': 'Skaitom'
});
Locale.define('lg-LG', 'Object', {
    'Year': 'Gods',

    'Engine': 'Motors',
    'Gearbox': 'Kuorba',
    'Mileage': 'Nūbraukums',
    'Drive type': 'Privods',
    'Tehpassport': 'Tehniskuo',
    'Car type': 'Virsbūve',
    'Place': 'Vīta',
    'Color': 'Kruosa',
    'Price': 'Cena',



    'Next': function(next){
        return pluralize(next, 'Nuokomīs', 'Nuokomī')+' '+next+' '+pluralize(next, 'rezultats', 'rezultati');
    },
    'Prev': function(prev){
        return pluralize(prev, 'Jaunuokais', 'Jaunuokī')+' '+prev+' '+pluralize(prev, 'rezultats', 'rezultati');
    },
    'None':'Nau',
    'Month': function(month){
        month = -1*month;
        if(month<=0)
            return 'Mozuok par mien.';
        return month+' '+pluralize(month, 'mieness', 'mieneši');
    },
    'Gears': function(gear){
        return gear+' '+pluralize(gear, 'uotrums', 'uotrumi');
    }
});
Locale.define('lg-LG', 'Error', {
    'Error': 'Nūtykuse klaida!',
    'Error simple text': 'Sajēmēm <strong>{status}.</strong> klaidu,\n\
        ka itys niko jiusim napasoka, tod mas īsokam atsajaunuot sātys lopu\n\
        (spīžūt atsajaunot - refresh),\n\
         sovaižok varēs nūvārot vysaidus nagaidietus rezultatus',
    'Warning': 'Itei jer pagaidu verseja!',
    'Warning message': 'Pagaidu versejā var nūvārot klaidys. Mes bīsim vēļ laimiegoki,\n\
    ka jius atrassit laiku paziņuot mīsim par itom klaidom i napilneibom. Kai arī gaidom īteikumus.<br />\n\
    Mīsu kontakti <a href="/lg/feedback">ite.</a>.',

    'Browser error': 'Puorluka klaida!',
    'Browser error text': 'Dīmžāl mīsim juosecynoj, ka mīsu lopa nateik atbalsteita uz jiusu\n\
     puorluka. Ka grybās nūvierst itū problemu,\n\
    tod konsultejis ar datormeistaru.',

    'Nothing': 'Nikuo naatrodam!',
    'Nothing found': 'Piec taidu parametru nav nivīna rezultata.<br />\n\
    Lyugums puorbaudēt īvadietūs parametrus!'
});

Locale.define('lg-LG', 'Date', {

	months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
	months_abbr: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
	days_abbr: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

	// Culture's date order: MM/DD/YYYY
	dateOrder: ['month', 'date', 'year'],
	shortDate: '%m/%d/%Y',
	shortTime: '%I:%M%p',
	AM: 'AM',
	PM: 'PM',

	// Date.Extras
	ordinal: function(dayOfMonth){
		// 1st, 2nd, 3rd, etc.
		return (dayOfMonth > 3 && dayOfMonth < 21) ? 'th' : ['th', 'st', 'nd', 'rd', 'th'][Math.min(dayOfMonth % 10, 4)];
	},

	lessThanMinuteAgo: 'pyrms mozok kai minuta',
	minuteAgo: 'pyrms minuta',
	minutesAgo: 'pyrms {delta} minušom',
	hourAgo: 'pyrms stundis',
	hoursAgo: 'pyrms {delta} stundžom',
	dayAgo: 'pyrms 1 dīnys',
	daysAgo: 'pyrms {delta} dīnom',
	weekAgo: 'pyrms nedeļis',
	weeksAgo: 'pyrms {delta} nedeļom',
	monthAgo: 'pyrms mieņeša',
	monthsAgo: 'pyrms {delta} mienešim',
	yearAgo: 'pyrms goda',
	yearsAgo: 'pyrms {delta} godim',

	lessThanMinuteUntil: 'mozuok par minutu',
	minuteUntil: 'leidz minutam',
	minutesUntil: 'leidz {delta} minušom',
	hourUntil: 'about an hour from now',
	hoursUntil: 'about {delta} hours from now',
	dayUntil: '1 day from now',
	daysUntil: '{delta} days from now',
	weekUntil: '1 week from now',
	weeksUntil: '{delta} weeks from now',
	monthUntil: '1 month from now',
	monthsUntil: '{delta} months from now',
	yearUntil: '1 year from now',
	yearsUntil: '{delta} years from now'

});
})();
var Popup = new Class({

    Implements: [Events, Options],

//    Binds: ['onDrag', 'onStart', 'onComplete'],

    options: {
        'container': false,
        'lang':{
            'submit': 'Submit'
        }
    },

    initialize: function(options) {
        this.setOptions(options);
        this.container = this.options.container ? this.options.container : document.body;
        this.mask = new Mask();
        this.popup = new Element('div', {'class': 'popup-window'}).inject(this.container).setStyle('top', -1000);
        this.popup_txt = new Element('div', {'class': 'popup-window-content'}).inject(this.popup);
        this.close = new Element('span', {'class': 'popup-window-close', 'html': 'x', 'events': {
            'click': function(){
                this.hide();
            }.bind(this)
        }}).inject(this.popup);
    },
    show: function(){
        this.mask.show();
        this.popup.morph({
            'top': this.container.getScroll().y+(window.getSize().y-this.popup.getSize().y)/2,
            'left': this.container.getScroll().x+(window.getSize().x-this.popup.getSize().x)/2
        });
    },
    hide: function(){
        this.mask.hide();
        this.removeSpinner();
        this.popup.morph({
            'top': -1000
        });
        this.popup_txt.empty();
    },
    showFeedback: function(name, txt,  url){
        var fields = {
            'email': {
                'name': 'name',
                'field': 'input',
                'value': {
                    'type': 'text'
                }
            },
            'text': {
                'name': 'sugsession',
                'field': 'textarea',
                'value': {
                    'cols': 10,
                    'rows': 10
                }
            }
        }
        new Element('h2', {'html': name}).inject(this.popup_txt);
        new Element('p', {'html': txt}).inject(this.popup_txt);
        var form = new Element('form', {
            'action': url
        }).inject(this.popup_txt);
        Object.each(fields, function(item, name){
            var label = new Element('label', {'for': name}).inject(form);
            new Element('span', {'html': item['name']}).inject(label);
            new Element(item['field'], item['params']).inject(label);
        });
        var b = new Element('div', {'class': 'button submit-button', 'html': this.options.lang['submit'], 'events': {
            'click': function(){
                this.fireEvent('feedback', form);
            }.bind(this)
        }}).inject(form);
        this.show();
    },
    showText: function(name, txt){
        new Element('h2', {'html': name}).inject(this.popup_txt);
        new Element('p', {'html': txt}).inject(this.popup_txt);
        this.show();
    },
    popupSpinner: function(){
        this.spiner = new Spinner(this.popup).show();
    },
    removeSpinner: function(){
        if(this.spiner)
            this.spiner.destroy();
        this.spiner = undefined;
    }
});var Filter = new Class({

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
            var c = new Element('li', {
                'class': 'filter-item-'+item['url']
            }).inject(list);
            var name = new Element('span', {'class': 'f-name', 'html': item['name']}).inject(c);
            var next = this[item['type']](c, item, this.options.SU);
            if (['l', 'o'].contains(item['url']))
                name.addClass('clickable').addEvents({
                    'click': function(){
                        next.get('reveal').toggle();
                    }
                }).fireEvent('click');
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
                'opacity': .9
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
               this.setStyle('opacity', 1);
//               this.fade(1);
           },
           'mouseleave': function(){
//               if(!this.activeUrl||this.activeUrl=='')
//                   this.fade(0.3);
//               else this.fade(1);
               if(!this.activeUrl||this.activeUrl=='')
                   this.setStyle('opacity', .3);
               else
                   this.setStyle('opacity', 1);
           }
        }).fireEvent('mouseleave');
    },
    mark: function(c, item, SU){
        var view = new Element('span', {
            'class': 'active-decor',
            'html': Locale.get('Filter.All')
        }).inject(c).addEvent('click', function(){
//            document.id('mark-filter').get('reveal').toggle();
            document.id('mark-filter').setStyle('display', 'block').morph({
                'top': 30
            });
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
        return view;
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
                'round': 1,
                'format': false
            },
            'k': {
                'round': -4,
                'format': {
                    group: ' ',
                    scientific: false
                }
            },
            'p': {
                'round': -2,
                'format': {
                    group: ' ',
                    scientific: false
                }
            }
        };
        var numberFormat = numberFormats[item['url']] ? numberFormats[item['url']] : false;
        var min_str = item['value']['min_str'] ? item['value']['min_str'] : false;
        var updateSum = function(left, right, isBubble){
            min.set('html', left==minValue&&min_str ? min_str : (numberFormat ? left.format(numberFormat['format']) : left));
            max.set('html', right==minValue&&min_str ? min_str : (numberFormat ? right.format(numberFormat['format']) : right));
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
            'round': numberFormat ? numberFormat['round'] : 0,
            'knobs': [min, max],
            'decor': decor,
            'possible': item['value']['value'] ? item['value']['value'] : false,
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
        return slider;
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
                'events': { 'click': checkStatus }
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
        return list;
    }
});
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
            'button': [],
            'none': 'nav',
            'months': 'mēneši',
            'month': 'mēnesis',
            'one month': 'mazāk par mēnesi'
        }
    },
    //params for buttons [0 - prev button, 1 - next]
    id: [],
    button: [],
    buttonTxt: [],
    pressedButton: 0,
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
        this.ol = new Element('ol').inject(this.options.el);
        [0, 1].each(function(i){
            this.button[i] = new Element('div', {
                'html': '',
                'class': 'button button-'+['next', 'prev'][i],
                'events': {
                    'click': function(){
                        this.pressedButton = i;
                        this.fireEvent(['next', 'prev'][i], this.id[i]);
                    }.bind(this)
                }
            }).inject(this.options.el, ['bottom', 'top'][i]);
            this.buttonTxt[i] = new Element('span').inject(this.button[i]);
            new Element('div', {'class': 'loader', 'styles': {
                'opacity': .9
            }}).inject(this.button[i]);
            this.diactiveButton(i);
        }.bind(this));
        this.params = this.options.params;
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
            li({'class': 'auto'},
                h2(
                    a({ href: auto['url'], 'target': '_blank'},
                    auto['name'].length>20 ? auto['name'].substr(0, 20)+'...' : auto['name']),
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
    diactiveButton: function(bt){
        bt = bt==undefined ? 0 : bt;
        this.stopLoadingButton(bt);
        this.button[bt].setStyle('display', 'none');
    },
    activateButton: function(bt, t){
        bt = bt==undefined ? 0 : bt;
//        this.button[bt].setStyle('display', 'block');
        this.button[bt].reveal();
        this.buttonTxt[bt].set('html', this.options.lang['button'][bt](t));
    },
    loadingButton: function(bt){
        bt = bt==undefined ? 0 : bt;
        this.button[bt].addClass('loading');
    },
    stopLoadingButton: function(bt){
        bt = bt==undefined ? 0 : bt;
        this.button[bt].removeClass('loading');
    },
    rebild: function(){
        this.ol.empty();
        [0, 1].each(function(i){
            this.diactiveButton(i)
            this.id[i] = undefined;
        }.bind(this));
        return this.ol;
    },
    loading: function(){
        this.options.el.addClass('car-list-loading');
    },
    stopLoading: function(){
        this.stopLoadingButton(this.pressedButton);
        this.options.el.removeClass('car-list-loading');
    },
    addObjects: function(data, type){
        this.render(data, type);
    },
    render: function(data, type) {
        var len = data.length;
        if(type==1)
            new Element('li', {'class': 'delimiter'}).inject(this.ol, 'top')
        data.each(function(auto, i, obj){
            if(!this.id[1])
                this.id[1] = auto['id'];
            this.id[type] = auto['id'];
            auto['name'] = auto['mark']+' '+auto['model'];
            auto['added'] = Date.parse(auto['added']).timeDiffInWords();
            auto['image'] = auto['image'] ? this.renderImages(auto) : false;
            auto['params'] = this.renderParams(auto);
            auto['url'] = auto['urls'][0];
            auto['urls'] = this.renderUrl(auto['urls']);
            this.renderTemplate('auto', auto).inject(this.ol, type==1 ? 'top' : 'bottom');
        }.bind(this));
    },
    renderImages: function(data){
        var render_data = [];
        if(data['image'].length==0)
            return false;
//        patch for one image 
        data['image']=[data['image'][0]];
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
                end = end.substr(1, 10)+'...'+end.substr(end.length-8);
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
                var format = {
                        'decimal': ".",
                        'decimals': 1
                    }
                if(check(type, value)&&check('engine_type', value))
                    return value[type].format(format)+' '+value['engine_type'];
                if(check(type, value))
                    return value[type].format(format);
                if(check('engine_type', value))
                    return value['engine_type'];
                return this.options.lang['no value'];
            }.bind(this),
            'gearbox': function(type, value){
                if(check(type, value)&&check('gear_type', value))
                    return value[type]+' '+value['gear_type'];
                if(check(type, value))
                    return this.options.lang['gears'](value[type]);
                if(check('gear_type', value))
                    return value['gear_type'];
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
                    /*if(m>=0)
                        return this.options.lang['one month'];
                    m = -1*m;
                    return m+' '+this.options.lang['months'.substr(0, m==1 ? 5 : 6)]*/
                    return this.options.lang['month'](m);
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
            }.bind(this)
        }
        if(formatter[type])
            return formatter[type](type, value);
        return check(type, value) ? value[type] : this.options.lang['no value'];
    }
});
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
});var AdvancedList = new Class({

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

});/*
---
description: A Class that provides a cross-browser history-management functionaility, using the browser hash to store the application's state

license: MIT-style

authors:
- Arieh Glazer
- Dave De Vos
- Digitarald

requires:
- core/1.3: [Object,Class,Class.Extras,Element,Element.Event,Element.Style]

provides: [HashListener]

...
*/
(function($){

Element.NativeEvents['hashchange'] =  2;

HashListener = new Class({
	Implements : [Options,Events],
	options : {
		blank_page : 'blank.html',
		start : false
	},
	iframe : null,
	currentHash : '',
	firstLoad : true,
	handle : false,
	useIframe : (Browser.ie && (typeof(document.documentMode)=='undefined' || document.documentMode < 8)),
	ignoreLocationChange : false,
	initialize : function(options){
		var $this=this;
			
		this.setOptions(options);
		
		// Disable Opera's fast back/forward navigation mode
		if (Browser.opera && window.history.navigationMode) {
			window.history.navigationMode = 'compatible';
		}

		
		 // IE8 in IE7 mode defines window.onhashchange, but never fires it...
        if (
			('onhashchange' in window) &&
            (typeof(document.documentMode) == 'undefined' || document.documentMode > 7)
		   ){
				
                // The HTML5 way of handling DHTML history...
				window.addEvent('hashchange' , function () {
					var hash = $this.getHash();
//					if (hash == $this.currentHash) {
//						return;
//					}
					$this.fireEvent('hashChanged',hash);
					$this.fireEvent('hash-changed',hash);
				});;
        } else  {
			if (this.useIframe){
				this.initializeHistoryIframe();
			} 
        } 
		
		window.addEvent('unload', function(event) {
			$this.firstLoad = null;
		});
		
		if (this.options.start) this.start();
	},
	initializeHistoryIframe : function(){
		var hash = this.getHash(), doc;
		this.iframe = new IFrame({
			src		: this.options.blank_page,
			styles	: { 
				'position'	: 'absolute',
				'top'		: 0,
				'left'		: 0,
				'width'		: '1px', 
				'height'	: '1px',
				'visibility': 'hidden'
			}
		}).inject(document.body);

		doc	= (this.iframe.contentDocument) ? this.iframe.contentDocument  : this.iframe.contentWindow.document;
		doc.open();
		doc.write('<html><body id="state">' + hash + '</body></html>');
		doc.close();
		return;
	},
	checkHash : function(){
		var hash = this.getHash(), ie_state, doc;
		if (this.ignoreLocationChange) {
			this.ignoreLocationChange = false;
			return;
		}

		if (this.useIframe){
			doc	= (this.iframe.contentDocument) ? this.iframe.contentDocumnet  : this.iframe.contentWindow.document;
			ie_state = doc.body.innerHTML;
			
			if (ie_state!=hash){                
                this.setHash(ie_state);				
                hash = ie_state;                
			} 
		}		
		
		if (this.currentLocation == hash) {
			return;
		}
		
		this.currentLocation = hash;
		
		this.fireEvent('hashChanged',hash);
		this.fireEvent('hash-changed',hash);
	},
	setHash : function(newHash){
		window.location.hash = this.currentLocation = newHash;
		
		if (
			('onhashchange' in window) &&
            (typeof(document.documentMode) == 'undefined' || document.documentMode > 7)
		   ) return;
		
		this.fireEvent('hashChanged',newHash);
		this.fireEvent('hash-changed',newHash);
	},
	getHash : function(){
		var m;
		if (Browser.firefox){
			m = /#(.*)$/.exec(window.location.href);
			return m && m[1] ? m[1] : '';
		}else if (Browser.safari || Browser.chrome){
			return decodeURI(window.location.hash.substr(1));
		}else{
			return window.location.hash.substr(1);
		}
	},
	setIframeHash: function(newHash) {
		var doc	= (this.iframe.contentDocument) ? this.iframe.contentDocumnet  : this.iframe.contentWindow.document;
		doc.open();
		doc.write('<html><body id="state">' + newHash + '</body></html>');
		doc.close();
		
	},
	updateHash : function (newHash){
		if (document.id(newHash)) {
			this.debug_msg(
				"Exception: History locations can not have the same value as _any_ IDs that might be in the document,"
				+ " due to a bug in IE; please ask the developer to choose a history location that does not match any HTML"
				+ " IDs in this document. The following ID is already taken and cannot be a location: "
				+ newHash
			);
		}
		
		this.ignoreLocationChange = true;
		
		if (this.useIframe) this.setIframeHash(newHash);
		else this.setHash(newHash);
	},
	start : function(){
		this.handle = this.checkHash.periodical(100, this);
	},
	stop : function(){
		clearInterval(this.handle);
	}
});

})(document.id);/*
---
description: A Class that provides a cross-browser history-management functionaility, using the browser hash to store the application's state

license: MIT-style

authors:
- Arieh Glazer

requires:
- Core/1.3 : JSON
- HistoryManager/1.2: HashListener

provides: [HistoryManager]

...
*/

(function($,undef){

HistoryManager = new Class({

    Extends : HashListener,

    options : {
        delimiter : '',
        serializeHash: null,
        deserializeHash: null,
        compat : false
    },

    state : {},
    stateCache : {},

    initialize : function(options){
        this.parent(options);

        this.serializeHash = this.options.serializeHash || this.serializeHash;
        this.deserializeHash = this.options.deserializeHash || this.deserializeHash;

        this.addEvent('hashChanged',this.updateState.bind(this));
    },

    serializeHash : function (d) {
        return JSON.encode(d);
    },

    deserializeHash : function (d) {
        return JSON.decode(decodeURIComponent(d));
    },

    updateState : function (hash){
        var $this = this;

        if (this.options.delimiter) hash = hash.substr(this.options.delimiter.length);

        hash = this.deserializeHash(hash);
        
        Object.each(this.state,function(value,key){
            var nvalue, comperable, h_type;

            if (!hash || hash[key]===undef){
                nvalue = $this.state[key];

                if ($this.options.compat){
                    $this.fireEvent(key+'-removed',[nvalue]);
                }
                
                $this.fireEvent(key+':removed',[nvalue]);
                $this.fireEvent(key,[nvalue]);
                delete $this.state[key];
                delete $this.stateCache[key];
                if (hash && hash[key]) delete hash[key];
                return;
            }

            h_type = typeOf(hash[key]);

            comperable = (h_type=='string' || h_type=='number' || h_type =='boolean') ? hash[key] : JSON.encode(hash[key]);

            if (comperable != $this.stateCache[key]){
                nvalue = hash[key];
                $this.state[key] = nvalue;
                $this.stateCache[key] =comperable;

                if ($this.options.compat){
                    $this.fireEvent(key+'-updated',[nvalue]);
                    $this.fireEvent(key+'-changed',[nvalue]);
                }
                
                $this.fireEvent(key+':updated',[nvalue]);
                $this.fireEvent(key+':changed',[nvalue]);
                $this.fireEvent(key,[nvalue]);
            }

            delete hash[key];
        });

        Object.each(hash,function(value,key){
            $this.state[key]=value;
        
            v_type = typeOf(hash[key]);
            $this.stateCache[key] = (v_type=='string' || v_type=='number' || v_type =='boolean') ? value : JSON.encode(value);

                if ($this.options.compat){
                    $this.fireEvent(key+'-added',[value]);
                    $this.fireEvent(key+'-changed',[value]);
                }
                
            $this.fireEvent(key+':added',[value]);
            $this.fireEvent(key+':changed',[value]);
            $this.fireEvent(key,[value]);
        });
    },

    set : function(key,value){
        var newState = Object.clone(this.state);

        newState[key] = value;

        this.updateHash(this.options.delimiter + this.serializeHash(newState));

        return this;
    },

    remove : function(key){
        var newState = Object.clone(this.state);

        delete newState[key];

        this.updateHash(this.options.delimiter + this.serializeHash(newState));

        return this;
    }
});

})(document.id);var UrlManager = new Class({

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
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20807015-1']);
_gaq.push(['_trackPageview']);window.addEvent('domready', function(){
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
