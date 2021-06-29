<?php

$db = new mysqli('localhost', 'root', '', 'mydb');
require_once "inc/config.php";
require_once "headerLogin.php";
#require_once "footer.php";
#include("login_ajax.php");


?>



<form id ="login-form"  method="post" action="login_ajax.php" >
    <div class="uk-section uk-container uk-text-center container">

        <legend class="uk-legend ">LogIn!</legend>

         
        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium" name="email" id="email" required= "required" placeholder="email@email.com">
        </div>

           
        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium"  name="password" id="password" required= "required" placeholder="Password">
        </div>

       
        <div class="uk-margin">
        <button type="submit" id="submitBtn"> Login </button>
        </div>
 


      
       
    </div>
</form>

<!-- 
<script>
let userType;
document.getElementById('select').addEventListener('change', function() {
  console.log('You selected: ', this.value);
  userType = this.value;
});

const loginInfo = () =>{
    const email= document.getElementById("email").value;
    const password= document.getElementById("password").value;






var requestObject =  new XMLHttpRequest();


if(window.XMLHTTPRequest){
    xhttp = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject = new ActiveObject("Microsoft.XMLHTTP");

}



    if(requestObject){
        requestObject.open("POST","login_ajax.php");
        requestObject.setRequestHeader("content-type","application/x-www-form-urlencoded");
        
        }


    }
 
    const vars= "email="+email + "&password="+password+"&userType="+userType;
    requestObject.send(vars);
}




const submit = document.getElementById("submitBtn");
submit.addEventListener("click",loginInfo);

</script> -->
