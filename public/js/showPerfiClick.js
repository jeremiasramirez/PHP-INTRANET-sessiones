



class showPerfil{

    createView(imguser){
        let viewContainer = document.createElement("div");
            viewContainer.setAttribute("class", "showPerfil")
            viewContainer.setAttribute("id", "showPerfil")
            if(!document.getElementById("showPerfil")){
                document.body.insertAdjacentElement("beforebegin", viewContainer) 
            }

             let containerForm = document.createElement("div")
                 containerForm.setAttribute("id", "containerPerfilClick")
                 containerForm.setAttribute("class", "containerPerfilClick")
                 viewContainer.appendChild(containerForm);

          let closeView = document.createElement("p");
              closeView.textContent = "X";
              closeView.setAttribute("class", "closeperfil")
              closeView.setAttribute("id", "closeperfil")
              containerForm.insertAdjacentElement("beforebegin", closeView)
            

              let containiMG = document.createElement("div");
                containiMG.setAttribute("id", "containImg")
                containiMG.setAttribute("class", "containImg")
                containerForm.appendChild(containiMG);

            let imgUser = document.createElement("img");
                imgUser.setAttribute("class", "imgUser")
                imgUser.setAttribute("src", imguser.src)
                imgUser.setAttribute("id", "imgUser")
                imgUser.setAttribute("class", "imgUser")
                containiMG.appendChild(imgUser);

              closeView.addEventListener("click", (e)=>{
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
        let imguser = e.target;
        let instance = new showPerfil();
            instance.createView(imguser);

    }, false);

