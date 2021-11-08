# Урок 2. Условные блоки, ветвление функции

---
 1.  Объявить две целочисленные переменные \$a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:

` если \$a и \$b положительные, вывести их разность; `
 `если \$а и \$b отрицательные, вывести их произведение;`
`если \$а и \$b разных знаков, вывести их сумму;`

Ноль можно считать положительным числом.

**РЕШЕНИЕ :**

    $a = readline("ЧИСЛО  a = ");
    $b = readline("ЧИСЛО b = ");

    if ($a >= 0 && $b>= 0){
      echo" Положительные переменные значит выполняем условие: $a - $b = " . ($a-$b);
      
    } elseif ($a < 0 &&  $b < 0) {
      echo " Отрицательные переменные значит выполняем условие: $a * $b = " . ($a*$b);
    } elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
      echo  " Разных знаков переменные значит выполняем условие: $a + $b = " . ($a+$b);
    }

*В файле task_1.php*

---

 2. Присвоить переменной \$а значение в промежутке [0..15]. С помощью оператора `switch` организовать вывод чисел от \$a до 15.

 **РЕШЕНИЕ :**

        $a = readline("ЧИСЛО  a = ");;
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
---
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор `return`.    

**РЕШЕНИЕ :**

    $arg1 = readline("ЧИСЛО  arg1 = ");
    $arg2 = readline("ЧИСЛО  arg2 = ");

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

    echo "Суммирую $arg1 + $arg2 =  " . sum($arg1, $arg2)  . PHP_EOL;
    echo "Вычитаю $arg1 - $arg2 =  " . subtraction($arg1, $arg2)  . PHP_EOL;
    echo "Умножаю $arg1 * $arg2 =  " . multiply($arg1, $arg2)  . PHP_EOL;
    echo "Делю  $arg1 / $arg2 =  " . divide($arg1, $arg2)  . PHP_EOL;       

---
4. Реализовать функцию с тремя параметрами: `function mathOperation($arg1, $arg2, $operation)`, где `$arg1, $arg2` – значения аргументов, `$operation` – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать` switch`).

 **РЕШЕНИЕ :** 

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

---        

 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.       

**РЕШЕНИЕ :** 

    <?php
    $title = "задане № 5";
    $h1 = "<h1 class='title'> задане № 5 </h1>";
    function getYear() {
      return 	date ("Y");
    }
    ?>

    <!DOCTYPE html>
    <html lang "en">

    <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="../css/bulma.min.css">
      <title >
        <? echo $title ?>
      </title>
    </head>

    <body>
      <? echo $h1 ?>
      <footer class="footer">
      <div class="content has-text-centered">
        <p>
        Сделано в <strong> <? echo getYear() ?></strong> году.
        </p>
      </div>
    </footer>

      
    </body>

    </html>

---

6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: `function power($val, $pow)`, где `$val `– заданное число, `$pow` – степень.

**РЕШЕНИЕ :**  

    $val = readline("ЧИСЛО  val = ");
    $pow = readline("степень  pow = ");

    function power($val, $pow)
      {
        if ($val == 0)
        return 0;
        elseif ($pow == 0)
        return 1;
        elseif ($pow < 0)
                    return power(1/$val, -$pow);
        else
                    return $val *  power($val, $pow-1);
      }
            echo "Выведет " .  power($val, $pow) . " (т.е. $val в степени $pow)";

---
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
*22 часа 15 минут*
*21 час 43 минуты*

**РЕШЕНИЕ :**    

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