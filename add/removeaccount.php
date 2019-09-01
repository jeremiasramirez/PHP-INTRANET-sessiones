<?php
include("../model/model.php");
   
class removemyaccount extends conectionDB{
 
  public function __construct($id_user){
 
    $this->id_user = $id_user;
  }

  public function removeaccount(){

 
          $id = $this->id_user;
 
 
          //conection to DB
          parent::conected();
          global $conection;
          //exec statements

          $query = mysqli_query($conection, "DELETE FROM usuario WHERE user_id = '$id'");

          if($query){
            header("Location: ../login.php?remove=removed");
          }
          else{
            header("Location: ../users.php?remove=no");
          }

      }


}
 
$rm = new removemyaccount($_GET["id"]);
$rm->removeaccount();

 
?>


