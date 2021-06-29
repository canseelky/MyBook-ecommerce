<?php

include_once("inc/config.php");
include_once("header.php");
include_once("login_check.php");

echo " <style>
.custom2{
    height:100%;
    display: flex;
    flex-direction: column;
  flex-wrap: wrap;
  font-size: 30px;
  text-align: center;
},

.butt{
 
   
    padding:100%;
    display: block; 


}

.card-item__main{
    background-color:#DCDCDC;
    height:%100;
    margin:10px;

}

h2{

    background:#778899;
    margin-left:0px;
 
}
.margin__button{
    margin-left:90px;
}

</style>";



echo "<div class='custom2' />";





?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<script defer>
var total= 0;

const renderBook2 = (bookArray) => {
    const container = document.querySelector(".custom2");
    console.log("container",container);
  
    if (bookArray.length > 0) {
      for (const book of bookArray) {
        total += Number(book.price);
        const books = document.createElement("div");
        books.className = "card-item__main";
         const cancel_item = document.createElement("button");
        cancel_item.innerHTML = '<i class="fa fa-close" />';
        cancel_item.style=" margin-left: 340px ";
        cancel_item.classList.add("butt");
        const book_item = document.createElement("div");

        cancel_item.addEventListener("click",deleteItem.bind(null,book.idProducts));
       
        book_item.innerHTML = ` 

            <div class = "book">
                  <div>
                      <img src=${book.imgUrl}  style= " height:50%; width:50%";
                      margin-left:30%;
                      margin-top:10%;">
                  </div>
                  <div>
                      <h6 >${book.productName}</h6>
                      <p>${book.price} TL</p>
                  </div>

       
  
            </div>
  
          `;
         books.appendChild(cancel_item);
         books.appendChild(book_item);
        container.appendChild(books);
        
      }
    }

    document.cookie = "total="+ total;

    var cost = document.createElement("h2");
    cost.innerHTML = `
        Total Cost: ${total} &#8378;
    `;
    console.log(total);
    container.appendChild(cost);
  };
  

var requestObject =  new XMLHttpRequest();
let bookArray;


function getAllProducts(){
    if(window.XMLHTTPRequest){
    requestObject = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject = new ActiveObject("Microsoft.XMLHTTP");

}

if(requestObject){
    requestObject.open("POST","card_ajax2.php");
    requestObject.setRequestHeader("content-type","application/x-www-form-urlencoded");
    requestObject.onreadystatechange = function(){
        if(requestObject.readyState===4 && requestObject.status===200){
                let returnedData = requestObject.responseText;
                bookArray ="[" + returnedData.substring(0, returnedData.length - 1) + "]";
                bookArray = JSON.parse(bookArray);
                console.log("booook", bookArray);
                renderBook2(bookArray);
        }   
    }
}

var data="empty";
requestObject.send("data=",data);
}

getAllProducts();



const redirectPayment = () =>window.location.href = "payment.php";;
var newNode = document.createElement('button');
var newNode2 = document.createElement('button');

// Get the reference node
var referenceNode = document.querySelector('.custom2');


newNode.classList.add("uk-button");
newNode.classList.add("uk-button-primary");
newNode.classList.add("uk-button-large");
newNode.classList.add("margin__button");

newNode.innerHTML = `
CONTUNIE TO CHECKOUT


`;

newNode2.classList.add("uk-button");
newNode2.classList.add("uk-button-primary");
newNode2.classList.add("uk-button-large");
newNode2.classList.add("margin__button");

newNode2.innerHTML = `
BACK TO SHOPPING


`;
newNode.addEventListener("click",redirectPayment);
newNode2.addEventListener("click", () => {
    window.location.href = "http://192.168.64.3/web/dashboard.php";

});





// Insert the new node before the reference node
referenceNode.after(newNode);
referenceNode.after(newNode2);




 

const deleteItem = (delProductId) =>{
    
    var requestDel = new XMLHttpRequest();
    if(window.XMLHTTPRequest){
        requestDel = new XMLHttpRequest();

        }
    else if(window.ActiveXObject){

   requestDel = new ActiveObject("Microsoft.XMLHTTP");
    }
   if(requestDel){
        requestDel.open("POST","card_ajax2.php");
        requestDel.setRequestHeader("content-type","application/x-www-form-urlencoded");
        requestDel.onreadystatechange = function(){
        if(requestDel.readyState===4 && requestDel.status===200){
                console.log("item delted succsessfully"+requestDel.responseText);
        }   
 
    }
    var deleteItemId=delProductId;
    console.log("deleteItemId",deleteItemId);
    requestDel.send("deleteId="+parseInt(deleteItemId));




}

  
 
    



}




</script>

