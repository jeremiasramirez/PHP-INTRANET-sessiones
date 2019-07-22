<?php
require_once 'model/model.php';
session_start();
define('LOGIN', 'out.php');
if(!$_SESSION["name"]){			 
	header("Location: ".LOGIN);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Search</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
	<link rel="stylesheet" href="usersearch.css">
	<link rel="stylesheet" href="add/changeperfil.css">
	<link rel="stylesheet" href="users.css">

</head>
<body style="background-color: white">
	<header class="main__header" id="main__header">
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
</div>
 
 <section class="perfil__container">
 	<article class="photo__perfil">
 		<?php
 			$ids=$_SESSION["iduser"];
 			$statementfoto = "SELECT photo FROM usuario WHERE user_id='$ids'";
 			$queryfoto = mysqli_query($conection, $statementfoto); 

 			$foto = null;
 			while($foto = mysqli_fetch_array($queryfoto)){
 				$foto = $foto['photo'];
 				if($foto!=""){
 					print("<img src='uploads/perfil/$foto' class=img__perfil__fake>");
 				}
 			}
 			if(!$foto == ""){
 				print("<img src='imgs/user.png' class=img__perfil__fake>");
 			}
 
 		?>
 		 
 			
 	</article>
 	<article class="title__name__container">
 		
 <?php

 	$id = $_SESSION["iduser"];
	$country = null;
	 $telephone = null;
 	if(isset($_GET['users'])){
 		$id = $_GET['users'];
 	}
 	$emailD = null;

 	$statementusers = "SELECT nameuser,
 						emails,sexo,pais,telephone,username,
 				 statepersonal, sexo FROM usuario WHERE user_id = '$id' ";

  	$state = null;
  	$sexo = null;
	 $userlogB = null;
  	$execusers = mysqli_query($conection, $statementusers);

  	while($row= mysqli_fetch_array($execusers)){

		$state = $row["statepersonal"];
		$telephone = $row["telephone"];
		$emailD = $row["emails"];

  		$sexo = $row["sexo"];
  		$country = $row["pais"];
		$userlogB = $row["username"];
  		echo "<h1 class=title__user__perfil>".$row["nameuser"]."</h1>";
  	}


 ?>


 <?php

  if($state != ""){
  	print("<p class=statepersonal>($state)</p>");
  }
 

  if($id == $_SESSION["iduser"]){
	print("<div class=container__change id=container__change>
			<a href=a.php?id=$id class='fas fa-camera' id=changePerfilLink></a>
		</div>");
  }

  ?>


 </article>
<article class="containerTitleInfoBasic">
	<h1 class="titleInfoBasic">Información básica</h1>
</article>
</section>
 <article class="info__basic">
 	<div class="info1">
 		<?php
 	
 			# code...
 	
 		if($sexo == ""){
 			 if($emailD == $_SESSION["emauser"] ){
 			  	print("<form class='alias form__incomplete' method='post' action='add/addsexo.php?id=$id'>
 			  	
  					Masculino <input type=radio name='sexo' value=masculino>
 					<br>
 			    
  					Femenino <input type=radio name='sexo' value=femenino>
 			  		<br>
 			  		<br>

  				<button>Agregar sexo</button>
  				</form>");
  				
 			}
 		}
 		else{
				if($sexo == "masculino"){
					print("<p class=info__info><i class='fas fa-male'></i> Sexo: <strong>$sexo</strong></p>");
				}
				else{
					print("<p class=info__info><i class='fas fa-female'></i> Sexo: <strong>$sexo</strong></p>");
				}
 			
		 }
		 if($state == ""){
			if($emailD == $_SESSION["emauser"] ){
					print("<form class=alias method='post' action='add/alias.php?id=$id'>
					<input type=text name='alias' placeholder='Tu alias ej. the Wolf'>
					<button>Agregar alias</button>
				 </form>");

			}
	}
	else{
		print("<p class=info__info><i class='fas fa-phone'></i> Alia: <strong>" .$state."</strong></p>");	
	}
 		if($country == ""){
 			if($emailD == $_SESSION["emauser"] ){

 			  	print("<form class=alias method='post' action='add/addpais.php?id=$id'>
  				<input type=text name='pais' placeholder='agrega tu pais'>
  				<button>Agregar pais</button>
  				</form>");

 			}
 		}
 		else{
 			print("<p class=info__info><i class='fas fa-globe-asia'></i> Pais: <strong>$country</strong></p>");
		 }
		  
		 if($_SESSION["emauser"] === $emailD){
					
				print("<article class=info-perso>
						<h1 class=title-perso>Información personal</h1>
					</article>");
				
				if($_SESSION["emauser"] === $emailD){
					print("<p class=info__info><i class='far fa-envelope-open'></i> Mi correo: <strong>" .$emailD."</strong></p>");	
				}
				if($_SESSION["userlogin"] == $userlogB){
					print("<p class=info__info><i class='far fa-user-circle'></i> Mi usuario: <strong>" .$_SESSION["userlogin"]."</strong></p>");	
				}

				 if($telephone == ""){
					if($emailD == $_SESSION["emauser"] ){
							print("<form class=alias method='post' action='add/addtelephone.php?id=$id'>
							<input type=text name='tel' placeholder='agrega tu telefono'>
							<button>Agregar telefono</button>
						 </form>");
	   
					}
			}
			else{
				print("<p class=info__info><i class='fas fa-phone'></i> Mi telefono: <strong><a href=''>" .$telephone."</a></strong></p>");	
			}
	
	}
		?>	
 			
 		
 	</div>
 	<!-- <div class="info2">2</div> -->
 </article>
<script src="usersearch.js"></script>
<script src="users.js"></script>
<script src="main.js"></script>
<!-- <script src="showstate.css"></script> -->
<script src="add/changeperfil.js"></script>
</body>
</html>
