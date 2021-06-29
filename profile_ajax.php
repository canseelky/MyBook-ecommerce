<?php
require_once("./inc/config.php");

session_start(); 
$userid= $_SESSION['userid'];
$name= "";
$surname ="";
$password ="";

if(isset($_POST["name"])){
    $name = $_POST["name"];

}

if(isset($_POST["surname"])){
    $surname = $_POST["surname"];;

}

if(isset($_POST["password"])){
    $password = $_POST["password"];;

}


$query ="";
$uuid = intval($userid);

if( (isset($_POST["name"]))&& (isset($_POST["surname"])) && (isset($_POST["password"])) ){
  
    $query = "UPDATE`Users` SET `password` = '$password', `name` = '$name', `surname` = '$surname' WHERE `idUsers` = '$uuid' ";


    //update all fields
}



else if(isset($_POST["name"]) && !isset($_POST["surname"]) && !isset($_POST["password"])){

    $query = "update `Users` set `password` = '$password' , `name` = '$name' where `idUsers`= '$userid' ";
    //update name fields
}


else if(isset($_POST["name"]) && isset($_POST["surname"]) && !isset($_POST["password"])){

    $query = "update `Users` set  `name` = '$name' , `surname` = '$surname'  where `idUsers` = '$userid' ";

    //update name, surname fields
}

else if(!isset($_POST["name"]) && isset($_POST["surname"]) && !isset($_POST["password"])){

    //update  surname password  fields
    $query = "update `Users` set `password` ='$password',  `surname` ='$surname' where `idUsers`= '$userid' ";

}

else if(isset($_POST["name"]) && !isset($_POST["surname"]) && isset($_POST["password"])){
  
    //update  name password  fields
    $query = "update `Users` set `password` = '$password', `name` = '$name' where `idUsers`= '$userid' ";

}



else if(isset($_POST["name"]) && !isset($_POST["surname"]) && !isset($_POST["password"])){

    //update password
    $query = "update `Users` set `password` = '$password' where `idUsers` = '$userid' ";

}


$result = mysqli_query($db, $query);

if($result){
    echo "1";

}
else{
    echo "0";
}


?>