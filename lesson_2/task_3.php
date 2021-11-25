<?php
// задание №3
/* 3. Реализовать основные 4 арифметические операции в виде функций 
с двумя параметрами. Обязательно использовать оператор return.
*/
// $arg1 = readline("ЧИСЛО  arg1 = ");
// $arg2 = readline("ЧИСЛО  arg2 = ");

function sum($arg1, $arg2) {
	return $arg1 + $arg2;
}

function subtraction($arg1, $arg2) {
	return $arg1 - $arg2;
}

function multiply($arg1, $arg2) {
	return $arg1 * $arg2;
}
function divide($arg1, $arg2) {
	return ($arg2 === 0) ? "На ноль делить нельзя" : $arg1 / $arg2;
}

// echo "Суммирую $arg1 + $arg2 =  " . sum($arg1, $arg2)  . PHP_EOL;
// echo "Вычитаю $arg1 - $arg2 =  " . subtraction($arg1, $arg2)  . PHP_EOL;
// echo "Умножаю $arg1 * $arg2 =  " . multiply($arg1, $arg2)  . PHP_EOL;
// echo "Делю  $arg1 / $arg2 =  " . divide($arg1, $arg2)  . PHP_EOL;