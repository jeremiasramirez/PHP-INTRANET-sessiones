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
			let sizeScreen = window.screen.width; 
			 if( sizeScreen <= 330){
				document.addEventListener("scroll", (e)=>{
					if(window.scrollY > 0){
						mainHeader.style.transform="transformY(500px)";
						mainHeader.style.transition=".8s"
						mainHeader.style.opacity="0"
					}
					else{
						mainHeader.style.transform="transformY(0)";
						mainHeader.style.transition="1s"
						mainHeader.style.opacity="1"
					}
				})
			 }	
