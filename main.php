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
			
		<a href="user.php" class="user_perfil fas fa-user" title="User"></a> 
		<a href="out.php" class="perfil_out fas fa-sign-out-alt" title="Close"></a>
		</article>
	</header>

 <main class="main">
 	<div class="publish">
 			<form action="" method="post">
	 		<textarea name="state" id="textpublish" class="text_publish" cols="50" rows="4" placeholder="¿Como se siente?"></textarea>
	 		<div class="button_publish">
	 			<button id="buttonsend_publish" class="buttonsend_publish">Publicar</button>
	 			<!-- <input type="file" name="file" class="publish_file"> -->
	 		</div>
	 	</form>

 	</div>



 </main>

	<section class="states">
		<article class="title_states">
			<h1 class="state_publish fas fa-stream"></h1>

		</article>
		<article class="container__all">
			<p class="all"><a href="publication.php">Mostrar todos</a></p>
		</article>
		<?php 
		$conection = new mysqli("localhost", "root","","intranet");
			 
			if(isset($_POST["state"]) && $_POST["state"] != "" &&  ctype_space($_POST["state"])!==1){

				$data = $_POST["state"];
				$data = addslashes($data);
				$data = strip_tags($data);
	 
				 $statement_insert = "INSERT INTO states (state) VALUES ('$data')";

				 $query_insert = mysqli_query($conection, $statement_insert);
				 unset($data);
				 header("main.php");
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