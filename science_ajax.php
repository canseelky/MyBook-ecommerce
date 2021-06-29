<?php
include_once("inc/config.php");




$query = "Select * from `Products` WHERE `category`='science' ";

$result = mysqli_query($db,$query);


while ($row = mysqli_fetch_assoc($result)){
    echo json_encode($row).",";


}

