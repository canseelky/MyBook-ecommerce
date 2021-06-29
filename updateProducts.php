<?php
 
 include_once("headerAdmin.php");
 ob_start();




?>
<style>

.form__update{
    margin-top:6%;
    height:50%;
    width:50%;
    margin-left:20%;
    border:solid black 2px;
    border-radius:30px;

}



</style>

<form id="form__update"  method="post" action="updateProducts.php">
    <div class="uk-section uk-container uk-text-center">



        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium" name="name" type="text" required= "required"  placeholder="Book Name">
        </div>

        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium" name="description" type="text"  placeholder="Book Description">
        </div>
        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium" name="imgSrc" type="text"  placeholder="Book Image URL">
        </div>
        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium" name="category" type="text"  placeholder="Category">
        </div>
         
         
        <div class="uk-margin">
            <input class="uk-input uk-form-width-medium" name="price" type="number"  placeholder="Book Price">
        </div>

           
    

        <div class="uk-margin">

        <button type="submit" class="uk-button uk-button-primary" name ="InsertBook" >Insert</button>
        </div>
 


      
       
    </div>
</form>

<?php //Adding



require_once "inc/config.php";





if(isset($_POST["UpdateBook"])){
    if(isset($_POST['name'])){
        global $bookName;
        $bookName = trim($_POST["name"]);
        $sql = "UPDATE `Products` set `productName` = '$bookName' where `productName` = '$bookName' ";
        $result = mysqli_query($db,$sql);
    
    };
    
    ?>
    <script type="text/javascript">
        var imgName="<?php echo $bookName; ?> ";
    </script>
    
    
    
    <?php
    if(isset($_POST['description']) && trim($_POST['description']) !== ""){
    
        $description= trim($_POST["description"]);
        $sql = "UPDATE `Products` set `description` = '$description' where `productName` = '$bookName' ";
        $result = mysqli_query($db,$sql);
        if($result){
            echo '<script>
            swal("Good Job!!",`Product description  updated for ${imgName}`, "success");
        </script>';
    
        }
      
    }
    
    ?>
    
    
    
    
    <?php
    
    if(isset($_POST['imgSrc']) && trim($_POST['imgSrc']) !== ""){
    
        $imgSrc= trim($_POST["imgSrc"]);
        $sql = "UPDATE `Products` set `imgUrl` = '$imgSrc' where `productName` = '$bookName' ";
        $result = mysqli_query($db,$sql);
        if($result){
            echo '<script>
            swal("Good Job!!",`Image source updated for ${imgName}`, "success");
        </script>';
    
        }
    }
    
    if(isset($_POST['price'])&& trim($_POST['price']) !== ""){
    
        $price= trim($_POST["price"]);
        $sql = "UPDATE `Products` set `price` = '$price' where `productName` = '$bookName' ";
        $result = mysqli_query($db,$sql);
        if($result){
           echo ' <script>
           swal("Good Job!!",`Product price updated for ${imgName}`, "success");
        </script>';
    
        }
        
    }




}

if(isset($_POST["InsertBook"])){
    $bookName = trim($_POST["name"]);
    $description = trim($_POST["description"]);
    $imgSrc = trim($_POST["imgSrc"]);
    $price = trim($_POST["price"]);
    $category = trim($_POST["category"]);

    $sql = "insert into Products(`productName`,`imgUrl`,`price`,`category`,`description`) VALUES('$bookName','$imgSrc', '$price',
    '$category', '$description')";
    $result = mysqli_query($db,$sql);
    if($result){
        echo "<script>
        swal('Good Job!',`Book inserted successfully`,'success');
        
        </script>";



    }



}


if(isset($_POST["book_delete"])){
    $bookName = trim($_POST["name"]);
  
    $sql = "delete from Products where `productName` = '$bookName' ";
    $result = mysqli_query($db,$sql);
    if($result){
        echo "<script>
        swal('Good Job!',`Book deleted successfully`,'success');
        
        </script>";



    }



}



?>
