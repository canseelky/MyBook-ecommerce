<?php
require_once "inc/config.php";
require_once "headerLogin.php";

?>




<style>

label{
    margin-right:50px;
}


</style>



<form  method="post" action="register.php">
    <div class="uk-section uk-container uk-text-center">

        <legend class="uk-legend ">Sign Up!</legend>

        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium" name="name" type="text"  required= "required" placeholder="Name">
        </div>

        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium" name="surname"type="text"  required= "required"placeholder="Surname">
        </div>
         
        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium" name="email" type="email" required= "required" placeholder="email@email.com">
        </div>

           
        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium" name="password" type="password" required= "required" placeholder="Password">
        </div>

        <div class="uk-margin">

        <button type="submit" class="uk-button uk-button-primary" name ="signup" >Sign Up</button>
        </div>
 


      
       
    </div>
</form>


<?php require_once "footer.php"
?>