<?php

@include 'connect.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `users` WHERE ID = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:user_registration.php');
      $message[] = 'account has been deleted';
   }else{
      header('location:user_edit.php');
      $message[] = 'account could not be deleted';
   };
};

if(isset($_POST['update_user'])){
   $update_u_id = $_POST['update_u_id'];
   $update_f_name = $_POST['update_f_name'];
   $update_l_name = $_POST['update_l_name'];
   $update_email = $_POST['update_email'];
   $update_pass = $_POST['update_pass'];
   $update_tel = $_POST['update_tel'];
   $update_username = $_POST['update_username'];
   
   $update_query = mysqli_query($conn, "UPDATE `users` SET f_name = '$update_f_name', l_name = '$update_l_name', email = '$update_email', tel = '$update_tel', username = '$update_username' WHERE ID = '$update_u_id'");

   if($update_query){
     
      $message[] = 'user updated succesfully';
      header('location:user_edit.php');
   }else{
      $message[] = 'account could not be updated';
      header('location:user_edit.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Change details</title>
   <link rel="stylesheet" href="table.css">

   
   <link rel="stylesheet" href="css/table.css">

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>



<div class="container">

<section>


</section>

<section class="display-product-table">

   <table>

      <thead>
         <th>User id</th>
      <th>First name</th> 
        <th>Last Name</th>  
      <th>Email</th> 
      <th>Tel</th>
      <th>Username</th>
     
     
      
      <th>Action</th>
      </thead>

      <tbody>
         <?php
         
            $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE ID = $user_id");
            if(mysqli_num_rows($select_users) > 0){
               while($row = mysqli_fetch_assoc($select_users)){
         ?>

         <tr>
        
         <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['f_name']; ?></td>
            <td><?php echo $row['l_name']; ?></td>
            <td>Ksh <?php echo $row['email']; ?>/-</td>
            <td><?php echo $row['tel']; ?></td>
            <td><?php echo $row['username']; ?></td>
            
            
            <td>
               <a href="user_edit.php?delete=<?php echo $row['ID']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete your account?');"> <i class="fas fa-trash"></i> delete account </a>
               <a href="user_edit.php?edit=<?php echo $row['ID']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `users` WHERE ID = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      
      <input type="hidden" name="update_u_id" value="<?php echo $fetch_edit['ID']; ?>">
      <input type="text" class="box" required name="update_f_name" value="<?php echo $fetch_edit['f_name']; ?>">
      <input type="text" class="box" required name="update_l_name" value="<?php echo $fetch_edit['l_name']; ?>">
      <input type="email" class="box" required name="update_email" value="<?php echo $fetch_edit['email']; ?>">
      <input type="text" class="box" required name="update_tel" value="<?php echo $fetch_edit['tel']; ?>">
      <input type="text" class="box" required name="update_username" value="<?php echo $fetch_edit['username']; ?>">
      
      <input type="submit" value="update the account" name="update_user" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>