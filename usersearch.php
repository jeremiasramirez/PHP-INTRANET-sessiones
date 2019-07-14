<?php
session_start();
include("model.php");
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
</head>
<body>
	<header class="main__header">
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
 			<input type="search" class="search" placeholder="Search user" id="searchname">
 			<button class="btn__search fas fa-search" id="btn__search"></button>
 		</form>
 	</div>

<div class="users__find" id="users__find">
	<?php


		
		if(isset($_POST["search__user"])){
			 if(!ctype_space($_POST["search__user"])) {
			  	
			 }	
	}
	 $conection = conections();
	$stat = "SELECT emails FROM email";
	$result = mysqli_query($conection, $stat);
	while($row= mysqli_fetch_array($result)){
		echo $row["emails"];
	}
	?>
</div>
 


<script src="usersearch.js"></script>
</body>
</html>
