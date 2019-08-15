<?php
// start php code

require_once 'model/model.php';
require_once "views/users-view.php";
require_once "urlmsj/welcome/welcome.php";

$conected = new conectionDB();
$conected->conected();

	session_start();
	define('LOGIN', 'out.php');

	if( (!$_SESSION["name"]) ){			 
		header("Location: ".LOGIN);
	}

// end php code
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
	<link rel="stylesheet" href="public/css/showPerfil.css">
	<link rel="stylesheet" href="add/changeperfil.css">
	<link rel="stylesheet" href="users.css">
	<link rel="stylesheet" href="public/css/showPerfil.css">
	<link rel="stylesheet" href="urlmsj/welcome/welcome.css">
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
 <?php
	 
 	welcomeuser($_SESSION["sexo"], $_SESSION["name"]);
 ?>

<!-- start php code -->
 <section class="perfil__container">
 	<article class="photo__perfil">
 <?php
	 		$conectionDb = new conectionDB;
			$conectionDb->conected();
			global $conection;

 			$ids = $_SESSION["iduser"];

 			if(isset($_GET['users'])){
 				$ids = $_GET['users'];
 			}
 			$statementfoto = null;

 			$queryfoto = mysqli_query($conection, "SELECT photo FROM usuario WHERE user_id='$ids'");
 		

 			$photo = null;
 			while($foto = mysqli_fetch_array($queryfoto)){
 				$photo = $foto['photo'];
 				if(empty($photo)){
 					print("<img src='imgs/user.png' class=img__perfil__fake>");	
 				}
 				else{
 					print("<img src='uploads/perfil/$photo' style=cursor:pointer class=img__perfil__fake id=perfilimg>");
 				}
 			}
 	
 //end of php code
 			 
 ?>
 		 
 			
 	</article>
 	<article class="title__name__container">
 
		
 <?php
//start php code
		
 	$id = $_SESSION["iduser"];
	$country = null;
	$telephone = null;
	/*verificando si el usuario no es el admin, si es el admin se muestra informacion privada
	y podemos editar los datos
	*/
 	if(isset($_GET['users'])){
 		$id = $_GET['users'];
 	}
 	$emailD = null;

 	$statementusers = "SELECT nameuser,
 							emails, sexo,
 							pais, telephone,
 							username, statepersonal, 
 							sexo, countryuser, 
 							religion, casado,
 							fecha_nac FROM usuario WHERE user_id = '$id' ";

  	$state = null;
  	$sexo = null;
  	$countryuser = null;
  	$religion = null;
	$userlogB = null;
	$casado = null;
	$fecha_nac = null;

  	$execusers = mysqli_query($conection, $statementusers);

  	while($row= mysqli_fetch_array($execusers)){

		$casado = $row["casado"];
		$state = $row["statepersonal"];
		$telephone = $row["telephone"];
		$emailD = $row["emails"];
		$countryuser = $row["countryuser"];
  		$sexo = $row["sexo"];
  		$country = $row["pais"];
  		$fecha_nac = $row["fecha_nac"];
		$userlogB = $row["username"];
		$religion = $row["religion"];
  		echo "<h1 class=title__user__perfil>".$row["nameuser"]."</h1>";

  	}

//end of php code
 ?>


<!-- All information -->

 <?php
//start php code

		
//vista de alias de usuario en caso de que exista
 $getstate = new users_view();
 $getstate->getState($state);


//vista de icono de cambiar foto en el perfil del usuario
 $changePhoto_ = new users_view();
 $changePhoto_->changePhoto($id, $_SESSION["iduser"]);


//end of php code
 ?>
</article>
	 
<article class="containerTitleInfoBasic">
	<h1 class="titleInfoBasic">Información básica</h1>
</article>
</section>
	 
 <article class="info__basic">
 	<div class="info1">
		
 <?php
//start php code	
		
 	//mostrado sexo de usuario y agregado en caso que no exista
		 $getsex = new users_view();
		 $getsex->getSex($sexo,  $emailD, $_SESSION["emauser"], $id);

 	// agregado de alias de usuario en caso de que no exista
		 $getalias = new users_view();
		 $getalias->getAliasToPerfil($state,  $emailD, $_SESSION["emauser"], $id);
	 

 	//mostrado y agregado de pais en caso de que no exista
		 $getpais = new users_view();
		 $getpais->getPais($country,  $emailD, $_SESSION["emauser"], $id);
		 

 	//mostrado y agregado de ciudad en caso de que no exista
		 $getcity = new users_view();
		 $getcity->getCity($countryuser,  $emailD, $_SESSION["emauser"], $id);

 	//mostrado y agregado de religion en caso de que no exista
		 $getreligion = new users_view();
		 $getreligion->getReligion($religion,  $emailD, $_SESSION["emauser"], $id);

 	//mostrado y agregado de edad en caso de que no exista
		 $getage = new users_view();
		 $getage->getAge($fecha_nac,  $emailD, $_SESSION["emauser"], $id);
		
		
 	//mostrado de si es casado o no y agregar en caso de que no exista
		 $getcasado = new users_view();
		 $getcasado->getCasado($casado,  $_SESSION["emauser"], $emailD, $id);
 
 

	






//informacion privada ,solo la ve el usuario admin de su cuenta
		 $validateuser = new adminInformationPrivate();
		 $validateuser->validateUser($_SESSION["emauser"], $emailD, 
		 $_SESSION["userlogin"], $userlogB, $telephone, $id);
		
		
//end of php code
?>	
 			
 	<?php print("<p id='iduser' style=opacity:0>$ids</p>");?>	

 	</div>
 </article>

<script type="text/javascript">
	

</script>
<style type="text/css">


 	</style>
<!-- 	 end of code -->
<script src="usersearch.js"></script>
<script src="users.js"></script>
<script src="main.js"></script>
<script src="public/js/showPerfiClick.js"></script>
<script src="add/changeperfil.js"></script>
<script src="urlmsj/welcome/welcome.js"></script>

</body>
</html>
