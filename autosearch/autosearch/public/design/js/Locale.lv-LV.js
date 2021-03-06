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
