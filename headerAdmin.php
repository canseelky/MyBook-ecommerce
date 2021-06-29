<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/css/uikit.min.css" />
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/js/uikit-icons.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<?php
    include_once("headerLogin.php");
    ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


?>

<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar nav" style="margin:0px">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">

                <li><a href="users.php">Users <span uk-icon="user"></span> </a></li>
                <li><a href="product_admin.php">Products <span uk-icon="user"></span> </a></li>
                <li><a href="addNewUser.php">Add New User <span uk-icon="file-edit"></span> </a></li>
                <li><a href="updateProducts.php">Add New Product  <span uk-icon="file-edit"></span> </a></li>
                <li><a href="logout.php">Logout<span uk-icon="sign-out"></span> </a></li>

                 
      
            </ul>
            </div>
          

       
    </nav>
    <nav class="uk-navbar-container" uk-navbar >
    <div class="uk-navbar-left" style=" margin-left: 140px;">

        <div class="uk-navbar-item" style=" margin-right:0px;">

            <form  method="POST" action="search_ajax_admin.php">
                <span uk-search-icon></span>
                <input type="text"  name="search"  >
                <button> search </button>
            </form>
        </div>

    </div>
</nav>







</div>
