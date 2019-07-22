<?php
session_start();
 
   include"../model/model.php";

   	$id = $_SESSION["iduser"];
   	print_r($_FILES);
   	if((isset($_FILES["photoperfil"]["name"])) && $_FILES["photoperfil"]["error"]==UPLOAD_ERR_OK){

		$destinate="../uploads/perfil/";
		$nameimg = $_FILES["photoperfil"]["name"];
		$nameimg = $id.rand(0,20000).'.png';

		$destinate = $destinate . $nameimg;
		if(move_uploaded_file($_FILES["photoperfil"]["tmp_name"], $destinate) && $_FILES["photoperfil"]["type"]!="png"){
			mysqli_query($conection, "UPDATE usuario SET photo='$nameimg' WHERE user_id = '$id'");
		  	header("Location: ../users.php");

		}
		  	header("Location: ../users.php");

 
}
 		
?>