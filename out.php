<?php
session_start();


unset($_SESSION["name"]);

header("Location: selectuser.html");


?>