<!-- Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с изображениями. Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.
 -->

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/bulma.min.css">
  <title>gb</title>
</head>

<body>
  <div class="container">
    <div class="columns is-multiline">
    <?php
  $images_dir = scandir('./images');
  // var_dump($images_dir);
  foreach ($images_dir as $im) {
    if ($im !== '.' && $im !== '..') {
      echo <<<END
        <div class="column is-3">
        <a target ="_blank" href="./images/$im">

        <figure class="image is-5by4">
          <img src="./images/$im">
        </figure>
        </a>
      </div>
END;     
    }
  }
  ?>

  


    </div>
  </div>



</body>

</html>