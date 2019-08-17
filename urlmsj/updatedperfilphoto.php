<?php 

function messageupdateperfilphoto($message, $value){
	if(isset($message) && ($message==1)){
		print("<p style='text-align:center;border-radius:5px;bottom:0;z-index:10000;background-color:lightgreen; color:white;padding: .3em 1em;font-family:arial;position:fixed;width:100%'>
				Foto de perfil actualizada <span class='fas fa-check'></span></p>");
 	}
}

