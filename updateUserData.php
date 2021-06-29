<?php
 
 include_once("headerAdmin.php");
 include_once("inc/config.php");
 ob_start();

 if(isset($_COOKIE['updatedUser'])) { 
     $user = $_COOKIE['updatedUser'];
     $sql = "Select * from Users where idUsers = '$user' ";
     $result = mysqli_query($db,$sql);


     while ($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $surname = $row['surname'];
        $email = $row['email'];
        $userType = $row['userType'];
    }
 }

?>
<style>
select:required:invalid {
  color: gray;
}
option[value=""][disabled] {
  display: none;
}
option {
  color: black;
}



</style>


<form  method="post" action="updateUserData.php">
    <div class="uk-section uk-container uk-text-center">



        <div class="uk-margin">
        <label>Name</label>
            <input class="uk-input uk-form-width-medium" name="name"   style="margin-left:54px;" type="text" placeholder="<?php echo   $name; ?>" />
        </div>

        <div class="uk-margin">
        <label>Surname</label>
            <input class="uk-input uk-form-width-medium" style="margin-left:40px;"  name="surname"type="text"  placeholder="<?php echo   $surname; ?>" >
        </div>
         
        <div class="uk-margin">
        <label>E-mail</label>
            <input class="uk-input uk-form-width-medium" style="margin-left:66px;"  name="email" type="email"  placeholder="<?php echo   $email; ?>" >
        </div>

           
        <div class="uk-margin">
        <label>Password</label>
            <input class="uk-input uk-form-width-medium" style="margin-left:40px;" name="password" type="password"  placeholder="Password">
        </div>
        <div class="uk-margin">
        <label>User Type</label>
        
        <select  name="Option" style="margin-left:90px; margin-right:42px; width:120px;">
  <option value="" disabled selected><?php echo  $userType ?></option>
  <option value="Admin">Admin</option>
  <option value="User">User</option>
</select>





        </div>


        <div class="uk-margin">

        <button type="submit" class="uk-button uk-button-primary" name ="updateUser" >Update</button>

        </div>
 


      
       
    </div>
</form>

<?php //Adding



require_once "inc/config.php";


if(isset( $_POST['Option'])){
    $selectOption = $_POST['Option'];

}


if(isset($_POST['name'])){

    $username = trim($_POST["name"]);
}else{
    $username= "";
}


if(isset($_POST['surname'])){

    $surname= trim($_POST["surname"]);
}else{
    $surname= "";
}

if(isset($_POST['email'])){

    $email= trim($_POST["email"]);
}else{
    $email= "";
}

if(isset($_POST['password'])){

    $password= trim($_POST["password"]);
}else{
    $password= "";
}



if(array_key_exists('updateUser',$_POST)){
  
    if($selectOption){
        updateUser($username,$surname,$email,$password,$selectOption);
    }
    else{
        updateUser($username,$surname,$email,$password,"User");
    }
}







function updateUser($name,$surname,$email,$password,$userType){
    global $db;
    //update all data
    $user = $_COOKIE['updatedUser'];


    if($name != ""){
        $sql =" UPDATE `Users`  SET `name` = '$name'WHERE `idUsers` = '$user' ";
        mysqli_query($db,$sql);

    }
    if($surname != ""){
        $sql =" UPDATE `Users`  SET `surname` = '$surname' WHERE `idUsers` = '$user' ";

    
    mysqli_query($db,$sql);
    }
    if($email != ""){
        $sql =" UPDATE `Users`  SET  `email` = '$email' WHERE `idUsers` = '$user' ";

    
    mysqli_query($db,$sql);

    }
    if(isset($password)){
        $sql =" UPDATE `Users`  SET  `password`= '$password'  WHERE `idUsers` = '$user' ";

    
    mysqli_query($db,$sql);

    }
    if(isset($userType)){

        $sql =" UPDATE `Users`  SET `userType` = '$userType' WHERE `idUsers` = '$user' ";

    
    mysqli_query($db,$sql);

    }

   header("Location: /web/users.php");
    
    }


?>
