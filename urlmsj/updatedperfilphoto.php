<?php 

function messageupdateperfilphoto($message, $value){
	if(isset($message) && ($message==1)){
		print("<p id=back style='text-align:center;border-radius:5px;cursor:pointer;bottom:0;z-index:10000;background-color:lightgreen; color:white;padding: 1em 1em;font-family:arial;position:fixed;width:100%;font-size:18px;margin:-0px'>
				Foto de perfil actualizada <span class='fas fa-check' style='background-color:green;border-radius:50%;padding:.2em'></span></p>");
 	}
}
?>
