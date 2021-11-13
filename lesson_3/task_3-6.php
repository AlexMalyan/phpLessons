<?php
/*
 * В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты
меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю?
Попробовать его реализовать.
 */
$menu = [
    'Main',
    'About',
    'Catalog' =>[
        'polyethylene pipes',
        'faucet' =>
            ['bath faucet', 'kitchen faucet', 'shower'],
        'bathtubs',
        'toilets'],
    'Delivery'];
$title = "MENU | TASK";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="../css/bulma.min.css">
   <title><?php echo  $title ?></title>
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
      <a class="navbar-item" href="http://gb/lesson_1/"> lesson 1</a>
      <a class="navbar-item" href="http://gb/lesson_2/task_5.php"> lesson 2</a>


      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
About
          </a>
          <a class="navbar-item">
Jobs
          </a>
          <a class="navbar-item">
Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
Report an issue
</a>
        </div>
      </div>
    </div>


  </div>
</nav>
 <?

     foreach ($menu as $key => $item) {
         if (is_array($item)) {
             echo "<h3> $key </h3>";
             array_walk($item, 'subMenu');
         } else {
             echo "<h3>$item</h3> <br>";
         }

         echo '<hr>';

 }
 function subMenu($item, $key)
 {
//     echo is_array($key)? 'array ': 'no array ';
     if (is_array($item)){
         echo "<h3> $key </h3>";
         array_walk($item, 'subMenu');
     }
     else
     {
         echo "ключ $key содержит <strong>$item\n</strong>  <br>";
     }

 }

 array_walk_recursive($menu, 'subMenu');
    ?>
<aside class="menu">
<?php
$menuArr = [
    'Item 1',
    'Item 2' => ['Subitem 1', 'Subitem 2', 'Subitem 3'],
    'Item 3' => ['Subitem 4' => ['One level deeper 1', 'One level deeper 2']]
];

function menuRender($arr)
{

    if (!is_array($arr)) {
        return 'incorrect argument';
    }

//    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {
        //перебираем массив, если значение - массив, то обрабатываем его нашей функцией
        if (is_array($value)) {
//            $renderArr[] =  '<p class="menu-label">' . $key . '</p>' ;
            $renderArr[] = '<ul class="menu-list">';
            $renderArr[] = '<li><a>' . $key . menuRender($value) . '</a></li>';
            $renderArr[] = '</ul>';
        } else {
            $renderArr[] = '<p class="menu-label">' . $value . '</p>';
        }
    }
//    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo menuRender($menuArr);

echo '<hr>';
?>

    <p class="menu-label">
        General
    </p>
    <ul class="menu-list">
        <li><a>Dashboard</a></li>
        <li><a>Customers</a></li>
    </ul>
    <p class="menu-label">
        Administration
    </p>
    <ul class="menu-list">
        <li><a>Team Settings</a></li>
        <li>
            <a class="is-active">Manage Your Team</a>
            <ul>
                <li><a>Members</a></li>
                <li><a>Plugins</a></li>
                <li><a>Add a member</a></li>
            </ul>
        </li>
        <li><a>Invitations</a></li>
        <li><a>Cloud Storage Environment Settings</a></li>
        <li><a>Authentication</a></li>
    </ul>
    <p class="menu-label">
        Transactions
    </p>
    <ul class="menu-list">
        <li><a>Payments</a></li>
        <li><a>Transfers</a></li>
        <li><a>Balance</a></li>
    </ul>
</aside>




