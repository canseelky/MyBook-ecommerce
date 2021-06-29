<?php ob_start();
include_once("./inc/config.php");
session_start();
$userid = $_SESSION['userid'];


?>
 <style>
.custom{
  height:80%;
  display: flex;
  border-radius: 20px;
  flex-wrap: wrap;
  flex-direction: row;
  padding-left:10%;
  padding-top:20px;
}
.card-item{
  border : solid;
  border-color: #d3d3d3;
  margin:2px;
  padding-bottom:10px;

}

</style>





<?php include "header.php"; ?>


<div class='custom'> </div>








<script>

<?php include 'renderBook.js';?>
</script>


<script>
<?php include './js/Book.js';?>
</script>


<script type="text/javascript">
    var userId="<?php echo '$userid'; ?> ";
    </script>





<script defer >
const addToBasket2 = (id) =>{
    var userId="<?php echo $userid; ?> ";
  console.log(id);
  console.log("usewrid", userId)
if(userId === " "){
    swal("Sorry!", "Please login to add a product to your cart. ", "error");
    return;

}
  swal("Good Job!", "Item added your basket successfully", "success");
  if(requestObject){
    requestObject.open("POST","card_ajax.php",true);
    requestObject.setRequestHeader("content-type","application/x-www-form-urlencoded");
    console.log("userid="+userId + "&productid"+id);
    const vars= "userid="+userId + "&productid="+id;
    requestObject.send(vars);



    requestObject.onreadystatechange = function(){
        if(requestObject.readyState===4 && requestObject.status===200){
                let returnedData = requestObject.responseText;
                console.log("returned data"+returnedData);
             
   

        }   
    }


}

}



var requestObject =  new XMLHttpRequest();
let bookArray;

if(window.XMLHTTPRequest){
    xhttp = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject = new ActiveObject("Microsoft.XMLHTTP");

}


function getAllProducts(){

    if(requestObject){
        requestObject.open("POST","products_ajax.php");
        requestObject.setRequestHeader("content-type","application/x-www-form-urlencoded");
        requestObject.onreadystatechange = function(){
            if(requestObject.readyState===4 && requestObject.status===200){
                    let returnedData = requestObject.responseText;
                    console.log(returnedData);
                    bookArray ="[" + returnedData.substring(0, returnedData.length - 1) + "]";
                    bookArray = JSON.parse(bookArray);

                    console.log("booook", bookArray);
                    renderBook(bookArray,".custom");
                    

            }   
        }


    }
    var data="empty";
    requestObject.send("data=",data);
}

getAllProducts();



console.log("user id " + userId);





</script>

















