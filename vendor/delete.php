<?php
require'../config/db.php';

$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `films` WHERE `films`.`id` = $id");
header('Location: /FilmApp');
