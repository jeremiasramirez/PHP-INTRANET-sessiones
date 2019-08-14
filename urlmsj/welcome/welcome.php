<?php
	session_start();


	function welcomeuser($sexo, $girlman){

		define("WOMEN", "femenino");
		define("MAN", "masculino");

		if($sexo==MAN){
			print("<h1 class=user__name id=user__name>
						<p class=emoji>😃</p>¡Bienvenido ".$girlman."!</h1>");
		}
		if($sexo == WOMEN){
			print("<h1 class=user__name>
				<p class=emoji>😃</p>¡Bienvenida ".$girlman."!</h1>");
		}
		else {
			print("<h1 style='background-color:red;color:white; width:99%;font-size:18px;
				text-align:center;font-family:arial;padding:.2em;border-radius:4px;'>
			Termina de completar tu perfil.</h1>");
		}
}


?>