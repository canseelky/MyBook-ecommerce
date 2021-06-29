
<?php
include_once("inc/config.php");
session_start();
$userid= $_SESSION['userid'];

$query = "select Products.idProducts,productName, imgUrl,price, category, description 
from Products join Carts on Products.idProducts = Carts.idProducts
where Carts.idUsers = '$userid' ";

$result = mysqli_query($db,$query);


while ($row = mysqli_fetch_assoc($result)){
    echo json_encode($row).",";


}





if (isset($_POST["deleteId"])){
    
    $pid= intval($_POST["deleteId"]);
    echo "'id' Is data type - ".$pid."  ".gettype($pid);
    $userID = (int)($_SESSION['userid']);
    $queryDeletion = "DELETE FROM `Carts` WHERE `idUsers` = '$userID' and `idProducts` = '$pid' LIMIT 1 ";
    
    if(mysqli_query($db, $queryDeletion)){
        echo('Delete is done Successfully.');
      }

 }




?>