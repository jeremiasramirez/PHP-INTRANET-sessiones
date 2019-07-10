let sendata = document.getElementById("sendData");
let user = document.getElementById("user");
let password = document.getElementById("password");
let errorlogin = document.getElementById("error_login");



if (sendata) {
	sendata.addEventListener("click", (e)=>{
		if((user.value == "") || ( password.value == "")){
				e.target.style.backgroundColor="#bbb"
				user.value = "";
				password.value = "";
			 
		
			errorlogin.textContent = "Error login";
			errorlogin.classList.add("errormsj", "scalade")
			console.log("a")
			e.preventDefault();
			navigator.vibrate([80],[50]);
			setTimeout(()=>{
				errorlogin.classList.remove("scalade")
			}, 300)

		}
	}, false);
}