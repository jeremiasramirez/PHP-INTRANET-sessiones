class createViewState{

    selectPhoto(){

    }
    createView(){
        let viewContainer = document.createElement("div");
            viewContainer.setAttribute("class", "viewContainer")
            viewContainer.setAttribute("id", "viewContainer")
            if(!document.getElementById("viewContainer")){
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
                  let containerClose = document.getElementById("viewContainer");
                  if(containerClose){
                      viewContainer.classList.add("goState")
                      setTimeout(()=>{
                          containerClose.remove()
                      }, 500)

                  }

              }, false);
              let iduser = document.getElementById("iduser");
                  
                 
              let formchange = document.createElement("form");
                    formchange.setAttribute("class", "form__changes");
                    formchange.setAttribute("id", "form__changes");
                    formchange.setAttribute("action", `add/changeperfil.php?id=${iduser.textContent}`);
                    formchange.setAttribute("method", "post");
                    formchange.setAttribute("enctype", "multipart/form-data");
                    containerForm.appendChild(formchange)

                let imguserfake = document.createElement("img");
                    imguserfake.setAttribute("src","imgs/user2.png");
                    imguserfake.setAttribute("class", "imguserfake");
                    imguserfake.setAttribute("id", "imguserfake");
                    formchange.appendChild(imguserfake);
                
                  if(document.getElementById("imguserfake")){

                    document.getElementById("imguserfake").addEventListener("click", ()=>{

                    

                      let containerFloatingButton = document.createElement("div");
                          containerFloatingButton.setAttribute("class", "containerfloatingbutton");
                          containerFloatingButton.setAttribute("id", "containerfloatingbutton");
                          containerFloatingButton.textContent="Abrir fotos ";
                          formchange.appendChild(containerFloatingButton);

                      let filechange = document.createElement("input");
                        filechange.setAttribute("type","file");
                        filechange.setAttribute("name", "photoperfil");
                        filechange.setAttribute("class", "photoinput");
                        filechange.setAttribute("id", "photoinput");
                        containerfloatingbutton.appendChild(filechange);

                        document.getElementById("photoinput").addEventListener("click",()=>{
                          document.getElementById("containerfloatingbutton").style.opacity="0"
                        })

                    })
                  }


                let buttonchange = document.createElement("button");
                    buttonchange.setAttribute("class", "buttonchange");
                    buttonchange.setAttribute("id", "buttonchange");
                    buttonchange.textContent="Actualizar foto";
                   formchange.appendChild(buttonchange);

    }


}




let changeLink = document.getElementById("changePerfilLink");

if(changeLink){
    changeLink.addEventListener("click", (e)=>{
        e.preventDefault();
        let instance = new createViewState();
            instance.createView();
    }, false);
}