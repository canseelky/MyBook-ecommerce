<?php  

  
ob_start(); //start the buffer
$db = new mysqli('localhost', 'root', '', 'mydb');
$email="";
$password = "";
$userType= "";
$userUser = "";
include("routing.php");


if( isset($_POST["email"]) ){
    global $email ;
    $email= trim($_POST["email"]);
 }
 if( isset($_POST["password"]) ){
    global $password ;
    $password= trim($_POST["password"]);

 }
//  if( isset($_POST["userType"]) ){
//     global $userType ;
//     $userType= trim($_POST["userType"]);

//  }
 if( isset($_POST["select"]) ){
    global $userType ;
    $userType= trim($_POST["select"]);
    echo $userType;
 }

$query = "select email, idUsers, password,userType from Users where email = '$email' ";
$result = mysqli_query($db,$query);
$row = mysqli_fetch_assoc($result);
#check if user exist.

if(!$row){
    echo " '$email' $password  aaaaaa user doesn t exist";
}

if($row){

    global $db_email;
    $db_email = trim($row["email"]);
    $db_password = trim($row["password"]);
    $db_userType = trim($row["userType"]);
    $db_userid = trim($row["idUsers"]);
    if ($db_email != $email || $db_password != $password){
        echo "invalid information";
    
    }
    if ($db_email == $email &&  $password == $db_password ){
   
        session_start();
        $_SESSION['email'] = $db_email;
        $_SESSION["LogedIn"] = true;
        $_SESSION['userid'] = $db_userid;
        $_SESSION['userTpe'] = $db_userType;

       
    

    }

    if(trim($_SESSION['userTpe']) === "Admin"){
            # header("Location: dashboard.php");
        ob_start(); //start the buffer
            //echo "This is some output"; //Output data
        ob_clean(); //Erase the buffer content
        header("Location: users.php"); 


    }else{

   # header("Location: dashboard.php");
   ob_start(); //start the buffer
   //echo "This is some output"; //Output data
   ob_clean(); //Erase the buffer content
   header("Location: dashboard.php");


   }

}
?>






