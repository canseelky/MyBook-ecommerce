<?php


function ForceLoggin(){

    if(isset($_SESSION["user_id"])){

        //The user is allowed here
        
        }
        else{
        
            //The user is allowed here
            //redirect
            header("Location: /web/login.php");
            exit;
            
            }

}

function alreadyLoggedin(){
    if(isset($_SESSION["user_id"])){

        //The user is allowed here
        header("Location: /web/dashboard.php");
        exit;
        
        }

    
}


?>