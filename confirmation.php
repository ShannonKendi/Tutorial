<?php

include 'connect.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['submit'])){

   
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE  pass = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['ID'];
      header('location:user_edit.php');
   }else{
      $message[] = 'incorrect password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User confirmation</title>

   
   <link rel="stylesheet" href="login.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h1>Please enter your password</h1>
      
      <input type="password" name="password" required placeholder="enter password" class="box">
      <button type="submit" name="submit" >Change</button>
      
      
   </form>

</div>

</body>
</html>