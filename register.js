let sendata = document.getElementById("sendData");

let nameuser = document.getElementById("newname");
let emailuser = document.getElementById("newemail");
let newuser = document.getElementById("newuser");
let newpassword = document.getElementById("newpassword");

let errorlogin = document.getElementById("error_login");
let counters = document.getElementById("counter");



if (sendata) {
	sendata.addEventListener("click", (e)=>{
		if((nameuser.value == "") || ( emailuser.value == "") || (newpassword.value == "")){
				e.target.style.backgroundColor="#bbb"
		if(errorlogin){
			
			errorlogin.textContent = "Error login";
			errorlogin.classList.add("errormsj", "scalade")
			e.preventDefault();
			navigator.vibrate([80],[50]);
			setTimeout(()=>{
				errorlogin.classList.remove("scalade")
			}, 300)
		}

		}
	}, false);
}
