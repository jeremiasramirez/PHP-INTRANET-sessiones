<?php
session_start();


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>User</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<header class="main__header">
		<article class="main_main">
			<a href="main.php" class="title">INICIO</a>
		</article>
		<article class="main_out">
			
		<a href="user.php" class=user_perfil><?php echo $_SESSION["name"];?></a> 
		<a href="out.php" class="perfil_out">Salir</a>
		</article>
	</header>



</body>
</html>
