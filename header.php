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
.nav{
  margin:0px;
}

</style>

<?php
    ini_set('log_errors','On');
    ini_set('display_errors','Off');
    ini_set('error_reporting', E_ALL );
    define('WP_DEBUG', false);
    define('WP_DEBUG_LOG', true);
    define('WP_DEBUG_DISPLAY', false);

?>

<html>

<head>
    <title> MyBook </title>
    <body>

<div class=" nav jumbotron text-center ">
  <h1>MyBook</h1>
  <p>An easier way of accesing great books!</p> 
  
</div>

<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar nav" style="margin:0px">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">
        
                <li><a href="dashboard.php">Dashboard <span uk-icon="home"></span> </a></li>
          
       
                <li>
                    <a href="#">Categories</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav" id="categories" onchange = "favTutorial()">
                             
                            <li id="classic"><a href="<?php echo 'classic.php'; ?>" >Classics</a></li>
                            <li id="mystery"><a href="<?php echo 'mystery.php'; ?>" >Mystery</li>
                            <li id="romance"><a href="romance.php">Romance</a></li>
                            <li id="science"><a href="science.php">Science</a></li>

                            </select>  
                        
                    </div>
                </li>
                <li><a href="profile.php">Profile  <span uk-icon="user"></span></a></li>
      
            </ul>

        </div>

        <div class="uk-navbar-right">
      
<ul class="uk-navbar-nav" >
<li>
<nav class="uk-navbar-container" uk-navbar >
    <div class="uk-navbar-left" style=" margin-left: 140px;">

        <div class="uk-navbar-item" style=" margin-right:0px;">

            <form  method="POST" action="search_ajax.php">
                <span uk-search-icon></span>
                <input type="text"  name="search"  >
                <button> search </button>
            </form>
        </div>

    </div>
</nav>
 
    <li>  <a href="card.php" >Card  <span uk-icon="cart"></span></a>  </span></li>
</ul>

</div>
    </nav>
</div>









<!-- <script>
const searchBar = document.getElementById("search-bar");

if(window.XMLHTTPRequest){
       var  requestObject = new XMLHttpRequest();

    }
    else if(window.ActiveXObject){

    requestObject = new ActiveObject("Microsoft.XMLHTTP");

    }
searchBar.onkeypress = function(e){
  

    if (e.keyCode == '13'){
     //?php header("Location:search.php") ?>;
    alert(this.value);
      const searchKey = (this.value);




if(requestObject){
        requestObject.open("POST","search.php");
        requestObject.setRequestHeader("content-type","application/x-www-form-urlencoded");
        requestObject.onreadystatechange = function(){
            if(requestObject.readyState===4 && requestObject.status===200){
                console.log("OK")
                
            }   
        }


    }
    requestObject.send("search"+searchKey);

    window.location = 'http://192.168.64.3/web/search.php';




      return false;
    }
  }
</script> -->

