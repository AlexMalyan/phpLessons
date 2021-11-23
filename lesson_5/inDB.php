<?php
$images_dir = scandir('../lesson_4/images');
// var_dump($images_dir);
$arrImages = [];
$link = mysqli_connect('localhost', 'root' , 'root' , 'gb' , 3303);
foreach ($images_dir as $img) {
  if ($img !== '.' && $img !== '..') {
    array_push($arrImages, $img);
      $insert = "INSERT INTO images (link) VALUES ('$img')";
      $result = mysqli_query($link, $insert) or die("Ошибка при отправке запроса<br>");
  }
}
//mysqli_close();

//$link = mysqli_connect('localhost', 'root' , 'root' , 'gb' , 3303);
//$query = "SELECT * FROM images ";
//$insert = "INSERT INTO images (link) VALUES ('cat-210.jpg')";
//$result = mysqli_query($link, $insert) or die("Ошибка при отправке запроса<br>");
//$result = mysqli_query($link, $query) or die("Ошибка при отправке запроса<br>");
//$row = mysqli_fetch_assoc($result);
/* извлечение ассоциативного массива */
//while ($row = mysqli_fetch_assoc($result)) {
//    printf("%s (%s)\n", $row["link"], $row["view"]);
//}

print_r($arrImages);
