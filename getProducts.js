
function getProducts(target,mainContainer){

    var requestObject =  new XMLHttpRequest();
    if(window.XMLHTTPRequest){
  xhttp = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject = new ActiveObject("Microsoft.XMLHTTP");

}

    if(requestObject){
        requestObject.open("POST",target);
        requestObject.setRequestHeader("conntent-type","application/x-www-form-urlencoded");
        requestObject.onreadystatechange = function(){
            if(requestObject.readyState===4 && requestObject.status===200){
                    let returnedData = requestObject.responseText;
                    bookArray ="[" + returnedData.substring(0, returnedData.length - 1) + "]";
                    bookArray = JSON.parse(bookArray);
                    console.log("myster",bookArray);
                    renderBook(bookArray,mainContainer);

            }   
        }


    }
    var data="emty";
    requestObject.send("data=",data);
}



const renderBook = (bookArray,containerName) => {
    const container = document.querySelector(containerName);
    console.log("container",container);
  
    if (bookArray.length > 0) {
      for (const book of bookArray) {
        const book_item = document.createElement("div");
        
        book_item.className = "card-item";
         const add_item = document.createElement("button");
        // console.log(book_item);
         console.log(add_item);
        add_item.className = "uk-button uk-button-default";
        add_item.style ="margin-left:30%;"
        add_item.textContent = "Buy";
         book_item.innerHTML = ` <div class="uk-child-width-1-2@m" uk-grid style="margin:10px;"> 
          <div>
              <div class="uk-card uk-card-default" style="padding-left: 0px; height:500px; width:400px; " >
                  <div class="uk-card-media-top">
                      <img src=${book.imgUrl}  style= " height:40%; width:40%;
                      margin-left:30%;
                      margin-top:10%;">
                  </div>
                  <div class="uk-card-body">
                      <h6 class="uk-card-title">${book.productName}</h6>
                      <p>${book.price} TL</p>
                      <p>${book.description}</p>
                  </div>
              </div>
          </div>
       
          </div>
          `;


         book_item.appendChild(add_item);
        
        add_item.addEventListener("click", addToBasket.bind(null, book.idProducts));
        container.appendChild(book_item);
        
      }
    }
  };
  

  const addToBasket = (id) =>{
  
    var requestObject =  new XMLHttpRequest();
    if(window.XMLHTTPRequest){
      requestObject = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject = new ActiveObject("Microsoft.XMLHTTP");
}
    console.log(id);
    swal("Good Job!", "Item added your basket successfully", "success");
    if(requestObject){
      requestObject.open("POST","card_ajax.php",true);
      requestObject.setRequestHeader("content-type","application/x-www-form-urlencoded");
      const vars= "productid="+id;
      requestObject.send(vars);
  
  
  
      requestObject.onreadystatechange = function(){
          if(requestObject.readyState===4 && requestObject.status===200){
                  let returnedData = requestObject.responseText;
                  console.log("returned data"+returnedData);
               
                  
  
          }   
      }
  
  
  }
  
};









function getProducts2(target,mainContainer,temp){

  var requestObject =  new XMLHttpRequest();
  if(window.XMLHTTPRequest){
xhttp = new XMLHttpRequest();

}
else if(window.ActiveXObject){

requestObject = new ActiveObject("Microsoft.XMLHTTP");

}

  if(requestObject){
      requestObject.open("POST",target);
      requestObject.setRequestHeader("conntent-type","application/x-www-form-urlencoded");
      requestObject.onreadystatechange = function(){
          if(requestObject.readyState===4 && requestObject.status===200){
                  let returnedData = requestObject.responseText;
                  bookArray ="[" + returnedData.substring(0, returnedData.length - 1) + "]";
                  bookArray = JSON.parse(bookArray);
                  console.log("myster",bookArray);
                  renderBook(bookArray,mainContainer);

          }   
      }


  }
  var data=temp;
  requestObject.send("data=",data);
}


