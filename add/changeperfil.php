<?php
  include "../model/model.php";
session_start();
 

   	if((isset($_FILES["photoperfil"]["name"])) && $_FILES["photoperfil"]["error"]==UPLOAD_ERR_OK 
   		&& $_FILES["photoperfil"] != ""){

		$destinate="../uploads/perfil/";
		$nameimg = $_FILES["photoperfil"]["name"];
		$nameimg = $id.rand(0,20000).'.png';
		
  		 $conectionDb = new conectionDB();
		$conectionDb->conected();
		global $conection;

		$destinate = $destinate . $nameimg;
		if(move_uploaded_file($_FILES["photoperfil"]["tmp_name"], $destinate) && 
			$_FILES["photoperfil"]["type"]!="png"){
			mysqli_query($conection, "UPDATE usuario SET photo='$nameimg' WHERE user_id = '$id'");
		  	header("Location: ../users.php?update=updated");

		}
		else{
		  	header("Location: ../users.php?errorplatform=errorplatform");
		}

 
}else{
	header("Location: ../users.php?erroruser=erroruser");
}
 		
?>