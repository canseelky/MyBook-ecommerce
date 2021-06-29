<?php
    require_once "inc/config.php";
    
    if(isset($_POST['signup'])){

      $username= $_POST["name"];
      $surname= $_POST["surname"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $hashed_pas = password_hash($password, PASSWORD_DEFAULT);
      $usertype = "user";
      echo $username;



     


      $sql = "INSERT INTO Users (`name`, `surname`, `email`, `password`, `userType`)
      VALUES('$username','$surname','$email','$password','$usertype')";
      $result= mysqli_query($db,$sql);


           if($result){
             header("location:login.php");
           }else{
             print "ERROR!";
           }
  }



?>