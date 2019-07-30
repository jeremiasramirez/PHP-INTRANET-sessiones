 <?php
   include("../model/model.php");
   if (isset($_POST["countryuser"]) && $_GET["id"] && !ctype_space($_POST["countryuser"])){

	   if($_POST["countryuser"]!=""){
		   	$id = $_GET["id"];
		   	$countryuser = $_POST["countryuser"];
		   	$countryuser = strip_tags($_POST["countryuser"]);
            $countryuser = addslashes($_POST["countryuser"]);
            $countryuser = htmlentities(($_POST["countryuser"]), ENT_QUOTES);
		  	mysqli_query($conection, "UPDATE usuario SET countryuser='$countryuser' WHERE user_id = '$id'");
  			header("Location: ../users.php");

		  }
          header("Location: ../users.php");
   }
  	?>
