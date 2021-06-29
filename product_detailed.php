<?php
 
 include_once("headerAdmin.php");
 include_once("inc/config.php");

 ob_start();

 //Tell PHP to log errors
ini_set('log_errors', 'On');
//Tell PHP to not display errors
ini_set('display_errors', 'Off');
//Set error_reporting to E_ALL
ini_set('error_reporting', E_ALL );

 if(isset($_COOKIE['updatedProduct'])) { 
     $product = $_COOKIE['updatedProduct'];
     $sql = "Select * from Products where idProducts = '$product' ";
     $result = mysqli_query($db,$sql);




     while ($row = mysqli_fetch_assoc($result)){
        $Pname = $row['productName'];
        $img = $row['imgUrl'];
        $price = $row['price'];
        $category = $row['category'];
        $description = $row['description'];
    }
 }

?>
<form  method="post" action="product_detailed.php">
    <div class="uk-section uk-container uk-text-center">


        <img src="<?php echo   $img; ?>"></img>
        <div class="uk-margin">
        <label>Name</label>
            <input class="uk-input uk-form-width-medium" name="name" type="text"  id="name" placeholder="<?php echo   $Pname; ?>" />
        </div>

        <div class="uk-margin">
        <label>Description</label>
            <textarea  name="description" rows ="4" cols="50" id="description" ><?php echo   $description; ?>" </textarea>
        </div>
        <div class="uk-margin">
        <label>Image Address</label>
            <input class="uk-input uk-form-width-medium" name="imgSrc" type="text" id="imgUrl"  placeholder="<?php echo   $img; ?>">
            <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image"  />
      </form>
        </div>
        <div class="uk-margin">
        <label>Category</label>
            <select name="category"  id="category">
    <option value=<?php echo   $category; ?>><?php echo   $category; ?></option>
    <option value="romance">Romance</option>
    <option value="mystery">Mystery</option>
    <option value="science">Science</option>
    <option value="classic">Classic</option>

</select>




        </div>
         
         
        <div class="uk-margin">
        <label>Price( ₺)</label>
            <input class="uk-input uk-form-width-medium" name="price" type="number"  placeholder="<?php echo   $price; ?>">
        </div>
         
   
  
           
       

</form>

        <div class="uk-margin">

        <button type="submit" class="uk-button uk-button-primary" name ="UpdateBook" >Update</button>

        </div>
 


      
       
    </div>
</form>


<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $extensions= array("jpeg","jpg","png");
      
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"/Users/canselkucukyilmaz/.bitnami/stackman/machines/xampp/volumes/root/htdocs/web/static/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>



<?PHP
if(isset( $_POST['name'])){
   $pname = $_POST['name'];

}else{
   $pname = "";
}
if(isset( $_POST['price'])){
   $price = $_POST['price'];

}else{
   $price = "";
}

if(isset( $_POST['description'])){
   $description = $_POST['description'];

}else{
   $description = "";

}
if(isset( $_POST['category'])){
   $category = $_POST['category'];

}else{
   $category ="";
}

if(isset( $_POST['imgUrl'])){
   $imgUrl = $_POST['imgUrl'];

}else{
   $imgUrl ="";
}


if(array_key_exists('UpdateBook',$_POST)){

       updateBook($pname,$description,$category,$price,$imgUrl);
   
}




function updateBook($name,$description,$category,$price,$imgUrl){
   global $db;

   $product = $_COOKIE['updatedProduct'];


   if($name != ""){
       $sql =" UPDATE `Products`  SET `productName` = '$name' WHERE `idProducts` = '$product' ";
       mysqli_query($db,$sql);

   }
   if($description != ""){
       $sql =" UPDATE `Products`  SET `description` = '$description' WHERE  `idProducts` = '$product' ";

   
   mysqli_query($db,$sql);
   }
   if($category != ""){
       $sql =" UPDATE `Products`  SET  `category` = '$category' WHERE `idProducts` = '$product' ";

   
   mysqli_query($db,$sql);

   }
   if($price != ""){
       $sql =" UPDATE `Products`  SET  `price`= '$price'  WHERE `idProducts` = '$product' ";

   
   mysqli_query($db,$sql);

   }
   if($imgUrl != ""){

       $sql =" UPDATE `Products`  SET `imgUrl` = '$imgUrl' WHERE `idProducts` = '$product' ";

   
   mysqli_query($db,$sql);

   }

  header("Location: /web/product_admin.php");
   
   }








?>
