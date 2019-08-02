<?php
include "model/model.php";
	 
	class main_views extends conectionDB{

			function __construct($itemstate){
				$this->itemstate = $itemstate;
			}
			function mainGetStates(){

			//getting conection to DB 
			parent::conected();
			global $conection;
			if(isset($this->itemstate) && $this->itemstate != ""){

				if(!ctype_space($this->itemstate)) {
					$data = $this->itemstate;
					$data = addslashes($data);
					$data = strip_tags($data);
					$statement_insert = "INSERT INTO allstates (stat) VALUES ('$data')";
					$query_insert = mysqli_query($conection, $statement_insert);
 
				}
				
			}
			$statement_show = "SELECT stat FROM allstates";

			$query_show = mysqli_query($conection, $statement_show);

 			while($row = mysqli_fetch_array($query_show)){
			 	print("<p class=data_state id=data_state--js>".$row["stat"]."</p>");
			}

		}
	}
 ?>