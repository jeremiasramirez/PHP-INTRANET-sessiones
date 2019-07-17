<?php
session_start();
 
unset($_SESSION["name"]);
unset($_SESSION["sexo"]);
unset($_SESSION["emauser"]);

 
 
header("Location: login.php?thank=thankyou");



?>