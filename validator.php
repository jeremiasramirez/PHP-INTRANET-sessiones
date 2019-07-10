<?php
session_start();
if(!isset($_SESSION["name"]) or $_SESSION==""){
	header("Location: login.php");
}
$user = $_POST["user"];
$user = addslashes($user);
$user = strip_tags($user);

$password = $_POST["password"];
$password = addslashes($password);
$password = strip_tags($password);


$_SESSION["name"]=$user;
if(empty($user) or empty($password) or ctype_space($user)==true or ctype_space($password)==true)
{
	header("Location: login.php");
}
else
{
	header("Location: main.php");
}
?>