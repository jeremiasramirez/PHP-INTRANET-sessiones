<?php
// session_start(); 
function conections(){
	$conection = new mysqli("localhost", "root", "", "intranetuser");
	return $conection;
}
 



?>