
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/css/uikit.min.css" />
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/js/uikit-icons.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<style>

.card-item{
  border : solid;
  border-color: #d3d3d3;
  margin:2px;
  padding-bottom:10px;

}

</style>


<?php
include('headerAdmin.php');
?>


<?php
include_once("inc/config.php");


if(isset($_POST["search"])){
    $data = trim($_POST["search"]);


}


//$query = "Select * from `Products` WHERE `productName` LIKE '$sor%'  ";

$sql = "SELECT * FROM `Products` WHERE `productName`  LIKE '%$data%' ";





$result = mysqli_query($db,$sql);

ob_end_clean();
while ($row = mysqli_fetch_assoc($result)){
 

    $book = <<<DELIMETER
     
          <div>
                  <div class="card-item">
                      <h6 class="uk-card-title">{$row['productName']}</h6>
                      <img src={$row['imgUrl']}> </image>
                      <p>{$row['price']} TL</p> 
                      <p>{$row['description']}</p>
                      <button onclick="redirectToEditProduct({$row['idProducts']})"> Update </button>
                      <button> Delete </button>
                  </div>
                  <hr class="uk-divider-icon">
              </div>
      
        DELIMETER;

        echo $book;




}
?>

<script>

const redirectToEditProduct = (productId) =>{
        
        document.cookie = "updatedProduct = " + productId;
        console.log(document.cookie);
        window.location.href = "http://192.168.64.3/web/product_detailed.php";


}

</script>
