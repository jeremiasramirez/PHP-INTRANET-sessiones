<?php
include("../model/model.php");
   
class Alias extends conectionDB{
 
  public function __construct($alias, $id_user){
    $this->alias = $alias;
    $this->id_user = $id_user;
  }

  public function addAlias(){

      if (isset($this->alias) && $this->id_user &&
           !ctype_space($this->alias) && !empty($this->alias) &&
           !empty($this->id_user)){

        if($this->alias != ""){
       
          $id = $this->id_user;
          $alias = $this->alias;

          //evitando sqlinjection 
          $id = strip_tags($id);
          $id = addslashes($id);
          $id = htmlentities(($id), ENT_QUOTES);

          $alias = strip_tags($alias);
          $alias = addslashes($alias);
          $alias = htmlentities(($alias), ENT_QUOTES);

          //conection to DB
          parent::conected();
          global $conection;
          //exec statements

          $query = mysqli_query($conection, "UPDATE usuario SET statepersonal='$alias' WHERE user_id = '$id'");

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
 
$alias = new Alias($_POST["alias"], $_GET["id"]);
$alias->addAlias();

 
?>


