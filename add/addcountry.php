<?php
include("../model/model.php");
   
class City extends conectionDB{
 
  public function __construct($city, $id_user){
    $this->city = $city;
    $this->id_user = $id_user;
  }

  public function addCity(){

      if(isset($this->city) && $this->id_user && !ctype_space($this->city) && 
        !empty($this->city) && !empty($this->id_user)){

        if($this->city != ""){
       
          $id = $this->id_user;
          $city = $this->city;

          //evitando sqlinjection 
          $id = strip_tags($id);
          $id = addslashes($id);
          $id = htmlentities(($id), ENT_QUOTES);

          $city = strip_tags($city);
          $city = addslashes($city);
          $city = htmlentities(($city), ENT_QUOTES);

          //conection to DB
          parent::conected();
          global $conection;
          //exec statements

          $query = mysqli_query($conection, "UPDATE usuario SET countryuser='$city' 
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
 
$city = new City($_POST["countryuser"], $_GET["id"]);
$city->addCity();

 
?>



