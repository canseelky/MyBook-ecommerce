const renderBook = (bookArray) => {
    const container = document.querySelector(".card");
    console.log(container);
  
    if (bookArray.length > 0) {
      for (const book of bookArray) {
        const book_item = document.createElement("div");
        book_item.style.background="red";
        book_item.className = "card-item";
        const add_item = document.createElement("button");
        console.log(book_item);
        console.log(add_item);
        add_item.className = "buy_button2";
        add_item.textContent = "Buy";
  
        book_item.innerHTML = `
           
            <p>111111</p>
               <p>22222</p>
              <p>3333333</p>
      
          `;
       
        book_item.appendChild(add_item);
        //add_item.addEventListener("click", addToBasket.bind(null, book.id));
        container.appendChild(book_item);
      }
    }
  };
  