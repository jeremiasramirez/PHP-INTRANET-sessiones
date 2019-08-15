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

}
?>