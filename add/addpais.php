<?php
include("../model/model.php");
   
class Pais extends conectionDB{
 
  public function __construct($pais, $id_user){
    $this->pais = $pais;
    $this->id_user = $id_user;
  }

  public function addPais(){
      if (isset($this->pais) && $this->id_user &&
           !ctype_space($this->pais) && !empty($this->pais) &&
           !empty($this->id_user)){

        if($this->pais != ""){
       
          $id = $this->id_user;
          $pais = $this->pais;

          //evitando sqlinjection 
          $id = strip_tags($id);
          $id = addslashes($id);
          $id = htmlentities(($id), ENT_QUOTES);

          $pais = strip_tags($pais);
          $pais = addslashes($pais);
          $pais = htmlentities(($pais), ENT_QUOTES);

          //conection to DB
          parent::conected();
          global $conection;
          //exec statements

          $query = mysqli_query($conection, "UPDATE usuario SET pais='$pais' 
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
 
$pais = new Pais($_POST["pais"], $_GET["id"]);
$pais->addPais();

 
?>


