<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="with=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">

			<title> Payment form</title>
		</head>
		
	<body>


<div class="loginbox">

<h1>Payment form</h1>
<form action="process_payment.php" method ="post">
	<p>Email Address</p>
	<input type="" name="email_address" placeholder="Enter email address">
	
	<p>Card number</p>
	<input type="text" name="card_number" placeholder="Enter card number">
	
	<p>Hotel</p>
	<select name="hotel" id="hotel">
  <option value="Tamarind hotel">Tamarind hotel</option>
  <option value="weston">Weston</option>
  <option value="ole sereni">ole sereni</option>
  <option value="panari">panari</option>
<option value="green span">green span</option>
  <option value="kempinski">kempinski</option>
  <option value="marigold">marigold</option>
  <option value="travellers beach">travellers beach</option>
  <option value="star fish">star fish</option>
</select>

	<p>Price</p>
		<select name="price" id="price">
  <option value="100">Tamarind hotel-100</option>
  <option value="120">Weston-120</option>
  <option value="89">ole sereni-89</option>
  <option value="150">panari-150</option>
<option value="115">green span-115</option>
  <option value="139">kempinski-139</option>
  <option value="108">marigold-108</option>
  <option value="139">travellers beach-139</option>
  <option value="108">star fish-108</option>
</select>
	<p>Check_in</p>
	<input type="text" name="check_in" placeholder="Enter check-in date">

	<p>Days</p>
	<input type="int" name="days" placeholder="Enter days">
	
	
	
	<input type="submit" name="" value="PAY">
	
</form>


	</body>
	</html>
