<?php
$host = 'localhost';
$database = 'a0613232_students';
$user = 'a0613232_students';
$password = 'root';
//require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));
?>
