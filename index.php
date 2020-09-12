<?php 
    session_start();
    include 'function.php';
    if(user()){
        header('location: admin.php');
    } 
    if( isset( $_POST["login"] ) ){
        define("EMAIL", "admin");
        define("PASS", "admin");
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $keep = isset($_POST["keep"]);
        if( $email == EMAIL && $pass == PASS ){
            $_SESSION["done"] = "";

            setcookie("keep", $keep , time() + 60*60*24*365);

            header('location: admin.php');
        }else {
            $fail = "email or password does not match";
        }
    }
    print_r($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email" placeholder="email"><br /> <br />
        <input type="password" name="pass" placeholder="pass"><br /> <br />
        <input type="checkbox" name="keep" id="keep">
        <label for="keep">Keep me log in</label> <br /> <br />
        <input type="submit" name="login" value="submit"> <br />
    </form>
    <p class="fail"><?php 
        if(isset($fail)){
            echo $fail;
        }else {
            echo NULL;
        }
    ?></p>
</body>
</html>