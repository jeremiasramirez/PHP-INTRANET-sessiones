<?php 
session_start();
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
</head>
<body style="background-color: #333">

<div class="responsivelogin">
	<p class="title_login fas fa-user"></p>

	<form action="validator.php" method="POST" class="login ">
	<?php
		if(isset($_GET["thank"]) and $_GET["thank"] =="thankyou"){
			print("<p class=visitweb id=messageText>Muchas gracias por visitarnos!</p>");
		}
		if(isset($_GET["registered"]) and $_GET["registered"] =="true"){
			print("<p class=visitweb>Se ha registrado correctamente!</p>");
		}	

	?>


		<input type="text" name="user" placeholder="User" id="user" autocomplete="off">
		<input type="password" name="password" placeholder="Password" id="password" autocomplete="off">

		<button id="sendData">Ingresar</button>
		<a href='register.php' class=registerLink>Registrarse</a>
	</form>
	<!-- <p class="select__user fas fa-user" ><a href="selectuser.html" class="" style="" > Ingresar como admin</a></p> -->

	<script src="login.js"></script>

</div>





<style type="text/css">

}

</style>
<script type="text/javascript">
	
</script>









<script src="public/js/login.js"></script>
 
</body>
</html>

