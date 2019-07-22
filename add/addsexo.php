 <?php
   include "../model/model.php";
   if (isset($_POST["sexo"]) && $_GET["id"] && !ctype_space($_POST["sexo"])){

	   if($_POST["sexo"]!=""){
		   	$id = $_GET["id"];
		   	$sexo = $_POST["sexo"];
		   	$sexo = strip_tags($_POST["sexo"]);
		   	$sexo = htmlentities(addslashes($_POST["sexo"]), ENT_QUOTES);
		  	mysqli_query($conection, "UPDATE usuario SET sexo='$sexo' WHERE user_id = '$id'");
  			header("Location: ../users.php");

		  }
		  header("Location: ../users.php");
   }
  			 
  	?>