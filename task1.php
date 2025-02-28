<?php

if(isset($_POST["submit"])){
$inputusername = $_POST['username'];
$inputpassword = $_POST['password'];

$username ="mohamed";
$password ="123";

if(($inputusername == $username) && ($inputpassword == $password)){
    echo "Welcome to the website";
}else{
    echo "Incorrect credentials, please try again";

}
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="task1-css\task1.css">
</head>
<body>
    
<div class="main-form">
    <div class="form">
        <form action="" method="POST">
            <div class="input">
                <input type="text" name="username" placeholder="  ENTER YOUR Username">
                <br><br>
                <input type="password" name="password" placeholder="  ENTER YOUR PASSWORD">
            </div>
             
            <div class="button">
                <button type="submit" name="submit" value="submit">LOGIN</button>
        </form>
    </div>
</div>
</body>
</html>