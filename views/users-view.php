<?php 
class users_view{

 	public function getState($state){

 		if($state != ""){
  			print("<p class=statepersonal>($state)</p>");
  		}
 	}
 	public function changePhoto($id, $sessions){

 		if($id == $sessions){
			print("<div class=container__change id=container__change>
						<a href='a.php?id=$id' class='fas fa-camera' id=changePerfilLink></a>
					</div>");
  		}
 	}
 	public function setSex($id){
 		print("<form class='alias form__incomplete' method='post' action='add/addsexo.php?id=$id'>
 			  	
  					Masculino <input type=radio name='sexo' value=masculino>
 					<br>
 			    
  					Femenino <input type=radio name='sexo' value=femenino>
 			  		<br>
 			  		<br>

  					<button>Agregar sexo</button>
  				</form>");
 	}
 	public function getSex($sexo, $emailD, $sessions, $id){
 			if($sexo == ""){
	 			if($emailD == $sessions){
	 			 $this->setSex($id);
	 		}
 		}
 		else{
			if( ($sexo == "masculino") ){
				print("<p class=info__info id=male><i class='fas fa-male'></i> Sexo: <strong>$sexo</strong></p>");
			}
			else{
				print("<p class=info__info id=male><i class='fas fa-female'></i> Sexo: <strong>$sexo</strong></p>");
			}
		 }
 	}
 	 public function setAliasToPerfil($id){
 	
		print("<form class=alias method='post' action='add/alias.php?id=$id'>
			<input type=text name='alias' placeholder='Tu alias ej. the Wolf'>
			<button>Agregar alias</button>
			</form>"); 
	 
	}
 	public function getAliasToPerfil($state,  $emailD, $sessions ,$id){
 		 if( ($state == "") ) {
			if( ($emailD == $sessions) ){
			 	$this->setAliasToPerfil($id);
			}
		}
 		else{
			print("<p class=info__info><i class='fas fa-signature'></i> Alia: <strong>" .$state."</strong></p>");
		}
 	}

 	public function getPais($country,  $emailD, $sessions, $id){

		 if($country == ""){
 			if($emailD == $sessions){
 				$this->setPais($id);
 			}
 		}
 		else{
 			print("<p class=info__info><i class='fas fa-globe-asia'></i> Pais: <strong>$country</strong></p>");
 		}
	}
 	public function setPais($id){

 		print("<form class=alias method='post' action='add/addpais.php?id=$id'>
  			<input type=text name='pais' placeholder='agrega tu pais'>
  			<button>Agregar pais</button>
  			</form>");

 	}
	public function setCity($id){
		
		print("<form class=alias method='post' action='add/addcountry.php?id=$id'>
  				<input type=text name='countryuser' placeholder='agrega tu ciudad'>
  				<button>Agregar ciudad</button>
  				</form>");

	}
	public function getCity($countryuser,  $emailD, $sessions, $id){
		if($countryuser == ""){
 			if($emailD == $sessions){

 				$this->setCity($id);
 			}
 		}
 		else{
 			print("<p class=info__info id=city><i class='fas fa-city'></i> Ciudad: <strong>$countryuser</strong></p>");
		}
	}
	public function setReligion($id){
			print("<form class=alias method='post' action='add/addreligion.php?id=$id'>
  				<input type=text name='religion' placeholder='Tu religion(opcional)'>
  				<button>Agregar religion</button>
  				</form>");
	}
	public function getReligion($religion,  $emailD, $sessions, $id){

		if($religion == ""){
 			if($emailD == $sessions){
 				$this->setReligion($id);
 			}
 		}
 		else{
 			print("<p class=info__info><i class='fas fa-church'></i> Religion: <strong>$religion</strong></p>");
		 }		  
	}

	public function setAge($id){
		 print("<form class=alias method='post' action='add/addyear.php?id=$id'>
  			<input type=number name='year' placeholder='Ej. 1994'>
  			<button>Agregar año de nacimiento</button>
  			</form>");
	}
	public function getAge($fecha_nac,  $emailD, $sessions, $id){

		 if($fecha_nac == ""){
 			if($emailD == $sessions){
 				$this->setAge($id);
 			}
 		}
 		else{
 			//devolviendo edad basado en la fecha de nacimiento
 			$timess = getdate();
 			$year = ($timess["year"] - intval($fecha_nac));

 			print("<p class=info__info id=age><i class='fas fa-minus'></i> Edad: <strong>$year años</strong></p>");
 		 
		 }
	}
	public function setCasado($id){

		print("<h1 class=title-perso style=text-align:center>Casado</h1>");
 			print("<form class='alias form__incomplete' method='post' action='add/addcasado.php?id=$id'>
 			  	
  					Si <input type=radio  name='casado' value=Si>
 					<br>
 			  
  					No <input type=radio name='casado' value=No>
 			  		<br>
 			  		<br>

  				<button>Agregar</button>
  				</form>");
  				
	}
	public function getCasado($casado, $sessions, $emailD, $id){

 		if($casado == ""){
 			if($sessions == $emailD ){
 				$this->setCasado($id);	
 			}
 		}
 		else{
		 	print("<p class=info__info><i class='fas fa-heart'></i> Casado/a: <strong>$casado</strong></p>"); 	 
		 }
	}

}

class adminInformationPrivate extends users_view{
	
	public function personalInformation(){
			print("<article class=info-perso>
				<h1 class=title-perso>Información personal</h1>
				</article>");

			print("<article>
				<h1 class='title-perso' style=font-size:15px;text-align:center;color:#aaa;>Por seguridad esta información solo la puede ver usted <span class='fas fa-lock'></span></h1>
				</article>");
	}
	function showEmail($emailD){
			print("<p class=info__info><i class='far fa-envelope-open'></i> Mi correo: <strong>" .$emailD."</strong></p>");	
	}
	function myUser($sesslogin){
		print("<p class=info__info><i class='far fa-user-circle'></i> Mi usuario: <strong>" .$sesslogin."</strong></p>");	
	}
	function setTelephone($id){
			print("<form class=alias method='post' action='add/addtelephone.php?id=$id'>
				<input type=text name='tel' placeholder='agrega tu telefono'>
				<button>Agregar telefono</button>
				</form>");
	}
	function getTelephone($telephone){

		print("<p class=info__info><i class='fas fa-phone'></i> Mi telefono: <strong><a href=''>" .$telephone."</a></strong></p>");	 

	}
	function validateUser($sessions, $emailD, $sesslogin, $userlogB, $telephone, $id){
				
				if($sessions === $emailD){
					$this->personalInformation();
					$this->showEmail($emailD);
				}
				if($sesslogin == $userlogB){
					$this->myUser($sesslogin);
				}
				if($telephone == ""){
					if($sessions == $emailD){
						$this->setTelephone($id);
					}			
				}
				if($sessions == $emailD){
					$this->getTelephone($telephone);
				}
	}

}













?>
