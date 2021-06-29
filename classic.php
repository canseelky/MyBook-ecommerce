
<style>

.classic{
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

<?php include_once("header.php"); ?>
<h1 class="uk-heading-line uk-text-center"><span>Classics</span></h1>

<div class="classic">


</div>



<?php
include_once("inc/config.php");


?>








<script>
    <?php require_once("./getProducts.js");?>
</script>


<script>

getProducts("classic_ajax.php",".classic");



</script>


<?php include("footer.php"); ?>