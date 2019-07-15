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
						contentEl.setAttribute("class", "data_state tops")

						contentSt.appendChild(contentEl)

					let timingContainer = document.createElement("div");
						timingContainer.setAttribute("class", "timingContainer")
						contentSt.insertAdjacentElement("afterbegin",timingContainer)
						 
					let timing = document.createElement("p");
						timing.textContent = 5
						timing.setAttribute("class", "timing")

						timingContainer.insertAdjacentElement("afterbegin",timing)

					let timingClose = document.createElement("span");
						timingClose.textContent = "X"
						timingClose.setAttribute("class", "timingClose");

						contentSt.appendChild(timingClose)

					let counterTiming = 5;

					let intervalTiming = setInterval(()=>{

							counterTiming -= 1;
							timing.textContent = counterTiming;

							if(counterTiming < 1){
						
								contentSt.classList.add("goState");

							setTimeout(()=>{
								contentSt.remove()
							},2000)
								clearInterval(intervalTiming);
							 
							}

					}, 1500)
						timingClose.addEventListener("click", (e)=>{
							contentSt.classList.add("goState");
							setTimeout(()=>{
								contentSt.remove()
							},2000)
						})
						contentSt.addEventListener("click", (e)=>{
							// contentSt.remove()
							counterTiming=0
						})

			}, false);
		}
	}