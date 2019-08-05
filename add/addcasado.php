<?php
include("../model/model.php");
   
class Casado extends conectionDB{
 
  public function __construct($casado, $id_user){
    $this->casado = $casado;
    $this->id_user = $id_user;
  }

  public function addCasado(){
      if (isset($this->casado) && $this->id_user &&
           !ctype_space($this->casado) && !empty($this->casado) &&
           !empty($this->id_user)){

        if($this->casado != ""){
       
          $id = $this->id_user;
          $casado = $this->casado;

          //evitando sqlinjection 
          $id = strip_tags($id);
          $id = addslashes($id);
          $id = htmlentities(($id), ENT_QUOTES);

          $casado = strip_tags($casado);
          $casado = addslashes($casado);
          $casado = htmlentities(($casado), ENT_QUOTES);

          //conection to DB
          parent::conected();
          global $conection;
          //exec statements

          $query = mysqli_query($conection, "UPDATE usuario SET casado='$casado' WHERE user_id = '$id'");

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
 
$casado = new Casado($_POST["casado"], $_GET["id"]);
$casado->addCasado();

 
?>


