<?php
include("../model/model.php");
   
class Year extends conectionDB{
 
  public function __construct($year, $id_user){
    $this->year = $year;
    $this->id_user = $id_user;
  }

  public function addYear(){

      if(isset($this->year) && $this->id_user && !ctype_space($this->year) && 
        !empty($this->year) && !empty($this->id_user)){

        if($this->year != ""){
       
          $id = $this->id_user;
          $year = $this->year;

          //evitando sqlinjection 
          $id = strip_tags($id);
          $id = addslashes($id);
          $id = htmlentities(($id), ENT_QUOTES);

          $year = strip_tags($year);
          $year = addslashes($year);
          $year = htmlentities(($year), ENT_QUOTES);

          //conection to DB
          parent::conected();
          global $conection;
          //exec statements

          $query = 	mysqli_query($conection, "UPDATE usuario SET fecha_nac='$year' WHERE user_id = '$id'");

          if($query){
            header("Location: ../users.php?updated=updated");
          }
          else{
            header("Location: ../users.php?noupdated=noupdated");
          }

      }
    } 
    else{
      header("Location: ../users.php?noupdated=noupdated");
    }


}


}
 
$year = new Year($_POST["year"], $_GET["id"]);
$year->addYear();

 
?>



