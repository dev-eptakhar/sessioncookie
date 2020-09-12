<?php 
    function user(){
        if ( isset($_SESSION["done"]) || isset($_COOKIE["keep"]) ) {
            return true;
        }else {
            return false;
        }
    }
?>