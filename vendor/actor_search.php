<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <header>
      <?php require'../config/db.php' ?>
    <a class="logo" href="/FilmApp">Films</a>
    <form class="" action="search.php" method="post">
      <h3>Искать по названию</h3>
      <input type="text" name="search" value="" placeholder="Поиск">
      <input type="submit" name="submit" value="Поиск">
    </form>
    <form class="" action="actor_search.php" method="post">
      <h3>Искать по актёру</h3>
      <input type="text" name="search_actor" value="" placeholder="Поиск">
      <input type="submit" name="submit" value="Поиск">

    </form>
    </header>
<main>
  <div class="row">
    <?php

    $search = $_POST['search_actor'];
    $find_a = mysqli_query($connect, "SELECT * FROM `films` WHERE `actors` LIKE '%$search%'");
    $find_a = mysqli_fetch_all($find_a);
    foreach($find_a as $finds_a){
     echo '<div class="card">
       <a href="../single.php?id=' .$finds_a[0] .'">
           <h3>' .$finds_a[1]. '</h3>
           <p>' .$finds_a[2] . '</p>
           <p>' .$finds_a[3] . '</p>
           </a>
           </div>';
   }
    ?>
  </div>
</main>
  </body>
</html>
  </body>
</html>
