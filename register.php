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
	<?php
		if(isset($_GET["thank"]) and $_GET["thank"] =="thankyou"){
			print("<p class=visitweb id=messageText>Muchas gracias por visitarnos!</p>");
		}
	?>

		<p id="error_login" class="error_login"></p>

		<input type="text" name="newname" placeholder="Nombre completo" id="user" autocomplete="off">
		<input type="text" name="newuser" placeholder="Usuario" id="user" autocomplete="off">
		<input type="email" name="newemail" placeholder="Email" id="user" autocomplete="off">
		<input type="password" name="newpassword" placeholder="Password" id="password" autocomplete="off">

		<button id="sendData">Registrarse</button>
	
	</form>


	<script src="login.js"></script>

</div>
















<script src="validator.js"></script>
</body>
</html>

