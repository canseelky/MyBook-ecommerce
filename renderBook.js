


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

        add_item.addEventListener("click", addToBasket2.bind(null, book.idProducts));
        container.appendChild(book_item);
        
      }
    }
  };
  

  