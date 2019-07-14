<?php
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
 			<input type="search" name="search__user" class="search" placeholder="Search user">
 			<button class="btn__search fas fa-search"></button>
 		</form>
 	</div>


 	<div class="publish">
 			<form action="" method="post">
	 		<textarea name="state" id="textpublish" class="text_publish" cols="20" rows="4" placeholder="¿Como se siente?"></textarea>
	 		<div class="button_publish">
	 			<button id="buttonsend_publish" class="buttonsend_publish">Publicar</button>
	 		 
	 		</div>
	 	</form>

 	</div>

</main>


	<article class="title_states" style="text-align: center;color:red;">
			<h1 class="state_publish fas fa-stream"></h1>
		</article>
	
	<section class="states">
	

		<?php 
		$conection = new mysqli("localhost", "root","","intranet");
			
		
			if(isset($_POST["state"]) && $_POST["state"] != ""){
				if(!ctype_space($_POST["state"])) {
				$data = $_POST["state"];
				$data = addslashes($data);
				$data = strip_tags($data);
	 
				 $statement_insert = "INSERT INTO states (state) VALUES ('$data')";

				 $query_insert = mysqli_query($conection, $statement_insert);
				unset($_POST["state"]);		 
			}
		}
			$statement_show = "SELECT state FROM states";

			$query_show = mysqli_query($conection, $statement_show);

 			while($row = mysqli_fetch_array($query_show)){
			 	print("<p class=data_state>".$row["state"]."</p>");
			 }

		 ?>
		 
	</section>
	

<script src="main.js"></script>
 
</body>
</html>