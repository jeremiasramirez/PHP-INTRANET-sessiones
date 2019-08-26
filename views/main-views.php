<?php
require "model/model.php";
	 
	class main_views extends conectionDB{
 
			function mainSetStates($itemstate){

			//getting conection to DB 
			parent::conected();
			global $conection;
			if(isset($itemstate) && $itemstate != ""){

				if(!ctype_space($itemstate)) {
					$data = $itemstate;
					$data = addslashes($data);
					$data = strip_tags($data);
					$statement_insert = "INSERT INTO allstates (stat) VALUES ('$data')";
					$query_insert = mysqli_query($conection, $statement_insert);
 
				}
				
			}
 
		}
		function getState(){
			parent::conected();
			global $conection;
			$statement_show = "SELECT stat FROM allstates";

			$query_show = mysqli_query($conection, $statement_show);

 			while($row = mysqli_fetch_array($query_show)){
			 	print("<p class=data_state id=data_state--js>".$row["stat"]."</p>");
			}
		}
		 
	}

	if($_POST['state']){
		$showmain= new main_views();
		$showmain->mainSetStates($_POST["state"]);
		
	}

