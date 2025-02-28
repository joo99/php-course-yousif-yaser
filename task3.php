 <?php
   if(isset($_POST["submit"])){


    $currentPassword = "1234";
  
     
    $inputCurrentPassword = $_POST['current']  ;
    $inputNewPassword = $_POST['new']  ;
    $inputConfirmPassword = $_POST['confirm']  ;
    
    
    if (empty($inputCurrentPassword) || empty($inputNewPassword) || empty($inputConfirmPassword)) {
        echo "All fields are required";
         
    }
     
    if ($inputCurrentPassword !== $currentPassword) {
        echo "Incorrect current password";
         
    }
    
   
    if ($inputNewPassword !== $inputConfirmPassword) {
        echo "New password does not match";
         
    }
    else{
        echo "Password changed successfully";
    }


   }

   
  ?>
  
  

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="task1-css\task3.css">
 </head>
 <body>
    
 <div class="dad-form">
        <div class="form">
            <form action="" method="POST">
                <input type="password" name="current" class="put" placeholder="ENTER YOUR CURRENT PASSWORD">
                <br><br>
                <input type="password" name="new" class="put" placeholder="ENTER YOUR NEW PASSWORD">
                <br><br>
                <input type="password" name="confirm" class="put" placeholder="CONFIRM YOUR NEW PASSWORD">
                <br><br>
                <button type="submit" class="but" name="submit" value="submit">
                    CHANGE PASSWORD

                </button>
            </form>
        </div>
    </div>
 </body>
 </html>