<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

<div class="responsivelogin">
	<h1 class="title_login">Login</h1>

	<form action="validator.php" method="POST" class="login">

		<p id="error_login" class="error_login">inco</p>
		<input type="text" name="user" placeholder="User" id="user" autocomplete="off">
		<input type="text" name="password" placeholder="Password" id="password" autocomplete="off">

		<button id="sendData">Ingresar</button>
	</form>

</div>
















<script src="validator.js"></script>
</body>
</html>

