<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
</head>
<body style="background-color: #333">

<div class="responsivelogin">
	<p class="title_login fas fa-user"></p>

	<form action="" method="POST" class="login ">
		<h3 class="title title2" style="color:#444">Registro</h3>

		<p id="error_login" class="error_login"></p>
		<input type="text" name="newname" placeholder="Nombre completo" id="newname" autocomplete="off">
		<input type="text" name="newuser" placeholder="Ej. dolphi21" id="newuser" autocomplete="off">
		<input type="email" name="newemail" placeholder="Email" id="newemail" autocomplete="off">
		<input type="password" name="newpassword" placeholder="Password" id="newpassword" autocomplete="off">

		<button id="sendData">Registrarse</button>
	
	</form>


	

</div>




<?php
include "model/model.php";


if(isset($_POST["newname"]) &&  isset($_POST["newuser"]) &&  isset($_POST["newemail"]) && isset($_POST["newpassword"])){

	if(!empty($_POST["newname"]) &&  !empty($_POST["newuser"]) && !empty($_POST["newemail"]) && !empty($_POST["newpassword"])){

		if(!ctype_space($_POST["newname"]) == 1 &&  !ctype_space($_POST["newuser"]) == 1 &&  !ctype_space($_POST["newemail"]) == 1&& !ctype_space($_POST["newpassword"]) == 1){


	 
		 
	}

	 
		$statementregister = "INSERT INTO usuario (nameuser, emails, userpass, username) VALUES ('')";
	}

}


	$name= $_POST["newname"];
	$user= $_POST["newuser"];
	$email= $_POST["newemail"];
	$pass= $_POST["newpassword"];
?>










<!-- <script src="login.js"></script> -->
<script src="register.js"></script>
</body>
</html>

