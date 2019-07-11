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

