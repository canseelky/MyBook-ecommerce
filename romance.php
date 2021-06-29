<style>


.romance{
    display: flex;
    border-radius: 20px;
    flex-wrap: wrap;
    flex-direction: row;

}
.card-item{
  border : solid;
  border-color: #d3d3d3;
  margin:2px;
  padding-bottom:10px;

}

</style>


<?php
include_once("inc/config.php");

include_once("header.php");



echo '
<h1 class="uk-heading-line uk-text-center"><span>Romance</span></h1>

<div class="romance">


</div>

';






?>


<script>
    <?php require_once("./getProducts.js");?>
</script>


<script>

getProducts("romance_ajax.php",".romance");



</script>


<?php include("footer.php"); ?>