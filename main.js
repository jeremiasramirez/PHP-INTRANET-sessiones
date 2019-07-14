let valpublish = document.getElementById("textpublish");
let sendpublish = document.getElementById("buttonsend_publish");


if(sendpublish){
	sendpublish.addEventListener("click", (e)=>{
		if(valpublish.value == "" || valpublish.value == " " || valpublish.value == "  " || valpublish.value == "   "){
			e.preventDefault();
			e.target.style.backgroundColor="red"
		}
	}, false);
}

let mainHeader =document.getElementById("main__header");
 if(main__header){

 if(window.screen.width <= 330){
	document.addEventListener("scroll", (e)=>{
		if(window.scrollY > 2){
			mainHeader.style.display="none"
		}

		else{
			mainHeader.style.display="block"
		}
	})
 }
  	
 }
