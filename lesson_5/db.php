<?php

/** @var TYPE_NAME $mysqli */
// $mysqli = mysqli_connect("localhost", "root", "root", "GB", 3303);
//
///* проверка соединения */
// if ($mysqli->connect_errno) {
//   printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
//   exit();
// }

 function countRow($table){
     $mysqli = mysqli_connect("localhost", "root", "root", "GB", 3303);
     $query = "SELECT COUNT(*) FROM $table";
     $result = mysqli_query($mysqli, $query) or die("Ошибка при отправке запроса<br>" . mysqli_error());
     $c = mysqli_fetch_row($result);
//     return mysqli_num_rows($result);
     return $c[0];
 }

// /* Создание таблицы не возвращает результирующего набора */
// if ($mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
//   printf("Таблица myCity успешно создана.\n");
// }

// /* Select запросы возвращают результирующий набор */
// if ($result = $mysqli->query("SELECT Name FROM City LIMIT 10")) {
//   printf("Select вернул %d строк.\n", $result->num_rows);

//   /* очищаем результирующий набор */
//   $result->close();
// }




