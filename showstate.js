		let containerStates = document.getElementById("statesitem");
		let itemStates = containerStates.querySelectorAll("#data_state--js");
		if(containerStates && itemStates){

		for(let item=0; item < itemStates.length; item++){
			itemStates[item].addEventListener("click", (e)=>{
				let targ = e.target.textContent

				let contentSt = document.createElement("div");
					contentSt.setAttribute("class","alls");
					contentSt.setAttribute("id","containerAll");
					document.body.insertAdjacentElement("afterbegin", contentSt);
					
					let contentEl = document.createElement("p");
						contentEl.textContent = targ
						contentEl.setAttribute("class", "data_state tops stateel")
						contentEl.setAttribute("id", "elState")

						contentSt.appendChild(contentEl)

					let timingClose = document.createElement("span");
						timingClose.textContent = "X"
						timingClose.setAttribute("class", "timingClose");

						contentSt.appendChild(timingClose)
					let barr = 100;

					let barraTiming = document.createElement("span");
						barraTiming.style.height="8px"
						barraTiming.style.position="absolute"
						barraTiming.style.top="0"
						barraTiming.style.zindex="800"
						barraTiming.style.width= barr + "%"
						barraTiming.style.backgroundColor="orange"
						barraTiming.setAttribute("class", "");

						contentSt.insertAdjacentElement("afterbegin",barraTiming)


					let intervalTiming = setInterval(()=>{

							barr -= 1;
		 
							barraTiming.style.width= barr + "%"
						 
							if(barr < 1){
								contentSt.classList.add("goState");
									setTimeout(()=>{
										contentSt.remove()
									},100)
								clearInterval(intervalTiming);
							 
							}

					}, 150)
						timingClose.addEventListener("click", (e)=>{
							contentSt.classList.add("goState");
							setTimeout(()=>{
								contentSt.remove()
							},2000)
						})
						contentSt.addEventListener("click", (e)=>{
							// contentSt.remove()
							barr = 100
							barraTiming.style.width= barr + "%"
						})	
						// contentSt.addEventListener("mouseover", (e)=>{
						// 	contentSt.classList.add("goState");
						// 	setTimeout(()=>{
						// 		contentSt.remove()
						// 	},2000)
						// })

			}, false);
		}
	}