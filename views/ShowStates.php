<?php
require 'model/model.php';
	

		class ShowState extends conectionDB{

			function getAllStates(){
				parent::conected();
				global $conection;
				$statement_show = "SELECT stat FROM allstates";

				$query_show = mysqli_query($conection, $statement_show);

				 while($row = mysqli_fetch_array($query_show)){
				 	print("<p class=data_state id=data_state--js>".$row["stat"]."</p>");
				 }
			}
		}
?>