<?php
session_start();
$conection = new mysqli("localhost", "jere", "0847", "jeremias");
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
if(isset($_POST["user"]) && isset($_POST["password"])){
 
	$user = $_POST["user"];
	$pass = $_POST["password"];

	$statementSelect = "SELECT * FROM usuario WHERE emails='$user' and userpass='$pass'";

	$querySelect = mysqli_query($conection, $statementSelect);
	while($row = mysqli_fetch_array($querySelect)){

			$boollogin = true;
			$namespage = $row["nameuser"];
			$sex = $row["sexo"];
			$emauser = $row["emails"];
		 
	} 
}
if($boollogin == true){
	$_SESSION["emauser"] = $emauser;
	$_SESSION["name"]=$namespage;
	$_SESSION["sexo"]=$sex;

	header("Location: main.php");
}
else{
	header("Location: out.php");
}

 
?>





