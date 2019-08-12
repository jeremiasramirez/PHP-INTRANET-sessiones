<?php 

function registeredbool($registered, $value){
	if(isset($registered) and $registered ==$value){
		print("<p class=visitweb>Se ha registrado correctamente!</p>");
	}	
}