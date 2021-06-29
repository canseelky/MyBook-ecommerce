<?php

include_once("inc/config.php");
include_once("header.php"); 

session_start();


$userid= $_SESSION['userid'];
$query = "Select * from Users where idUsers = '$userid' ";
$result = mysqli_query($db,$query);


while ($row = mysqli_fetch_assoc($result)){
    $name = $row['name'];
    $surname = $row['surname'];
}

?>


<style>

.Smargin{
    margin-left:40px;
}

</style>

<h1 class="uk-heading-line uk-text-center"><span>Account Info</span></h1>
<h2>Hello, <i> <?php echo ucwords($name); ?> </i></h2>
<p>You can change your info below</p>







<form id="profile-form">
<legend class="uk-legend">MY INFORMATION</legend> <br>


    <fieldset class="uk-fieldset Smargin">

   


        <div class="uk-margin s" style=" padding-top:30px">
        <label>Name</label>
        <br>
        <input class="uk-input uk-form-width-medium" id="name" type="text"  value = "<?php echo $name; ?>">
    </div>

    <div class="uk-margin s" style=" padding-top:30px">
        <label>Surname</label>
        <br>
        <input class="uk-input uk-form-width-medium" id="surname" type="text" value = "<?php echo $surname; ?>" >
    </div>
    <div class="uk-margin s" style=" padding-top:30px">
        <label>Password </label>
        <br>
        <input class="uk-input uk-form-width-medium"  id="password" type="password" value="*******">
    </div>
    

   
    </fieldset>
</from>









<button class="uk-button uk-button-primary uk-button-large Smargin" id="changeBtn">CHANGE</button>
<br>
<br>
<a href="logout.php"> Logout<span uk-icon='sign-out'></span> </a>
<br> <br>






<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
document.getElementById("profile-form").addEventListener("click", function(event){
  event.preventDefault()
});







const updateInfo = () => {

    const name = document.getElementById("name").value;
    const surname = document.getElementById("surname").value;
    const password = document.getElementById("password").value;

    var requestObject =  new XMLHttpRequest();
let bookArray;

if(window.XMLHTTPRequest){
    xhttp = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject = new ActiveObject("Microsoft.XMLHTTP");

}

    if(requestObject){
        requestObject.open("POST","profile_ajax.php");
        requestObject.setRequestHeader("content-type","application/x-www-form-urlencoded");
        requestObject.onreadystatechange = function(){
            if(requestObject.readyState===4 && requestObject.status===200){
                    let returnedData = requestObject.responseText;
                    if( returnedData == 1){
                        swal("Good job!", "Your data has been updated!", "success");
                        
                    }
                    else{
                        swal("Error", "Something went wrong!", "error");

                    }
                
                    

            }   
        }


    }

    requestObject.send("name="+name+"&surname="+surname+"&password="+password);


}


 










const changeBtn = document.getElementById("changeBtn");
console.log(changeBtn);
changeBtn.addEventListener("click",updateInfo);

// const logOutBtn = document.getElementById("Logout");
// logOutBtn.addEventListener("click", logOutHandler);





</script>





<?php include 'footer.php'; ?>
