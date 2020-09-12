<?php
    session_start();
    
    session_destroy();
    
    $_SESSION = array();

    setcookie("keep", $keep , time() - 60*60*24*365);

    header('location: index.php');
?>