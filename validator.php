<?php
include "model/model.php";
session_start();
$conectionDb = new conectionDB;
		$conectionDb->conected();
		global $conection;
 
$user = $_POST["user"];
$user = addslashes($user);
$user = strip_tags($user);

$password = $_POST["password"];
$password = addslashes($password);
$password = strip_tags($password);

$boollogin = null;
$namespage = '';
$sex = '';
$nameuserofficial = null;
$emauser = null;
$iduser = null;
$userlogin = null;
if(isset($_POST["user"]) && isset($_POST["password"]) && $_POST["user"] != "" && $_POST["password"]){
 
	$user = $_POST["user"];
	$pass = $_POST["password"];


	$statementSelect = "SELECT * FROM usuario WHERE username='$user' or emails='$user' and userpass='$pass'";

	$querySelect = mysqli_query($conection, $statementSelect);
	while($row = mysqli_fetch_array($querySelect)){

			$boollogin = true;
			$namespage = $row["nameuser"];
			$sex = $row["sexo"];
			$emauser = $row["emails"];
			$iduser = $row["user_id"];
		 	$userlogin = $row["username"];
	} 
}
if($boollogin == true){
	$_SESSION["userlogin"] = $userlogin;
	$_SESSION["emauser"] = $emauser;
	$_SESSION["iduser"] = $iduser;
	$_SESSION["name"]=$namespage;
	$_SESSION["sexo"]=$sex;

	header("Location: main.php");
}
else{
	header("Location: out.php");
}

 
?>





