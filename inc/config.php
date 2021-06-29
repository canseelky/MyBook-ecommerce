<?php



try {
    $db = new mysqli('localhost', 'root', '', 'mydb');
 } catch (Throwable $t) {


    exit($t->getMessage());
 }




?>

