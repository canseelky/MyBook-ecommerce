<?php


session_start();
unset($_SESSION["LogedIn"]);
unset($_SESSION["userid"]);
unset($_SESSION["email"]);
header("Location:login.php");


    



?>

