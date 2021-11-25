<?php
$tasks = [
//    ["title"=>"", "content"=>""],
    ["title"=>"1. Создать форму-калькулятор с операциями:",
     "content"=>"<strong>сложение, вычитание, умножение, деление. </strong> <br>
     <strong>Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега &lt;select&gt;.</strong>"],
    ["title"=>"2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.", "content"=>""],
    ["title"=>"3. Добавить функционал отзывов в имеющийся у вас проект.",
        "content"=>"<ul>
                        <li>товары хранятся в БД (структура прилагается);</li>
                        <li>страница формируется автоматически;</li>
                        <li>по клику на товар открывается карточка товара с подробным описанием.</li>
                        <li>подумать, как лучше всего хранить изображения товаров.</li>
                     </ul>"],
    ["title"=>"4. Создать страницу каталога товаров:", "content"=>""],
    ["title"=>"*Написать CRUD-блок для управления выбранным модулем через единую функцию (doFeedbackAction()).", "content"=>""],

];


?>

<!DOCTYPE html>
<html lang="ru">

<?php
$title = 'Урок 6. Интерактивность ';
require_once '../modules/head.php'
?>

<body>
  <?php
  require_once '../modules/nav.php';
  ?>

  <div class="container">
      <?php
      foreach($tasks as $key=>$item) {
          echo <<<TASKS
<article class="message is-info">
          <div class="message-body">
              <h2 class="is-size-5">$item[title] </h2>               
              <p>$item[content]</p>
          </div>
      </article>

TASKS;
      }

      ?>
      <style>
          .calculate-form {
              width: 100%;
              max-width: 460px;
              height: 100px;
              padding: 0px 3% 40px 3%;
              margin-bottom: 60px;
          }
          .numbers {
              height: 64px;
              width: 37%;
              max-width: 160px;
              margin: 20px 0px;
              padding: 10px 20px;
              border: 1px solid #2d598066;
              border-radius: 3px;
              font-size: 18px;
          }
          .operations {
              width: 66px;
              height: 64px;
              margin: 20px 5px;
              /*padding: 5px 0 0 10px;*/
              background-color: #1ca7a2;
              border: 1px solid #1ca7a2;
              font-size: 36px;
              color: #fff;
          }
      </style>
      <div class="box">
          <h1 class="is-size-4 has-text-info-dark has-text-centered has-text-weight-semibold" name="result">Калькулятор</h1>
          <form class="calculate-for is-flex is-flex-direction-row is-align-items-center is-justify-content-center" action="#result"  method="post">

              <div class="field">
                  <input class="input numbers" name="number1" type="text" placeholder="Первое число">

                      <select class="operations" name="operation">
                          <option value='plus'>+</option>
                          <option value='minus'>-</option>
                          <option value="multiply">*</option>
                          <option value="divide">/</option>
                      </select>

                  <div class="field is-grouped is-grouped-multiline">
                      <p class="control">
<!--                          <a class="button">-->
                              <input name="operation" value='plus' type="submit"/>
                              <input name="operation" value='minus' type="submit"/>
                              <input name="operation" value="multiply" type="submit"/>
                              <input name="operation" value="divide" type="submit"/>
<!--                          </a>-->
                      </p>
                  </div>

                  <input class="input numbers" name="number2" type="text" placeholder="Второе число">
              </div>
              <div class="field">
                  <input class="button is-link" type="submit" name="operation"  value='plus'>
              </div>
          </form>
          <?php
          if(isset($_POST['submit'])){
              $number1 = $_POST['number1'];
              $number2 = $_POST['number2'];
              $operation = $_POST['operation'];

              // Валидация
              if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
                  $error_result = 'Не все поля заполнены';

              }
              else {

                  if(!is_numeric($number1) || !is_numeric($number2)){
                      $error_result = "Операнды должны быть числами";
                  }
                  else
                      switch($operation){
                          case 'plus': $result = $number1 + $number2; break;
                          case 'minus': $result = $number1 - $number2; break;
                          case 'multiply': $result = $number1 * $number2; break;
                          case 'divide':
                              $number2 == '0' ? $error_result = "На ноль делить нельзя!" : $result = $number1 / $number2;
                              break;
                      }

              }
              if(isset($error_result)){
                  echo "<div class='has-text-danger is-size-4'>Ошибка: $error_result</div>";
              }
              else {
                  echo "<div class='has-text-success is-size-4'>Ответ: $result</div>";
              }
          }
          ?>
      </div>


</body>

</html>
