<?php 

function thank($sessions, $value){
	if(isset($sessions) and $sessions == $value){
		print("<p class=visitweb' id=messageText>Muchas gracias por visitarnos!</p>");
	}
}

