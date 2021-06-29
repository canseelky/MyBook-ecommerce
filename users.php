
<?php
 include_once("headerAdmin.php");
 include_once("inc/config.php");

?>


<style>
.users{
    height:100%;
    margin:90px;

}
.user{
    background:#E0E0E0;
    margin:40px;

}
img{
    height:60px;
    width:60px;
    border-radius:30px;
    margin-left:50%;
}
p{
    margin:40px;

}
.label__margin{
    margin-left:40px;
    margin-top:20px;

}
.paddingButton{
    padding-left:30px;

}

</style>

<h1 class="uk-heading-line uk-text-center"><span>Users</span></h1>
<div class="users">


</div>





<script type="text/javascript">

const redirect = (userid) => {
    
  document.cookie = "updatedUser = " + userid;
            console.log(document.cookie);
            window.location.href = "http://192.168.64.3/web/updateUserData.php";

}

const getUsers = () =>{

    var requestObject =  new XMLHttpRequest();
    if(window.XMLHTTPRequest){
        xhttp = new XMLHttpRequest();

    }
    else if(window.ActiveXObject){

        requestObject = new ActiveObject('Microsoft.XMLHTTP');

    }

    if(requestObject){
        requestObject.open('POST','users_ajax.php');
        requestObject.setRequestHeader('conntent-type','application/x-www-form-urlencoded');
        requestObject.onreadystatechange = function(){
            if(requestObject.readyState===4 && requestObject.status===200){
                let returnedData = requestObject.responseText;
                users ='[' + returnedData.substring(0, returnedData.length - 1) + ']';
                users = JSON.parse(users);
                console.log('users',users);
                renderUsers(users);

            }   
        }


    }
    var data='emty';
    requestObject.send('data=',data);
}




const renderUsers = (users) =>{
    const container = document.querySelector('.users');
    
    for (user of users){
        
        const userItem = document.createElement('div');
        userItem.className='user';
        const update = document.createElement("button");
        userItem.innerHTML = `
        
                <img src='./static/user.png'> </img>
                <span class='uk-label'> Role: ${user.userType}</span> 
                <br>
                <span class='uk-label uk-label-warning label__margin'> User Id: ${user.idUsers}</span> 
                <br>
                <span class='uk-label uk-label-warning label__margin'> User Name: ${user.name}</span> 
                <br>
                <span class='uk-label uk-label-warning label__margin'> User Surname: ${user.surname}</span> 
                <br>
                <span class='uk-label uk-label-warning label__margin'> User Email Address: ${(user.email).toLowerCase()}</span> 
             
                <button class="uk-button uk-button-primary uk-button-small paddingButton" style="margin-left:60%;"onclick="redirect(${user.idUsers})">Edit</button>
                <button class="uk-button uk-button-primary uk-button-small paddingButton" onclick="deleteUser(${user.idUsers})">Delete</button>
             
           
        
        
        `;
        container.appendChild(userItem);

    }
    





}


const deleteUser = (userid) =>{


    var requestObject =  new XMLHttpRequest();
    if(window.XMLHTTPRequest){
        requestObject = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject = new ActiveObject("Microsoft.XMLHTTP");

}

    if(requestObject){
        requestObject.open("POST","deleteUser_ajax.php");
        requestObject.setRequestHeader("conntent-type","application/x-www-form-urlencoded");
        requestObject.onreadystatechange = function(){
            if(requestObject.readyState===4 && requestObject.status===200){
                const container = document.querySelector('.users')
                container.innerHTML ="";
                getUsers();



            }   
        }
        var userId=userid;

    requestObject.send("userid=",userId);

    }

    document.cookie = "deletedUser = " + userid;



}


getUsers();

</script>
