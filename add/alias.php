   <?php 
   include_once "../model/model.php";
   if (isset($_POST["alias"]) && $_GET["id"] && !ctype_space($_POST["alias"])){

	   if($_POST["alias"]!=""){
		   	$id = $_GET["id"];
		   	$alias = $_POST["alias"];
		   	$alias = strip_tags($_POST["alias"]);
		   	$alias = htmlentities(addslashes($_POST["alias"]), ENT_QUOTES);
		  	mysqli_query($conection, "UPDATE usuario SET statepersonal='$alias' WHERE user_id = '$id'");
		  	header("Location: ../users.php");
	  	}
   }
  	header("Location: ../users.php");
  ?>