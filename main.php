<?php
 	$conection = new mysqli("localhost", "root", "", "intranetuser");
	session_start();
	// if(isset($_SESSION["name"]) && ctype_space($_SESSION["name"])==1)
	// {
		if(!$_SESSION["name"]){
			 
			header("Location: out.php");
		}
	// }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Main</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
	<link rel="stylesheet" href="showstate.css">
	<!-- <link rel="stylesheet" href="hiddenmenu.css"> -->
</head>
<body>
	<header class="main__header" id="main__header">
		<article class="main_main">
			<a href="main.php" class="title fas fa-home" title="Home"></a>
		</article>
		<article class="main_out">
			
		<a href="main.php" class="title fas fa-home"></a>
		<a href="publication.php" class="user_perfil far fa-bell" title="Notification"></a>
		<a href="user.php" class="user_perfil fas fa-user" title="User"></a> 
		<a href="out.php" class="perfil_out fas fa-sign-out-alt" title="Close"></a>
 
		</article>
	</header>

 <main class="main">
 	<div class="search__user">
 		<form action="usersearch.php" method="post">
 			<input type="search" class="search" placeholder="Search user" id="searchname" name="search">
 			<button class="btn__search fas fa-search" id="btn__search" title="Buscar"></button>
 		</form>
 	</div>


 	<div class="publish">
 			<form action="main.php" method="post">

	 		<textarea name="state"  id="textpublish" class="text_publish" cols="20" rows="4" placeholder="¿Como se siente?"></textarea>

	 		<div class="button_publish">
	 			<button id="buttonsend_publish" class="buttonsend_publish">Publicar</button>
	 		</div>
	 	</form>

 	</div>

</main>
<style>
	.viewContainer{
		position: fixed;
		width: 100%;
		height: 100%;
		z-index: 1000;
		background-color: black;
	}
	.containerForm{
		background-color: blue;
		height: 90%;
	}
	.area{
		width: 100%;
		text-align: center;
		padding-top: 2em;
		font-size:25px;
		background-color: black;
		border: none;
		resize: none;
		color: white;
	}
	.button{
		width: 100%;
		padding: 1em;
		border: 0;
		background-color: green;
		color: #ddd;
		font-weight: 600;
		font-family: arial;
		font-size: 18px;
		border-radius: 10px;
		transition: .5s;
	}
	.button:hover{
		transform: scale(.9);
		transition: .5s;
	}
</style>
<script>
	class createViewState{

		createView(){
			let viewContainer = document.createElement("div");
				viewContainer.setAttribute("class", "viewContainer")
				viewContainer.setAttribute("id", "viewContainer")
				document.body.insertAdjacentElement("beforebegin", viewContainer) 
			 	
			 	let containerForm = document.createElement("div")
			 		containerForm.setAttribute("id", "containerForm")
			 		containerForm.setAttribute("class", "containerForm")
			 		viewContainer.appendChild(containerForm);

			 	let form = document.createElement("form");
			 		form.setAttribute("class", "formView");
			 		form.setAttribute("id", "formView");
			 		form.setAttribute("action", "main.php");
			 		form.setAttribute("method", "post");
			 		containerForm.appendChild(form);

			 	let area = document.createElement("textarea");
			 		area.setAttribute("class", "area");
			 		area.setAttribute("id", "area");
			 		area.setAttribute("name", "state");
			 		area.setAttribute("cols", "20");
			 		area.setAttribute("rows", "10");
			 		area.setAttribute("placeholder", "Mi estado");
			 		form.appendChild(area);

			 	let button = document.createElement("button");
			 		button.setAttribute("class", "button");
			 		button.setAttribute("id", "button");
			 		button.textContent= "Enviar estado"
			 		form.appendChild(button);

		}


	}
	
	let areaText = document.getElementById("textpublish");
		areaText.addEventListener("click", (e)=>{
			let instance = new createViewState();
				instance.createView();

		}, false);

</script>

	<article class="title_states" style="text-align: center;color:red;">
			<h1 class="state_publish fas fa-stream"></h1>
		</article>
	
	<section class="states" id="statesitem">
	

		<?php 
	
		
			if(isset($_POST["state"]) && $_POST["state"] != ""){

				if(!ctype_space($_POST["state"])) {
					$data = $_POST["state"];
					$data = addslashes($data);
					$data = strip_tags($data);
					$statement_insert = "INSERT INTO allstates (stat) VALUES ('$data')";
					$query_insert = mysqli_query($conection, $statement_insert);
					unset($_POST["state"]);		 
			}
			
		}
			$statement_show = "SELECT stat FROM allstates";

			$query_show = mysqli_query($conection, $statement_show);

 			while($row = mysqli_fetch_array($query_show)){
			 	print("<p class=data_state id=data_state--js>".$row["stat"]."</p>");
			 }

		 ?>
		 
	</section>
	
 
<script src="main.js"></script>
 <script src="usersearch.js"></script>
 <script src="showstate.js"></script>
</body>
</html>