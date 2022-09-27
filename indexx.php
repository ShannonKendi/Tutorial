<?php

include 'connect.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:user_login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koulen&family=Macondo&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	
</head>
<body>
<div class="navbar">
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
	<img src="Molena.png" height ="80cm" width="80cm  ">
    
	<ul>
		
  <li><input type="text" placeholder="Type text"></li>
  <li><button type="submit">Search</button></li>
  <li><a href="#men">Home</a></li>
  <li><a href="#women">About</a></li>
  <li><a href="#">Feedback</a></li>
  <li><a href="confirmation.php">Change user details</a></li>
</ul>
</div>
</div>
<div class="section1">

	
    <?php
      $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE ID = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
   ?>

   <h1>Welcome to HOLIDAY, <span><?php echo $fetch_user['username']; ?></span> </h1>
   
<h1>Where we make travelling easier an more enjoyable </h1>

<br>
<br>

</div>
<div class="section2">
	<section class="container">
		
		<div class="card">
			<div class="card-image car-1"></div>
			<h2>DESTINATIONS</h2>
			<p>Maasai Mara,Serengeti National Park,Diani Beach!It doesnt get more hotter!</p>
			<a href="">LEARN MORE</a>
		</div>
		<div class="card">
			<div class="card-image car-2"></div>
			<h2>HOTELS</h2>
			<p>We have a variety of hotels specifically handpicked to meet everyone's financial needs!</p>
			<a href="">LEARN MORE</a>
		</div>
		<div class="card">
			<div class="card-image car-3"></div>
			<h2>THINGS TO DO</h2>
			<p>You want to go hiking,climbing,swimming, we got that covered for you!</p>
			<a href="">LEARN MORE</a>
		</div>

</section>
<section class="benefits">
		
		<div class="wildcard">
			<div class="wildcard-image car-4"></div>
			<h2>NEVER PLAN FOR A TRIP AGAIN</h2>DESTINATIONS
			<p>You heard it right!We take care of everything!From transport to accomodation</p>
			
		</div>
		<div class="wildcard">
			<div class="wildcard-image car-5"></div>
			<h2>CHEAP PRICES</h2>
			<p>Our prices are very pocket friendly!Especially if you are a large group!</p>
			
		</div>
		<div class="wildcard">
			<div class="wildcard-image car-6"></div>
			<h2>WE STICK TOGETHER</h2>
			<p>Even during your trip,we do check ins to ensure you are getting the best services and treatment.</p>
			
		</div>

</section>
<div class="test">
<h1>Testimonials</h1>
<div class="contain">
	<div class="indicator">
		<span class="btn active"></span>
		<span class="btn"></span>
		<span class="btn"></span>
		<span class="btn"></span>
	</div>
	<div class="testimonial">
<div class="slide-row" id="slide">
	<div class="slide-col">
		<div class="user-text">
			<p>I love the Agency.It has good customer service and the best deals.</p>
			<h3>Lupita</h3>
			<p>Black Panther</p>
		</div>
		<div class="user-img">
			<img src="Lupita.png">
		</div>
	</div>

	<div class="slide-col">
		<div class="user-text">
			<p>I loved how stress free I was during the trip. I will definitely be using Holiday! again.</p>
			<h3>Lewis</h3>
			<p>Black Panther</p>
		</div>
		<div class="user-img">
			<img src="Lewis2.png">
		</div>
	</div>
	<div class="slide-col">
		<div class="user-text">
			<p>A very organized company.They kept on checking on me and my family and alerting us of any security threat around our area.</p>
			<h3>Barbie</h3>
			<p>Black Panther</p>
		</div>
		<div class="user-img">
			<img src="Barbie.png">
		</div></div>
		
	<div class="slide-col">
		<div class="user-text">
			<p>I absolutely love their service!</p>
			<h3>Shetty</h3>
			<p>Black Panther</p>
		</div>
		<div class="user-img">
			<img src="Shetty.png">
		</div>
		</div>
	</div>		
	</div>
</div>
</div>
</div>
<div class="contacts">
	<img src="instagram.png"><p> HOLIDAY!</p> 
	<td><img src="facebook.png"><p>HOLIDAY!</p>
</div>
<script > var btn=document.getElementByClassName("btn");
var slide=document.getElementById("slide");
btn[0].onclick=function(){
	slide.style.transform="translateX(0px)";
}
btn[1].onclick=function(){
	slide.style.transform="translateX(-800px)";
}
btn[2].onclick=function(){
	slide.style.transform="translateX(-1600px)";
}
btn[3].onclick=function(){
	slide.style.transform="translateX(-2400px)";
}
</script>
</body>
</html>