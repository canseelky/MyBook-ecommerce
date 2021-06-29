<?php
include_once("inc/config.php");
$data ="";
session_start(); 
$email = $_SESSION["email"];
$userid= $_SESSION['userid'];


if ($result = mysqli_query($db, "SELECT idUsers  FROM Users where email = '$email' ")) {
    global $userid;
   $data = mysqli_fetch_array($result,MYSQLI_NUM);

   $userid =$data[0];


}
$_SESSION['userid'] = $userid;



if(isset($_POST["productid"])){
    global $userid;
    global $productid;
    $productid = ($_POST["productid"]);
    $query = "insert into Carts(quantity,idUsers,idProducts) values(1,$userid,$productid)";
    $result = mysqli_query($db,$query);
   
    
}













?>
