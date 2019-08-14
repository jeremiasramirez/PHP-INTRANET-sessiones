<?php
	session_start();


	function welcomeuser($sexo, $girlman){

		define("WOMEN", "femenino");
		define("MAN", "masculino");

		if($sexo==MAN){
			print("<h1 class=user__name id=user__name>
						<p class=emoji>😃</p>Hola ".$girlman."!</h1>");
		}
		if($sexo == WOMEN){
			print("<h1 class=user__name>
				<p class=emoji>😃</p>¡Hola ".$girlman."!</h1>");
		}
		else {
			print("<h1 style='background-color:orange;color:white;margin:5px; width:95%;font-size:18px;text-align:center;font-family:arial;padding:.2em;border-radius:4px;'>
				Termina de completar tu perfil.</h1>");
		}
}
?>