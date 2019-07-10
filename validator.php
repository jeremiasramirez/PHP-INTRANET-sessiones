<?php
session_start();

$user = $_POST["user"];
$user = addslashes($user);
$user = strip_tags($user);

$password = $_POST["password"];
$password = addslashes($password);
$password = strip_tags($password);

$_SESSION["name"]=$user;

header("Location: main.php")
?>