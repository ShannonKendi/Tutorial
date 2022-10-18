<?php

$email_address=$_POST['email_address'];
echo$email_address;

$card_number=$_POST['card_number'];
echo$card_number;

$price=$_POST['price'];
echo$price;

$hotel=$_POST['hotel'];
echo$hotel;

$check_in=$_POST['check_in'];
echo$price;

$days=$_POST['days'];
echo$days;


require("connect.php");
$email_address=$_POST['email_address'];

$sql = "INSERT INTO payment (email_address, card_number, price, hotel, check_in, days)
VALUES ('$email_address','$card_number','$price','$hotel','$check_in','$days')";
if(mysqli_query($conn,$sql)){
	echo"New record added succesfully";

}
else{
	echo"Error in adding of record".mysqli_error($conn);
}
?>

