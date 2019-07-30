 <?php
   include("../model/model.php");
   if (isset($_POST["religion"]) && $_GET["id"] && !ctype_space($_POST["religion"])){

	   if($_POST["religion"] != ""){

		   	$id = $_GET["id"];
		   	$religion = $_POST["religion"];
		   	$religion = strip_tags($_POST["religion"]);
        $religion = addslashes($_POST["religion"]);
        $religion = htmlentities(($_POST["religion"]), ENT_QUOTES);

		  	mysqli_query($conection, "UPDATE usuario SET religion='$religion' WHERE user_id = '$id'");
  			header("Location: ../users.php");

		  }
          header("Location: ../users.php");
   }

?>
