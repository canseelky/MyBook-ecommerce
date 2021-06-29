
<?php
include_once("inc/config.php");



$query = "Select * from `Users` ";

$result = mysqli_query($db,$query);


while ($row = mysqli_fetch_assoc($result)){
    echo json_encode($row).",";


}




function deleteUser($id){
    global $db;

    $username = $_POST['user_delete'];
    $sql = "DELETE FROM Users WHERE idUsers = '$id' ";

    mysqli_query($db,$sql);


    
}

?>