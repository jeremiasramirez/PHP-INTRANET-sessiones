 <?php
   include("../model/model.php");
   if (isset($_POST["casado"]) && $_GET["id"] && !ctype_space($_POST["casado"])){

	   if($_POST["casado"] != ""){

		   	$id = $_GET["id"];
		   	$casado = $_POST["casado"];
		   	$casado = strip_tags($_POST["casado"]);
	        $casado = addslashes($_POST["casado"]);
	        $casado = htmlentities(($_POST["casado"]), ENT_QUOTES);

		  	mysqli_query($conection, "UPDATE usuario SET casado='$casado' WHERE user_id = '$id'");
  			header("Location: ../users.php");

		  }
          header("Location: ../users.php");
   }

?>
