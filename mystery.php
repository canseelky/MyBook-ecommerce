
<style>
.card2{

justify-content: space-between;
  flex-direction: column;
  display: inline;
  width: 400px;
  height: 600px;
  margin: auto;
  background-color: #d2e5ee57;
  border-radius: 2px;
  padding-left: 40px;
  padding-top: 10px;
  margin-left: 20px;
  margin-top: 20px;
  margin-bottom: 20px;
  
}


.maincontainer{
    display: flex;

    border-radius: 20px;
    flex-wrap: wrap;
    flex-direction: row;

}
img{
    height:40%; width:40%;
    margin-left:30%;
    margin-top:10%;
}
.card-item{
  border : solid;
  border-color: #d3d3d3;
  margin:2px;
  padding-bottom:10px;

}

}




</style>





<?php

include_once("header.php");





echo '
<h1 class="uk-heading-line uk-text-center"><span>Mystery</span></h1>
<hr class="uk-divider-icon">


<div class="maincontainer">


</div>
';


?>
<script>
    <?php require_once("./getProducts.js");?>
</script>


<script>

getProducts("mystery_ajax.php",".maincontainer");



</script>


<?php include("footer.php"); ?>