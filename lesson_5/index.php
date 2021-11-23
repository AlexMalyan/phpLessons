<?php
require_once 'db.php';
$page = $_GET['page'] ?? 1;
$limit = 6;
$offset = $limit * ( $page - 1 );
$total_pages = countRow('images');
print_r($total_pages);
echo "$total_pages ";
?>

<!DOCTYPE html>
<html lang="ru">

<?php
$title = 'УРОК 5 ';
require_once '../modules/head.php'
?>

<body>
  <?php
  require_once '../modules/nav.php';
  ?>

  <div class="container">

      <article class="message is-primary">
          <div class="message-body">
              <h2 class="is-size-4">1. Создать галерею изображений, состоящую из двух страниц:</h2>
               <br>
              <strong>просмотр всех фотографий (уменьшенных копий);</strong> <br>
              <strong>просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.</strong>
                        </div>
      </article>

      <article class="message is-primary">
          <div class="message-body">
              <h2 class="is-size-4">
                  2. В базе данных создать таблицу, в которой будет храниться информация о картинках
                  (адрес на сервере, размер, имя).
              </h2>
          </div>
      </article>

      <article class="message is-primary">
          <div class="message-body">
              <h2 class="is-size-4">
                  3. *На странице просмотра фотографии полного размера под картинкой должно быть указано число ее просмотров.
              </h2>
          </div>
      </article>
      <article class="message is-primary">
          <div class="message-body">
              <h2 class="is-size-4">
                  4. *На странице просмотра галереи список фотографий должен быть отсортирован по популярности.
                  Популярность = число кликов по фотографии.
              </h2>
          </div>
      </article>




    <div class="columns is-multiline">
        <?php
        $link = mysqli_connect('localhost', 'root' , 'root' , 'gb' , 3303);
        $query = "SELECT * FROM images ORDER BY `view` DESC";

        $result = mysqli_query($link, $query) or die("Ошибка при отправке запроса<br>" . mysqli_error());
        $row = mysqli_fetch_assoc($result);
        /* извлечение ассоциативного массива */

        while ($row = mysqli_fetch_assoc($result)) {
//          printf("%s (%s)\n", $row["link"], $row["view"]);
//          var_dump($row);
//            print_r(getimagesize("../lesson_4/images/$row[link]"))
            $filesize = round(filesize("../lesson_4/images/$row[link]")/1024) ;
            echo <<<END

     <div  class="column is-3">
<!--        <a  class= "modal-button" href="../lesson_4/images/$row[link]">-->

              <figure class="image is-5by4 button modal-button" data-target="modal-fadeInScale">
                  <img src="../lesson_4/images/$row[link] " alt="$row[link]" title="size $row[link] $filesize.KB">
              </figure>            
                
<div id="modal-fadeInScale" class="modal modal-fx-fadeInScale">
            <div class="modal-background"></div>
            <div class="modal-content">
                <p class="image is-4by3">
                    <img src="../lesson_4/images/$row[link]" alt="">
                </p>
               
            </div>
            <button id="image-modal-close" class="modal-close is-large" aria-label="close"></button>
        </div>
    </div>
      

END;
        }
        mysqli_close($link);
        ?>





  <span class="button is-primary is-medium modal-button" data-target="modal-fadeInScale">normal</span>

<!--  <div id="modal-fadeInScale" class="modal modal-fx-fadeInScale">-->
<!--      <div class="modal-background"></div>-->
<!--      <div class="modal-content">-->
<!--           content -->
<!--          <p class="image is-4by3">-->
<!--              <img src="../lesson_4/images/cat-11.jpg" alt="">-->
<!--          </p>-->
<!--      <button class="modal-close is-large" aria-label="close"></button>-->
<!--  </div>-->



  <script type="text/javascript" src="main.js"></script>



</body>

</html>