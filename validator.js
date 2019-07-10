let sendata = document.getElementById("sendData");
let user = document.getElementById("user");
let password = document.getElementById("password");



if (sendata) {
	sendata.addEventListener("click", (e)=>{
		if((user.value == "") || ( password.value == "")){
			e.preventDefault();
		}
	}, false);
}