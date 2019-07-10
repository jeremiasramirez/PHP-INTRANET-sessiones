let sendata = document.getElementById("sendData");
let user = document.getElementById("user");
let password = document.getElementById("password");
let errorlogin = document.getElementById("error_login");



if (sendata) {
	sendata.addEventListener("click", (e)=>{
		if((user.value == "") || ( password.value == "")){
			errorlogin.textContent = "Error login";
			console.log("a")
			e.preventDefault();

		}
	}, false);
}