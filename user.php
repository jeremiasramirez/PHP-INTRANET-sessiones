<?php
session_start();
	if(isset($_SESSION["name"]) or $_SESSION["name"]=="")
	{
		header("Location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>User</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
</head>
<body>
	<header class="main__header">
		<article class="main_main">
			<a href="main.php" class="title fas fa-home"></a>
		</article>

		<article class="main_out">	
		<a href="user.php" class="user_perfil fas fa-user" title="User"></a> 
		<!-- <?php echo $_SESSION["name"];?> -->
		<a href="out.php" class="perfil_out fas fa-sign-out-alt" title="Close"></a>
		</article>

	</header>



</body>
</html>
