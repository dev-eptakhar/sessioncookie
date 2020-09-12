<?php 
    session_start();
    include 'function.php';
    print_r($_COOKIE);
    if(!user()){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>admin panel</title>
</head>
<body>
    <h1 class="h1">admin</h1>
    <a href="logout.php">Logout</a>
</body>
</html>