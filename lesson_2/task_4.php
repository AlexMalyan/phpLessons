<?php
// задание №4
/* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции 
из пункта 3) и вернуть полученное значение (использовать switch).
*/
require_once './task_3.php'; // подключу функции

$arg1 = readline("ЧИСЛО  arg1 = ");
$arg2 = readline("ЧИСЛО  arg2 = ");
$operation = readline("КАКАЯ ОПЕРАЦИЯ?  operation = ");

function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case "+": 
			return sum($arg1, $arg2);
		case "-":
			return subtraction($arg1, $arg2);
		case "*":
			return multiply($arg1, $arg2); 
		case "/":
			return divide($arg1, $arg2);
		}
	}
	echo "Введено ($operation)  а значит $arg1 $operation $arg2 = " . mathOperation($arg1, $arg2, $operation);