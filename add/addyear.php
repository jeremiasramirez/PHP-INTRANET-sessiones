 <?php
   include("../model/model.php");
   if (isset($_POST["year"]) && $_GET["id"] && !ctype_space($_POST["year"])){

	   if($_POST["year"] != ""){

		   	$id = $_GET["id"];
		   	$year = $_POST["year"];
		   	$year = strip_tags($_POST["year"]);
	        $year = addslashes($_POST["year"]);
	        $year = htmlentities(($_POST["year"]), ENT_QUOTES);

		  	mysqli_query($conection, "UPDATE usuario SET fecha_nac='$year' WHERE user_id = '$id'");
  			header("Location: ../users.php");

		  }
          header("Location: ../users.php");
   }

?>
