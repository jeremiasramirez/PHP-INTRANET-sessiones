<?php
include "../model/model.php";
session_start();
// $changephoto = new users_view();
// $changephoto->changePhoto($id, $session);
 		$conectionDb = new conectionDB;
		$conectionDb->conected();
		global $conection;

   	if((isset($_FILES["photoperfil"]["name"])) && $_FILES["photoperfil"]["error"]==UPLOAD_ERR_OK && $_FILES["photoperfil"] != ""){

		$destinate="../uploads/perfil/";
		$nameimg = $_FILES["photoperfil"]["name"];
		$nameimg = $id.rand(0,20000).'.png';
		

		$destinate = $destinate . $nameimg;
		if(move_uploaded_file($_FILES["photoperfil"]["tmp_name"], $destinate) && 
			$_FILES["photoperfil"]["type"]!="png"){
  			$id = $_GET["id"];
			mysqli_query($conection, "UPDATE usuario SET photo='$nameimg' WHERE user_id = '$id'");
	 
		  	header("Location: ../users.php?updatephoto=1");

		}
		// else{
		//   	header("Location: ../users.php?errorplatform=errorplatform");
		// }

 
}else{
	header("Location: ../users.php?erroruser=erroruser");
}
 		
?>