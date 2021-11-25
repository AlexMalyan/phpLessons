## Урок 6. Интерактивность

### 1. Создать форму-калькулятор с операциями: 
сложение, вычитание, умножение, деление. 
Не забыть обработать деление на ноль! Выбор операции можно осуществлять 
с помощью тега `<select>`.

**Решение :**

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
---
### 2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.
**Решение**

    <input name="operation" value='plus' type="submit"/>
    <input name="operation" value='minus' type="submit"/>
    <input name="operation" value="multiply" type="submit"/>
    <input name="operation" value="divide" type="submit"/>

---


