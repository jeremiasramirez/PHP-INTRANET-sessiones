<?php
session_start();
 
unset($_SESSION["name"]);
unset($_SESSION["sexo"]);

 
 
header("Location: login.php?thank=thankyou");



?>