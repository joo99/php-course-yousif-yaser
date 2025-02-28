<?php

if(isset($_POST["submit"])){

$inputusername=$_POST['username'];
 
$inputemail=$_POST['email'];
$inputpassword=$_POST['password'];

if ( empty($inputusername) || empty($inputemail) || empty($inputpassword) ) {
    echo "Please fill all the fields";
    
}
else{
    echo"Registration successful";
}

  










}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="task1-css\task2.css">
</head>
<body>
    <div class="parent-form">
        <div class="form">
            <form action=""  method="POST">
                
                    <input type="text" name="username" placeholder="ENTER YOUR Name" required class="inp">
                    <br><br>
                    <input type="email" name="email" placeholder="ENTER YOUR Email" required class="inp">
                    <br><br>
                    <input type="password" name="password" placeholder="ENTER YOUR PASSWORD"  class="inp">
                
                <br><br>
                    <button type="submit" name="submit" value="submit" class="btn">SUBMIT</button>
                
            </form>
        </div>
    </div>
</body>
</html>