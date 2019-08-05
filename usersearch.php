<?php
include "model/model.php";
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
	<!-- <link rel="stylesheet" href="users.css"> -->
	<link rel="stylesheet" href="usersearch.css">
	<!-- <link rel="stylesheet" href="hiddenmenu.css"> -->
</head>
<body style="background-color: white">
	<header class="main__header">
		<article class="main_main">
			<a href="main.php" class="title fas fa-home"></a>
		</article>

		<article class="main_out">	
			<a href="main.php" class="title fas fa-home"></a>
			<a href="publication.php" class="user_perfil far fa-bell" title="Notification"></a>
			<a href="users.php" class="user_perfil fas fa-user" title="User"></a> 
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

	<?php 
		function get_users($searchs, $sessions){

				$con = new conectionDB();
				$con->conected();
				global $conection;
			  	if(isset($searchs) && !ctype_space($searchs) == 1){
				 
			    	$counterfinded = 0;
			  		$counterfinded = $conection->affected_rows;
				  	
				  	$searchs = $searchs;
				  	$searchs = addslashes($searchs);
				  	
				  	$searchs = strip_tags($searchs);
					$emauserpersonal = $sessions;
					$statementsearch = "SELECT user_id,nameuser,username emails from usuario where username='$searchs' || emails='$searchs'";
					
					$result = mysqli_query($conection, $statementsearch);

					while($row= mysqli_fetch_array($result)){
					
					
						print("<a href='users.php?users=".$row["user_id"]."' class=itemsearch>".$row["nameuser"]."</a>");
						$counterfinded = $conection->affected_rows;

					}	
					 print("
					 	<div class=alltitle>
							<h1 class=titleusers>Usuarios encontrado <strong>".$counterfinded."</strong></h1>
						</div>
						");
			  	}



		}
 		get_users($_POST["search"], $_SESSION["emauser"]);
	 	// class search_user extends conectionDB{
			// function __construct($name, $session_user){
			// 	$this->name = $name;
			// 	$this->session_user = $session_user;
			// }
			// function getUser(){

			// 	 parent::conected();
			// 	global $conection;
	  // 			if(isset($this->name) && !ctype_space($this->name) == 1 && 
	  // 				!empty($this->name)&& !empty($this->session_user) && 
	  // 				isset($this->session_users)){

				// $con = new conectionDB();
				// $con->conected();

			  //   	$counterfinded = 0;
			  // 		$counterfinded = $conection->affected_rows;
				  	
				 //  	$searchs = $this->name;
				 //  	$searchs = addslashes($searchs);
				 //  	$searchs = strip_tags($searchs);

					// $emauserpersonal = $this->session_user;
					// $statementsearch = "SELECT user_id,nameuser,username emails from usuario where username='$searchs'";
					
					// $result = mysqli_query($conection, $statementsearch);

					// while($row= mysqli_fetch_array($result)){
					
					// 	print("<a href='users.php?users=".$row["user_id"]."' class=itemsearch>".$row["nameuser"]."</a>");
					// 	$counterfinded = $conection->affected_rows;

					// }	
					//  print("
					//  	<div class=alltitle>
					// 		<h1 class=titleusers>Usuarios encontrado <strong>".$counterfinded."</strong></h1>
					// 	</div>
		// 				");
		// 	  	}
		// 	}

		// }
		
 	
	 // $searching = new search_user($_POST["search"], $_SESSION["emauser"]);
	 // $searching->getUser();
	?>	

	
</div>
 


<script src="usersearch.js"></script>
</body>
</html>
