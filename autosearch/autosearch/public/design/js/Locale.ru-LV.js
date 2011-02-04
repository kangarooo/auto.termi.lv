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
