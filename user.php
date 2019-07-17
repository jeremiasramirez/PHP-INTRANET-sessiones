<?php
session_start();
	if(!$_SESSION["name"])
	{
		header("Location: out.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>User</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="hiddenmenu.css">
 	<link rel="stylesheet" href="user.css">
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
</head>
<body>
	<header class="main__header"  id="main__header">
		<article class="main_main">
			<a href="main.php" class="title fas fa-home" title="Home"></a>
		</article>

		<article class="main_out">	
			<a href="main.php" class="title fas fa-home"></a>
		<a href="publication.php" class="user_perfil far fa-bell" title="Notification"></a>
		<a href="user.php" class="user_perfil fas fa-user" title="User"></a> 
		<a href="out.php" class="perfil_out fas fa-sign-out-alt" title="Close"></a>
		</article>

	</header>
	 	<div class="search__user">
 		<form action="usersearch.php" method="post">
 			<input type="search" class="search" placeholder="Search user" id="searchname" name="search">
 			<button class="btn__search fas fa-search" id="btn__search" title="Buscar"></button>
 		</form>
 	</div>
	<p class="separation" style="margin-top: 1em"></p>

	<main class="mainuser">
		
		<div class="container__user__name">
			 
			<?php
			if($_SESSION["sexo"]=="masculino"){
				print("<h1 class=user__name> <p class=emoji>😃</p>¡Bienvenido ".$_SESSION["name"]."!</h1>");
			}
			else{
				print("<h1 class=user__name> <p class=emoji>😃</p>¡Bienvenida ".$_SESSION["name"]."!</h1>");
			}
			?>
		</div>
	</main>






	<div class="containerpersonalstat">
		<?php

		$conection = new mysqli("localhost", "root", "", "intranetuser");

		?>	
	</div>









	<script type="text/javascript" src="main.js"></script>
	<script src="usersearch.js"></script>
</body>
</html>
