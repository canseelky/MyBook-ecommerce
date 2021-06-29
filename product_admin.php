<?php 
include_once("headerAdmin.php");

?>
<style>


.admin__products{
    display: flex;
    height: 100%;
    border-radius: 20px;
    flex-wrap: wrap;
    flex-direction: row;
    margin-left:5%;
    margin-right:5%;

}

img{
    width:100px;
    height:100px;
}

</style>


<h1 class="uk-heading-line uk-text-center"><span>Products</span></h1>
<div class='admin__products'> </div>






<script>


const renderBook = (bookArray) => {
    const container = document.querySelector(".admin__products");
    console.log("container",container);
    console.log(bookArray);

        const headingTable = document.createElement("table");
        headingTable.className="uk-table uk-table-hover uk-table-divider";
        headingTable.innerHTML = ` <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
  

        </tr>
        </thead>`
        container.appendChild(headingTable);
    if (bookArray.length > 0) {
      for (const book of bookArray) {
        const book_item = document.createElement("table");

        
        book_item.className = "uk-table uk-table-hover uk-table-divider";
         book_item.innerHTML = ` <div class="uk-child-width-1-2@m" uk-grid style="margin:10px;"> 

          <div>
 
        <tbody>
        <tr>
            <td style="height:90px; width:20%;"><img src="${book.imgUrl}" /> </td>
            <td style="height:90px; width:20%;">${book.productName}</td>
            <td style=" height:90px; width:20%;">${book.price} TL</td>
            <td style=" height:90px; width:20%;">${book.description}</td>
            <td>                 <button  onclick="redirectToEditProduct(${book.idProducts})">Edit</button> <br>
                <button style="margin-top:20px;" onclick="deleteProduct(${book.idProducts})">Delete</button> </td>
        </tr>
        </tbody>
 
             </div>
             </div>
          `;


        container.appendChild(book_item);
        
      }
    }
  };
  
const redirectToEditProduct = (productId) =>{
        
            document.cookie = "updatedProduct = " + productId;
            console.log(document.cookie);
            window.location.href = "http://192.168.64.3/web/product_detailed.php";


}
const deleteProduct = (productId) =>{


  
    var requestObject2 =  new XMLHttpRequest();


if(window.XMLHTTPRequest){
  requestObject2 = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject2 = new ActiveObject("Microsoft.XMLHTTP");

}

    if(requestObject2){
        requestObject2.open("POST","deleteproduct.php");
        requestObject2.setRequestHeader("content-type","application/x-www-form-urlencoded");
        requestObject2.onreadystatechange = function(){
            if(requestObject2.readyState===4 && requestObject2.status===200){
                    let returnedData2 = requestObject2.responseText;
                    alert(returnedData2);
                  
                    

            }   
        }


    }
    var Pid=productId

    requestObject2.send("deleteid="+Pid);

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






</script>

