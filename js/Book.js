class Book {
  name;
  imgUrl;
  price;
  info;
  id;

  constructor(name, imgUrl, info, price) {
    this.name = name;
    this.imgUrl = imgUrl;
    this.info = info;
    this.price = price;
    this.id = Math.random().toString();
  }
}
