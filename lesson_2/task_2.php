<?php
// задание №2
/* 2. Присвоить переменной $а значение в промежутке [0..15]. 
С помощью оператора switch организовать вывод чисел от $a до 15.
*/

$a = readline("ЧИСЛО  a = ");
	switch ($a) {
		case 0:
      echo ($a++ ) . PHP_EOL;
  case 1:
      echo ($a++ ) . PHP_EOL;
  case 2:
      echo ($a++ ) . PHP_EOL ;
  case 3:
      echo ($a++ ) . PHP_EOL;
  case 4:
      echo ($a++ ) . PHP_EOL;
  case 5:
      echo ($a++ ) . PHP_EOL ;
  case 6:
      echo ($a++ ) . PHP_EOL;
  case 7:
      echo ($a++ ) . PHP_EOL;
  case 8:
      echo ($a++ ) . PHP_EOL;
  case 9:
      echo ($a++) . PHP_EOL;
  case 10:
      echo ($a++ ) . PHP_EOL;
  case 11:
      echo ($a++ ) . PHP_EOL;
  case 12:
      echo ($a++ ) . PHP_EOL ;
  case 13:
      echo ($a++ ) . PHP_EOL;
  case 14:
      echo ($a++ ) . PHP_EOL ;
  case 15:
      echo ($a ) ;
      break;
	}