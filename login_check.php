<?php
// Initialize the session

// Check if the user is logged in, if not then redirect her/him to login page
session_start();
if(!isset($_SESSION['email'])){
    header("location: /web/login.php");
    exit;
}








?>