
<?php 
require_once './task_4.php';/*  Задание 4 */
require_once './task_5.php';/*  Задание 5 */
?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="./css/bulma.min.css">
   <title>gb</title>
</head>
<body>

<div class="container"> 
   <div class="box">
      <h2 class="title is-4">Задание №1</h2>
      <p>Установил OpenServer</p>
   </div>
   <div class="box">
      <h2 class="title is-3">Задание №3</h2>
      <p> Объяснить, как работает данный код:</p>
      <code>
      $a = 5;
      <br>
    $b = '05';
    var_dump($a == $b);         // Почему true? - потому что сравнение == не сравнивает типы данных, только значения
    <br>
    var_dump((int)'012345');     // Почему 12345? - int - приведение к числу, строка 012345 будет равна 12345
    <br>
    var_dump((float)123.0 === (int)123.0); // Почему false? - int - целое число, float - число с плавающей запятой. Т.к сравнение строгое,     сравниваются и значения и тип данных. Поэтому false
    <br>
    var_dump((int)0 === (int)'hello, world'); // Почему true? - строка не ноль, значит ее значение - true.
      </code>
   </div>

  <div class="box">        
         <h2 class="title"><?php echo $title ?></h2>
        <p>Сегодня : <?php echo $content?> год.</p>
        <code>
        $title = 'Задание 4'; <br>
        $content = date ("Y");
        </code>
  </div>

  <div class="box">        
         <h2 class="title">Задание №5</h2>
        <p> <?php echo $task5?></p>
        <code>
        $a = 1;
         $b = 2; 
         <br>
         $a = ++$a;
         <br>
         $b = --$b;
         <br>
         echo "a = $a \n"; 
         echo "b = $b";
        </code>
  </div>

  </div>

   
   
   
</body>
</html>


