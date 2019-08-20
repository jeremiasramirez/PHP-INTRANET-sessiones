		let containerStates = document.getElementById("statesitem");
		let itemStates = containerStates.querySelectorAll("#data_state--js");
		function optimizeTextState(elState, longestState, barr){

						 
							 if(longestState > 430){
								if(window.screen.width < 500){
									barr -= 2;
									elState.style.transform="scale(.6)"
									elState.style.fontSize="20px"
								}
							}
								if(longestState > 600){
								if(window.screen.width < 500){
									barr -= 10;
									elState.style.fontSize="17px"
									elState.style.transform="scale(.7)"
								}
							}
							if(longestState >= 355){
								if(window.screen.width <= 500){
									elState.style.transform="scale(.8)"
									barr -= 2;
									
								}
							}
		}
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

						// get size of text state
						let elState = document.getElementById("elState")
							let valueStringState = new String(elState.textContent);
							let valueState = [valueStringState];
							let counterValueState = valueState[0][0];
							let longestState = valueState[0].length;

						 
						
					 
		
							 
					let intervalTiming = setInterval(()=>{
							 	
							
							barr -= 5
							optimizeTextState(elState, longestState, barr);
						 
						 

						
							 
		 
							barraTiming.style.width= barr + "%"
						 
							if(barr < 1){
								contentSt.classList.add("goState");
									setTimeout(()=>{
										contentSt.remove()
									},2000)
								clearInterval(intervalTiming);
							 
							}

					}, 1000)
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