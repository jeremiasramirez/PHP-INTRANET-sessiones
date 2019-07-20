<?php
session_start();
define('LOGIN', 'login.php');
unset($_SESSION["name"]);
unset($_SESSION["sexo"]);
unset($_SESSION["emauser"]);
unset($_SESSION);

 
 
header("Location: ".LOGIN.'?thank=thankyou');



?>