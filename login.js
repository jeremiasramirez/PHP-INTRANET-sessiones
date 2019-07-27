 
let msjText = document.getElementById("messageText");

if(msjText !== null){
let intervalText = setInterval(()=>{

	msjText.style.transition="1s"
	let text = "Muchas gracias por visitarnos!";
	let textQuit = "Quit message";

	if(msjText.textContent == text){
		msjText.textContent = textQuit;
		msjText.style.opacity=".6"
	}
	else{
		msjText.textContent = text;
		msjText.style.opacity="1";
	}

}, 2000)

	msjText.addEventListener("mouseover", (e)=>{
		e.target.classList.add("removing");

		setTimeout(()=>{
			e.target.remove();

		}, 1000)

	}, false)
 }