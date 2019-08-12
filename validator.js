let sendata = document.getElementById("sendData");
let user = document.getElementById("user");
let password = document.getElementById("password");

let nameuser = document.getElementById("newname");
let emailuser = document.getElementById("newemail");
let newuser = document.getElementById("newuser");
let newpassword = document.getElementById("newpassword");

let errorlogin = document.getElementById("error_login");
let counters = document.getElementById("counter");




let counter = 0;
function messageError(){
	
 	   //validando si no hay otro mensaje de error
    // if(!document.getElementById("error")){
    	counter+=1;
    	let messageBlocked = " Intento";
        let messageError = document.createElement("p");
        if(counter===1){

	        messageError.textContent = "Introduce tu codigo de administrador. "+counter+messageBlocked;
        }
        else{
        	  messageError.textContent = "Introduce tu codigo de administrador. "+counter+" Intentos";
        }
	      
	        messageError.setAttribute("class", "error");
	        messageError.setAttribute("id", "error");
	        document.body.insertAdjacentElement("beforebegin",messageError);
        
    // }


}

(function validationForm(user, password, btn){

    if((user) && (password) && (btn)){

        btn.addEventListener("click", (e)=>{
            
            if( (user.value) == "" || (password.value=="")){
                e.preventDefault();
                messageError();
                document.body.classList.add("bodyError");

                let quitBodyErrorMessage = setTimeout(()=>{
                    document.body.classList.remove("bodyError");
                }, 1000)

                  let timeErrorMessage = setTimeout(()=>{
                        let deleteErrorMessage = document.getElementById("error");

                        if(deleteErrorMessage){
                            deleteErrorMessage.remove();
                        }

                    }, 4000);

              
            }

        }, false);


    }

})(user, password, sendata);
// })(title, btnSend, nameuser, emailuser, newuser, newpassword);















