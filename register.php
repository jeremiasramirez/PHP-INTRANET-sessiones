<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
</head>
<body style="background-color: #333">

<div class="responsivelogin">
	<p class="title_login fas fa-user"></p>

	<form action="register.php" method="POST" class="login ">

		<h3 class="title title2" style="color:#444">Registro</h3>
		<?php
				if(isset($_GET["noregistered"]) and $_GET["noregistered"] =="true"){
			print("<p class=visitweb style=background-color:red;color:white;>Este usuario ya existe, intente con otro.</p>");
		}
		?>
		<p id="error_login" class="error_login"></p>
		<input type="text" name="newname" placeholder="Nombre completo" id="newname" autocomplete="off">
		<input type="text" name="newuser" placeholder="Ej. dolphi21" id="newuser" autocomplete="off">
		<input type="email" name="newemail" placeholder="Email" id="newemail" autocomplete="off">
		<input type="password" name="newpassword" placeholder="Password" id="newpassword" autocomplete="off">

		<button id="sendData">Registrarse</button>
	
	</form>


	

</div>




<?php
include "model/model.php";


if(isset($_POST["newname"]) &&  isset($_POST["newuser"]) &&  isset($_POST["newemail"]) && isset($_POST["newpassword"])){

	if(!empty($_POST["newname"]) &&  !empty($_POST["newuser"]) && !empty($_POST["newemail"]) && !empty($_POST["newpassword"])){

		// if(!ctype_space($_POST["newname"]) &&  !ctype_space($_POST["newuser"])  &&  !ctype_space($_POST["newemail"]) && !ctype_space($_POST["newpassword"])){
				
				$name= $_POST["newname"];
				$name = strip_tags($_POST["newname"]);
				$name = addslashes($_POST["newname"]);
				// $name = htmlentities(addslashes($_POST["newname"]), ENC_QUOTES);

				$user= $_POST["newuser"];
				$user =strip_tags($_POST["newuser"]);
				$user =addslashes($_POST["newuser"]);
				// $user =htmlentities(($_POST["newuser"]), ENC_QUOTES);

				$email= $_POST["newemail"];
				$email = strip_tags($_POST["newemail"]);
				$email = addslashes($_POST["newemail"]);
				// $email = htmlentities(addslashes($_POST["newemail"]), ENC_QUOTES);

				$pass= $_POST["newpassword"];
				$pass = strip_tags($_POST["newpassword"]);
				$pass = addslashes($_POST["newpassword"]);
				// $pass = htmlentities(addslashes($_POST["newpassword"]), ENC_QUOTES);



			$statementshowusers = "SELECT nameuser,emails,userpass username FROM usuario";
			$conectoruser= false;
			$queryusers = mysqli_query($conection, $statementshowusers);

			while($users=mysqli_fetch_array($queryusers)){

				if( $users["emails"] === $email ||  $user === $users["username"]){
					$conectoruser=true;
				}

			}

			if($conectoruser==false){
				$statementregister = "INSERT INTO usuario (nameuser, emails, userpass, username) VALUES ('$name','$email','$pass','$user')";
					$queryexec = mysqli_query($conection, $statementregister);

				header("Location: login.php?registered=true");
			}
			else{
				header("Location: register.php?noregistered=true");	
			}

		 
		// }
	}
}



?>










<script src="login.js"></script>
<script src="register.js"></script>
</body>
</html>

