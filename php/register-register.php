<?php
include "../model/model.php";

$conectionDb = new conectionDB();
		$conectionDb->conected();
		global $conection;

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
				$user = strtolower($user);
				// $user =htmlentities(($_POST["newuser"]), ENC_QUOTES);

				$email= $_POST["newemail"];
				$email = strip_tags($_POST["newemail"]);
				$email = addslashes($_POST["newemail"]);
				$email = strtolower($email);
				// $email = htmlentities(addslashes($_POST["newemail"]), ENC_QUOTES);

				$pass= $_POST["newpassword"];
				$pass = strip_tags($_POST["newpassword"]);
				$pass = addslashes($_POST["newpassword"]);
				// $pass = htmlentities(addslashes($_POST["newpassword"]), ENC_QUOTES);


			$conectoruser= false;
			$statementshowusers = "SELECT emails, username FROM usuario";
			$queryusers = mysqli_query($conection, $statementshowusers);

			while($users=mysqli_fetch_array($queryusers)){
				global $conectoruser;
				if($users["username"] === $user || $users["emails"] === $email){
					$conectoruser=true;
				}

			}
			 $randomId=rand()*200;
		 
			if($conectoruser==false){
				$statementregister = "INSERT INTO usuario (nameuser, emails, userpass, username) VALUES ('$name','$email','$pass','$user')";
					$queryexec = mysqli_query($conection, $statementregister);

				header("Location: ../login.php?registered=true");
			}
			else{
				header("Location: ../register.php?noregistered=true");	
			}

		 
		// }
	}
}



?>
