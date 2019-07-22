<?php
   include("../model/model.php");
   if (isset($_POST["tel"]) && $_GET["id"] && !ctype_space($_POST["tel"])){

	   if($_POST["tel"]!=""){
		   	$id = $_GET["id"];
		   	$tel = $_POST["tel"];
		   	$tel = strip_tags($_POST["tel"]);
            $tel = addslashes($_POST["tel"]);
            $tel = htmlentities(($_POST["tel"]), ENT_QUOTES);
		  	mysqli_query($conection, "UPDATE usuario SET telephone='$tel' WHERE user_id = '$id'");
  			header("Location: ../users.php");

		  }
          header("Location: ../users.php");
   }
  	?>