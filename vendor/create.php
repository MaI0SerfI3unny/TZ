<?php
require'../config/db.php';

$name = $_POST['name'];
$year = $_POST['year'];
$format = $_POST['format'];
$actors = $_POST['actors'];

mysqli_query($connect, "INSERT INTO `films` (`id`, `name`, `year`, `format`, `actors`) VALUES (NULL, '$name' , '$year' , '$format' , '$actors')");
header('Location: /FilmApp');
