<?php
 	$conection = new mysqli("localhost", "jere", "0847", "jeremias");
	session_start();
	// if(isset($_SESSION["name"]) && ctype_space($_SESSION["name"])==1)
	// {
		if(!$_SESSION["name"]){
			 
			header("Location: out.php");
		}
	// }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Main</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
	<link rel="stylesheet" href="showstate.css">
	<link rel="stylesheet" href="viewstate.css">
</head>
<body>
	<header class="main__header" id="main__header">
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

 <main class="main">
 	<div class="search__user">
 		<form action="usersearch.php" method="post">
 			<input type="search" class="search" placeholder="Search user" id="searchname" name="search">
 			<button class="btn__search fas fa-search" id="btn__search" title="Buscar"></button>
 		</form>
 	</div>


 	<div class="publish">
 			<form action="" method="">

	 		<textarea  id="textpublish" class="text_publish" cols="20" rows="4" placeholder="¿Como se siente?" style="color:#444" ></textarea>
	 	</form>

 	</div>

</main>
<style>

</style>
 

	<article class="title_states" style="text-align: center;color:red;">
			<h1 class="state_publish fas fa-stream"></h1>
		</article>
	
	<section class="states" id="statesitem">
	

		<?php 
	
		
			if(isset($_POST["state"]) && $_POST["state"] != ""){

				if(!ctype_space($_POST["state"])) {
					$data = $_POST["state"];
					$data = addslashes($data);
					$data = strip_tags($data);
					$statement_insert = "INSERT INTO allstates (stat) VALUES ('$data')";
					$query_insert = mysqli_query($conection, $statement_insert);
					unset($_POST["state"]);		 
			}
			
		}
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
 <script src="viewstate.js"></script>
</body>
</html>