function backpage(){
	history.back();		 
}

let backs = document.getElementById("back");
if(backs){
	backs.addEventListener("click", (e)=>{
		backpage();			 
	}, false);
}
