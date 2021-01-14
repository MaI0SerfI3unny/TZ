<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FilmApp</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php require'config/db.php';
          require'pages/header.php'?>

<main>
  <div class="add_block">

  <form class="" action="vendor/create.php" method="post">
    <p class="text-upper">Добавить фильм</p>
    <input type="text" name="name" value="" placeholder="name">
    <input type="text" name="year" value="" placeholder="year">
    <input type="text" name="format" value="" placeholder="format">
    <input type="text" name="actors" value="" placeholder="actors">
    <button type="submit" name="button">ДОБАВИТЬ</button>
  </form>
</div>
<br>
<form name="Table Properties" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="row">
    <h2 class="text-upper">сортировать:</h2>
    <button class="float-right ml-2" type="submit" name="sort_week" class="button" value="1">По алфавиту</button>
  </div>
  </form>
<br>
<br>
  <div class="row">
    <?php
    $films = mysqli_query($connect, "SELECT * FROM `films`");
    if(@$_POST['sort_week']) {
    $films =  mysqli_query($connect, "SELECT * FROM `films` ORDER BY `films`.`name` asc");
  }
    $films = mysqli_fetch_all($films);
    foreach ($films as $film) {
      echo '<div class="card">
            <a href="single.php?id=' .$film[0] .'">
            <h3>' .$film[1] . '</h3>
            <p>' .$film[2] . '</p>
            <p>' .$film[3] . '</p>
            <button><a href="vendor/delete.php?id=' .$film[0] .'">Удалить</a></button>
            </a>
            </div>';
    }
    ?>
  </div>



</main>
<h2>Импорт фильмов</h2>
<br>
<form action="vendor/importAction.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file" size="60" />
  <input type="submit" value="Read Contents" />
</form>
  </body>
</html>
