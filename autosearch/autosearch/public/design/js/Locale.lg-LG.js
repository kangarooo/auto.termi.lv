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
