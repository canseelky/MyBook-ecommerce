<?php
include_once("./inc/functions.php");
alreadyLoggedin();

if(isset($_POST)){
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashed_pas = password_hash($password, PASSWORD_DEFAULT);

}


//user bilgilerini çek id, email,....

//database den email ve passwordu çek karşılaştır.

if(password_verify(pass,pass2)){
    //user id ile session başlat
    $_SESSION['user_id'] = $user_id;


}











?>