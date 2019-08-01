<?php
// include "model/model.php";
	class main_views{

		public function showState($state){

			if(isset($state) && $state != ""){

				if(!ctype_space($state)) {
					$data = $state;
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