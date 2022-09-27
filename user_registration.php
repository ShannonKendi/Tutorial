<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
   $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $tel = mysqli_real_escape_string($conn, $_POST['tel']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = mysqli_real_escape_string($conn, ($_POST['password']));
        $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND pass = '$password'") or die('query failed');
    
       if(mysqli_num_rows($select) > 0){
          $message[] = 'user already exist!';
       }else{
         mysqli_query($conn, "INSERT INTO `users`(f_name,l_name, email, pass, tel , username) VALUES('$f_name','$l_name', '$email','$password','$tel','$username')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:user_login.php');
   }
    
        }

  
   



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Sign  Up</title>
</head>
<body>

<form action="" method="post">
<h1>Sign Up</h1>
           <?php 
            if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}?>
            
            <input type="text"  name="f_name" placeholder="First Name">
            <input type="text"  name="l_name" placeholder="Last Name">
            
            <input type="email"  name="email" placeholder="Email">
            <input type="telephone"  name="tel" placeholder="Phone Number">
            <input type="text"  name="username" placeholder="Username">
            <input type="password"  name="password" placeholder="Password">
            <p?>already have an account?<a href="login.php">Login</a></p>
            
            
         </div>
            <button name="submit" type="submit">Sign up</button>
        </form> 
</body>
</html>