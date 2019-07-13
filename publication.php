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
	<title>Estados</title>
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
		<a href="publication.php" class="user_perfil far fa-bell" title="Notification"></a>
		<a href="user.php" class="user_perfil fas fa-user" title="User"></a> 
		<a href="out.php" class="perfil_out fas fa-sign-out-alt" title="Close"></a>
		</article>
	</header>

 <main class="main">
  
 </main>

	<section class="states">
		<article class="title_states" style="position: sticky;top:60px;color:red; z-index: 300;">
			<h1 class="state_publish fas fa-stream" ></h1>
		</article>
		<?php 
		$conection = new mysqli("localhost", "root","","intranet");
			 
			 
			$statement_show = "SELECT state FROM states";

			$query_show = mysqli_query($conection, $statement_show);

			 while($row = mysqli_fetch_array($query_show)){
			 	print("<p class=data_state>".$row["state"]."</p>");
			 }

		 ?>
	</section>
 

</body>
</html>













