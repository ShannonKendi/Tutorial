<?php

$check_in=$_POST['check_in'];
echo$check_in;

$check_out=$_POST['check_out'];
echo$check_out;

$adults=$_POST['adults'];
echo$adults;

$children=$_POST['children'];
echo$children;


require("connect.php");
$check_in=$_POST['check_in'];

$sql = "INSERT INTO tbl_booking (check_in, check_out, adults, children)
VALUES ('$check_in','$check_outout','$adults','$children')";
if(mysqli_query($conn,$sql)){
	echo"New record is added succesfully";

}
else{
	echo"Error encountered in adding of record".mysqli_error($conn);
}
?>

