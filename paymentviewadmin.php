<?php   
 include 'connect.php';  
 $query = "select * from payment";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Payment View</title>  
      <link rel="stylesheet" type="text/css" href="style.css">  
 </head>  
 <body>  
 <header></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
     <caption> Confirmed Payments</caption>
      <tr class="heading">  
           <th>Email_address</th>
               
               <th>hotel</th>
               <th>price</th>
               <th>check_in</th>
               <th>days</th>
               
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                           
                               <td>".$result['email_address']."</td>  
                               <td>".$result['hotel']."</td>  
                               <td>".$result['price']."</td>  
                               <td>".$result['check_in']."</td>  
                                <td>".$result['days']."</td> 
                                
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>