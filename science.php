

<?php
include_once("inc/config.php");

include_once("header.php");



echo '
<h1 class="uk-heading-line uk-text-center"><span>Science</span></h1>

<div class="science">


</div>

';






?>
<style>

.science{
    display: flex;
    border-radius: 20px;
    flex-wrap: wrap;
    flex-direction: row;

}

.card-item{
  border : solid;
  border-color: #d3d3d3;
  margin:2px;
  padding-bottom:5px;

}

</style>



<script>
    <?php require_once("./getProducts.js");?>
</script>


<script>

getProducts("science_ajax.php",".science");



</script>


<?php include("footer.php"); ?>