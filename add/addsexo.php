<?php
include("../model/model.php");
   
class Sexo extends conectionDB{
 
  public function __construct($sexo, $id_user){
    $this->sexo = $sexo;
    $this->id_user = $id_user;
  }

  public function addSexo(){

      if(isset($this->sexo) && $this->id_user && !ctype_space($this->sexo) && 
      	!empty($this->sexo) && !empty($this->id_user)){

        if($this->sexo != ""){
       
          $id = $this->id_user;
          $sexo = $this->sexo;

          //evitando sqlinjection 
          $id = strip_tags($id);
          $id = addslashes($id);
          $id = htmlentities(($id), ENT_QUOTES);

          $sexo = strip_tags($sexo);
          $sexo = addslashes($sexo);
          $sexo = htmlentities(($sexo), ENT_QUOTES);

          //conection to DB
          parent::conected();
          global $conection;
          //exec statements

          $query = mysqli_query($conection, "UPDATE usuario SET sexo='$sexo' 
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
 
$sexo = new Sexo($_POST["sexo"], $_GET["id"]);
$sexo->addSexo();

 
?>


