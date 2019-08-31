<?php
include("../model/model.php");
   
class Telephone extends conectionDB{
  public function __construct($telephone, $id_user){
    $this->telephone = $telephone;
    $this->id_user = $id_user;
  }

  public function addTelephone(){
      if (isset($this->telephone) && $this->id_user &&
           !ctype_space($this->telephone) && !empty($this->telephone) &&
           !empty($this->id_user)){

        if($this->telephone != ""){
       
          $id = $this->id_user;
          $tel = $this->telephone;

          //evitando sqlinjection 
          $id = strip_tags($id);
          $id = addslashes($id);
          $id = htmlentities(($id), ENT_QUOTES);

          $tel = strip_tags($tel);
          $tel = addslashes($tel);
          $tel = htmlentities(($tel), ENT_QUOTES);

          //conection to DB
          parent::conected();
          global $conection;
          //exec statements

          $query = mysqli_query($conection, "UPDATE usuario SET telephone='$tel' 
          WHERE user_id = '$id'");

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
/*
  $tel = $_POST["tel"]
  $id_user = $_GET["ID"]
*/
$telephone_ = new Telephone($_POST["tel"], $_GET["id"]);
$telephone_->addTelephone();

 
  	?>