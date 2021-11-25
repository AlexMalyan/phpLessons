<!-- 
/* 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, 
вывести текущий год в подвале при помощи встроенных функций PHP.
*/ -->


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
		Сделано в <strong> <?echo getYear() ?></strong> году.
    </p>
  </div>
</footer>

	
</body>

</html>