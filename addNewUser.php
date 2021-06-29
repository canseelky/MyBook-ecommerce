<?php
 
 include_once("headerAdmin.php");
 include_once("inc/config.php");


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
.form1{
    height:100%;
    margin-top:6%;
    height:50%;
    width:50%;
    margin-left:20%;
    border:solid black 2px;
    border-radius:30px;
}
label{

    margin-left:0px;

}
input{
    margin-left:90px;
}


</style>


<form  id="form1" method="post" action="addNewUser.php">
    <div class="uk-section uk-container uk-text-center">



        <div class="uk-margin">
        <label>Name</label>
            <input class="uk-input uk-form-width-medium" style="margin-left:54px;" name="name" type="text" />
        </div>

        <div class="uk-margin">
        <label>Surname</label>
            <input class="uk-input uk-form-width-medium" style="margin-left:40px;" name="surname"type="text"  >
        </div>
         
        <div class="uk-margin">
        <label>E-mail</label>
            <input class="uk-input uk-form-width-medium" style="margin-left:66px;"  name="email" type="email"  >
        </div>

           
        <div class="uk-margin">
        <label>Password</label>
            <input class="uk-input uk-form-width-medium" style="margin-left:40px;"  name="password" type="password" >
        </div>
        <div class="uk-margin">
        <label>User Type</label>
        
<select  name="Option" style="margin-left:90px; margin-right:42px; width:120px;">
  <option value="" disabled selected></option>
  <option value="Admin">Admin</option>
  <option value="User">User</option>
</select>
        </div>


        <div class="uk-margin">

        <button type="submit" class="uk-button uk-button-primary" name ="InsertUser" >Insert</button>

        </div>
 


      
       
    </div>
</form>

<?php //Adding




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





if(array_key_exists('InsertUser',$_POST)){

    addUser($username,$surname,$email,$password,$selectOption);

 }







function addUser($name,$surname,$email,$password,$userType){
    global $db;
    $query = "INSERT INTO Users (`name`, `surname`,`email`, `password`, `userType`)
    VALUES('$name','$surname','$email','$password','$userType')";
     $result = mysqli_query($db,$query);
     if($result){

        echo " <script> alert('user added') </script>";
     }

    header("Location: /web/users.php");
   
    

}

 



?>
