<?PHP
include_once("inc/config.php");

if(isset($_POST["deleteid"])){
   global $db;
   
   $deleteid = $_POST["deleteid"];

  
    echo gettype($deleteid);

   $sql = "DELETE FROM Products WHERE idProducts = $deleteid ";
   mysqli_query($db,$sql);



}

?>