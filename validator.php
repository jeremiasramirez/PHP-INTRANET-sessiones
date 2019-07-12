<?php
session_start();

$conection = new mysqli("localhost", "root","","intranetuser");
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
if(isset($_POST["user"]) && isset($_POST["password"])){
 
	$user = $_POST["user"];
	$pass = $_POST["password"];

	$statementSelect = "SELECT * FROM userspage AS u RIGHT JOIN email AS e ON e.email_id = u.user_id  WHERE e.emails='$user' and u.userpass='$pass'";

	$querySelect = mysqli_query($conection, $statementSelect);
	while($row = mysqli_fetch_array($querySelect)){

			$boollogin = true;
			$namespage = $row["nameuser"];
			$sex = $row["sexo"];
			 
		 
	} 
}
if($boollogin == true){

	$_SESSION["name"]=$namespage;
	$_SESSION["sexo"]=$sex;

	header("Location: main.php");
}
else{
	header("Location: out.php");
}

 
?>





