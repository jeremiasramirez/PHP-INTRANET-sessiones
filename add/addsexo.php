 <?php
   $conection = new mysqli("localhost", "jere", "0847", "jeremias");
   if (isset($_POST["sexo"]) && $_GET["id"] && !ctype_space($_POST["sexo"])){

	   if($_POST["sexo"]!=""){
		   	$id = $_GET["id"];
		   	$sexo = $_POST["sexo"];
		   	$sexo = strip_tags($_POST["sexo"]);
		   	$sexo = addslashes($_POST["sexo"]);
		  	mysqli_query($conection, "UPDATE usuario SET sexo='$sexo' WHERE user_id = '$id'");
  			header("Location: ../main.php");

	  	}
   }
  			header("Location: ../main.php");
  	?>