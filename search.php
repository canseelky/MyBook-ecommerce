<style>


.search{
    display: flex;
    height: 100%;
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

<h1 class="uk-heading-line uk-text-center"><span>Search</span></h1>

<div class="search"> </div>

<?php
include_once("header.php");
include_once("inc/config.php");


$data = $_POST["search"];
ob_start();


?>


<script>
    <?php require_once("./getProducts.js");?>
</script>


<script>


var da= "<?php echo $data;  ?>";
getProducts2("search_ajax.php",".search",da);





</script>
<?php
ob_end_clean();
?>