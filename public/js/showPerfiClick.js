



class showPerfil{

    createView(){
        let viewContainer = document.createElement("div");
            viewContainer.setAttribute("class", "showPerfil")
            viewContainer.setAttribute("id", "showPerfil")
            if(!document.getElementById("showPerfil")){
                document.body.insertAdjacentElement("beforebegin", viewContainer) 
            }

             let containerForm = document.createElement("div")
                 containerForm.setAttribute("id", "containerForm")
                 containerForm.setAttribute("class", "containerForm")
                 viewContainer.appendChild(containerForm);

          let closeView = document.createElement("p");
              closeView.textContent = "X";
              closeView.setAttribute("class", "closeview")
              closeView.setAttribute("id", "closeview")
              containerForm.insertAdjacentElement("beforebegin", closeView)

              closeview.addEventListener("click", (e)=>{
                  let containerClose = document.getElementById("showPerfil");
                  if(containerClose){
                      containerClose.classList.add("goState")
                      setTimeout(()=>{
                          containerClose.remove()
                      }, 500)

                  }
              }, false);


    }


}
let perfilimg = document.getElementById("perfilimg");
perfilimg.addEventListener("click", (e)=>{
        let instance = new showPerfil();
            instance.createView();

    }, false);

