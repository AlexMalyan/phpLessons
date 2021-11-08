<?php
/*
*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями 
 */
$hour = array('час', 'часа', 'часов');
$minut = array('минута', 'минуты', 'минут');


function num_word($value, $words, $show = true) 
{
	$num = $value % 100;
	if ($num > 19) { 
		$num = $num % 10; 
	}
	
	$out = ($show) ?  $value . ' ' : '';
	switch ($num) {
		case 1:  $out .= $words[0]; break;
		case 2: 
		case 3: 
		case 4:  $out .= $words[1]; break;
		default: $out .= $words[2]; break;
	}
	
	return $out;
}

echo num_word(22, $hour). ' ' . num_word(15, $minut) . PHP_EOL;
echo num_word(21, $hour). ' ' . num_word(43, $minut) . PHP_EOL;