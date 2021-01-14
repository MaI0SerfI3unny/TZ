<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <header>
      <?php require'config/db.php' ?>
    <a class="logo" href="/FilmApp">Films</a>
    <form class="float-right" action="search.php" method="post">
      <h3>Искать по названию</h3>
      <input type="text" name="search" value="" placeholder="Поиск">
      <input type="submit" name="submit" value="Поиск">
    </form>
    <form class="float-right" action="actor_search.php" method="post">
      <h3>Искать по актёру</h3>
      <input type="text" name="search_actor" value="" placeholder="Поиск">
      <input type="submit" name="submit" value="Поиск">
    </form>
    </header>
    <main>

        <?php
        $films = mysqli_query($connect, "SELECT * FROM `films` WHERE id = '$single'");
        $films = mysqli_fetch_all($films);
        foreach ($films as $film) {
          echo '<div class="card-content">
          <h3>' .$film[1] . '</h3>
          <p>' .$film[2] . '</p>
          <p>Format:' .$film[3] . '</p>
          <p>Actors:' .$film[4] . '</p>
          </div>';
        }
        ?>
        
    </main>
  </body>
</html>
