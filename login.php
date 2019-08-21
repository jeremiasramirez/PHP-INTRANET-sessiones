<?php 
session_start();
include "urlmsj/thank.php";
include "urlmsj/registeredbool.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
	<link rel="stylesheet" href="public/css/login.css">
	<link rel="stylesheet" href="public/css/stylesbuttonslogin.css">
</head>
<body style="background-color: #333">

<div class="responsivelogin" id="responsive">
	<p class="title_login fas fa-user"></p>
	<form action="validator.php" method="POST" class="login ">
		<?php
		//mensaje de gracias por visitarnos al sition
		    thank($_GET["thank"], "thankyou");

		    // mensaje si se registro correctamente
		    registeredbool($_GET["registered"], "true");
		?>


		<input type="text" name="user" placeholder="User" id="user" autocomplete="off">
		<input type="password" name="password" placeholder="Password" id="password" autocomplete="off">

		<button id="sendData">Ingresar <span class='fas fa-user'></span></button>
		<p class='home'><a href="register.php">Registrarse <span class='fas fa-sign-in-alt'></span></a></p>
	</form>
	<!-- <p class="select__user fas fa-user" ><a href="selectuser.html" class="" style="" > Ingresar como admin</a></p> -->


</div>
 
<!-- <script src="login.js"></script> -->
<script src="public/js/login.js"></script>
</body>
</html>

