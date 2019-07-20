<?php
$conection = new mysqli("localhost", "jere", "0847", "jeremias");
	session_start();

	if(!$_SESSION["name"]){
		 
		header("Location: out.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Estados</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="showstate.css">
	<!-- <link rel="stylesheet" href="hiddenmenu.css"> -->
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
  		<article class="title_states" style="text-align: center;">
			<h1 class="state_publish fas fa-stream" style="color:red"></h1>
		</article>
  

	<section class="states" id="statesitem">

		<?php
			$statement_show = "SELECT stat FROM allstates";

			$query_show = mysqli_query($conection, $statement_show);

			 while($row = mysqli_fetch_array($query_show)){
			 	print("<p class=data_state id=data_state--js>".$row["stat"]."</p>");
			 }

		 ?>
	</section>
 

<script src="main.js"></script>
<script src="usersearch.js"></script>
 <script src="showstate.js"></script>
</body>
</html>













