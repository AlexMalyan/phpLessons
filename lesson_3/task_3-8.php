<?php
$arrCities =[
    'Ивановская Область' =>
        ['Вичуга', 'Гаврилов Посад', 'Заволжск', 'Иваново', 'Кинешма', 'Комсомольск', 'Кохма', 'Наволоки', 'Плес', 'Приволжск', 'Пучеж', 'Родники', 'Тейково', 'Фурманов', 'Шуя', 'Южа', 'Юрьевец', 'Палех'],
    'Коми Республика' =>
        ['Воркута','Вуктыл','Емва',  'Инта','Микунь','Печора','Сосногорск','Сыктывкар', 'Усинск','Ухта',],
    'Липецкая Область'=>
        ['Грязи', 'Данков','Елец','Задонск', 'Лебедянь','Липецк','Усмань', 'Чаплыгин',]
];

foreach ($arrCities as $key => $value) {
    foreach ($value as $city) {
        // делаем что-либо с каждым элементом
        if (mb_substr($city, 0, 1) === "К") echo $city . ', ';
    }

}





