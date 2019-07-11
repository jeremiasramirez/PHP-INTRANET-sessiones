<?php
session_start();
if(!isset($_SESSION["name"]) or ctype_space($_SESSION["name"])==1){
 
	header("Location: out.php");
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
	header("Location: out.php");
}
else
{
	header("Location: main.php");
}
?>