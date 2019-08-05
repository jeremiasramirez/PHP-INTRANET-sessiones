<?php
include("../model/model.php");
   
class Religion extends conectionDB{
 
  public function __construct($religion, $id_user){
    $this->religion = $religion;
    $this->id_user = $id_user;
  }

  public function addReligion(){
      if (isset($this->religion) && $this->id_user &&
           !ctype_space($this->religion) && !empty($this->religion) &&
           !empty($this->id_user)){

        if($this->religion != ""){
       
          $id = $this->id_user;
          $religion = $this->religion;

          //evitando sqlinjection 
          $id = strip_tags($id);
          $id = addslashes($id);
          $id = htmlentities(($id), ENT_QUOTES);

          $religion = strip_tags($religion);
          $religion = addslashes($religion);
          $religion = htmlentities(($religion), ENT_QUOTES);

          //conection to DB
          parent::conected();
          global $conection;
          //exec statements

          $query =  mysqli_query($conection, "UPDATE usuario SET religion='$religion' WHERE user_id = '$id'");

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
 
$religion = new Religion($_POST["religion"], $_GET["id"]);
$religion->addReligion();

 
?>


