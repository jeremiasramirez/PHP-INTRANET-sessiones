 <?php
   $conection = new mysqli("localhost", "jere", "0847", "jeremias");
   if (isset($_POST["pais"]) && $_GET["id"] && !ctype_space($_POST["pais"])){

	   if($_POST["pais"]!=""){
		   	$id = $_GET["id"];
		   	$pais = $_POST["pais"];
		   	$pais = strip_tags($_POST["pais"]);
		   	$pais = addslashes($_POST["pais"]);
		  	mysqli_query($conection, "UPDATE usuario SET pais='$pais' WHERE user_id = '$id'");
  			header("Location: ../user.php");

	  	}
   }
  	?>