<?php
session_start();

if(!$_SESSION["name"]){			 
	header("Location: out.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Seach</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
	<link rel="stylesheet" href="usersearch.css">
	<link rel="stylesheet" href="users.css">
	<link rel="stylesheet" href="hiddenmenu.css">
</head>
<body style="background-color: white">
	<header class="main__header" id="main__header">
		<article class="main_main">
			<a href="main.php" class="title fas fa-home"></a>
		</article>

		<article class="main_out">	
			<a href="main.php" class="title fas fa-home"></a>
			<a href="publication.php" class="user_perfil far fa-bell" title="Notification"></a>
			<a href="user.php" class="user_perfil fas fa-user" title="User"></a> 
			<a href="out.php" class="perfil_out fas fa-sign-out-alt" title="Close"></a>
		</article>

	</header>
 <main class="main">
 	<div class="search__user">
 		<form action="usersearch.php" method="post">
 			<input type="search" class="search" placeholder="Search user" id="searchname" name="search">
 			<button class="btn__search fas fa-search" id="btn__search"></button>
 		</form>
 	</div>

	<div class="users__find" id="users__find">
</div>
 
 <section class="perfil__container">
 	<article class="photo__perfil">
 		<img src="imgs/1.jpg" alt="" class="img__perfil__fake">
 	</article>
 	<article class="title__name__container">
 		
 <?php 
 	$conection = new mysqli("localhost", "root", "", "intranetuser");
 	$id = null;
 	if(isset($_GET['users'])){
 		$id = $_GET['users'];
 	}
 	$statementusers = "SELECT nameuser, sexo, statepersonal, sexo FROM usuario WHERE user_id = '$id' ";
  	
  	$execusers = mysqli_query($conection, $statementusers);
  	while($row= mysqli_fetch_array($execusers)){
  		echo "<h1 class=title__user__perfil>".$row["nameuser"]."</h1>";
  	}


 ?>
 </article>
</section>
<script src="usersearch.js"></script>
<script src="users.js"></script>
<script src="main.js"></script>
</body>
</html>
