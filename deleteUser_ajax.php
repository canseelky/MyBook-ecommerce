
<?php
include_once("inc/config.php");

if(isset($_COOKIE['deletedUser'])) { 
    $userId = $_COOKIE['deletedUser'];
    deleteUser($userId);

}

if(isset($_POST['userid'])){
    $userId = $_POST['userid'];
    deleteUser($userId);
} 



function deleteUser($id){
    global $db;

    $sql = "DELETE FROM Users WHERE idUsers = '$id' ";

    mysqli_query($db,$sql);


    
}

?>