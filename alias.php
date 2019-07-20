   <?php 
   $conection = new mysqli("localhost", "root", "", "intranetuser");
   if (isset($_POST["alias"]) && $_GET["id"] && !ctype_space($_POST["alias"])){

	   if($_POST["alias"]!=""){
		   	$id = $_GET["id"];
		   	$alias = $_POST["alias"];
		   	$alias = strip_tags($_POST["alias"]);
		   	$alias = addslashes($_POST["alias"]);
		  	mysqli_query($conection, "UPDATE usuario SET statepersonal='$alias' WHERE user_id = '$id'");
		  	header("Location: main.php");
	  	}
   }
  	header("Location: user.php");
  ?>