<?php
	session_start();


	function welcomeuser($sexo){
		if($sexo=="masculino"){
			print("<h1 class=user__name>
						<p class=emoji>😃</p>
						¡Bienvenido ".$_SESSION["name"].
					"!</h1>");
	}
	else{
		print("<h1 class=user__name>
					<p class=emoji>😃</p>
					¡Bienvenida ".$_SESSION["name"].
				"!</h1>");
	}
}


?>