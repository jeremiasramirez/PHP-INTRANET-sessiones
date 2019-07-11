<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
</head>
<body style="background-color: #333">

<div class="responsivelogin">
	<p class="title_login fas fa-user"></p>

	<form action="validator.php" method="POST" class="login ">
	<?php
		if(isset($_GET["thank"]) and $_GET["thank"] =="thankyou"){
			print("<p class=visitweb id=messageText>Muchas gracias por visitarnos!</p>");
		}
	?>

		<p id="error_login" class="error_login"></p>
		<input type="text" name="user" placeholder="User" id="user" autocomplete="off">
		<input type="password" name="password" placeholder="Password" id="password" autocomplete="off">

		<button id="sendData">Ingresar</button>
	</form>
	<p class="select__user fas fa-user" ><a href="selectuser.html" class="" style="" > Ingresar como admin</a></p>
	<script>
	 
		let msjText = document.getElementById("messageText");

		let intervalText = setInterval(()=>{
			msjText.style.transition="1s"
			
			if(msjText.textContent == "Muchas gracias por visitarnos!"){
				msjText.textContent = "Quit message";
				msjText.style.opacity=".6"
			}
			else{
				msjText.textContent = "Muchas gracias por visitarnos!"
				msjText.style.opacity="1"
			}
		}, 2000)

		msjText.addEventListener("click", (e)=>{
			e.target.classList.add("removing");
			setTimeout(()=>{
				e.target.remove();
			}, 1000)
		}, false)

	</script>
</div>
















<script src="validator.js"></script>
</body>
</html>

