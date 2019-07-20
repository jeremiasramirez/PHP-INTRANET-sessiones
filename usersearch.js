function emptySeach(){
	let searchName = document.getElementById("searchname");
	let btnSearch = document.getElementById("btn__search");
	if(searchName && btnSearch){
		btnSearch.addEventListener("click", (e)=>{
			if(searchname.value == ""){
				return e.preventDefault();
			}
		},false)
	}
} 
emptySeach();
