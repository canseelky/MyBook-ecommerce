<?php
session_start();
include_once("inc/config.php");

$userid= $_SESSION['userid'];
$sql = "DELETE FROM Carts  WHERE idUsers = '$userid' ";



$result = mysqli_query($db,$sql);
if($result){

    echo $userid;
}



$address1= "";
$address2 ="";
$city ="";

if(isset($_POST["address1"])){
    $address1 = $_POST["address1"];

}

if(isset($_POST["address2"])){
    $address2 = $_POST["address2"];;

}

if(isset($_POST["city"])){
    $city = $_POST["city"];;

}


    $insertAdress = "insert into Adress(city,address1,address2,userId) Values ('$city','$address1','$address2', '$userid') ";
    mysqli_query($db,$insertAdress);




 

?>