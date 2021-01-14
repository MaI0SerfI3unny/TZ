<?php

$connect = mysqli_connect('localhost', 'root', '', 'films');

if (!$connect) {
  die('Db none');
}


$single = @$_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM `films` WHERE id = '$single'");
