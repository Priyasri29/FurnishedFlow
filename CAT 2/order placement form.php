<!DOCTYPE html>
<html>
<head><title> order placing form </title>
<script src="C:\Users\dhars\Desktop\WT Lab\Furnished Flow\validate1.js"></script>
<link rel="stylesheet" type="text/css" href="C:\Users\dhars\Desktop\WT Lab\Furnished Flow\style1.css">
</head>
<body>
<div class="order-placement-form">
<a style="text-decoration:none" href="Main Page.php"> <b style="color:black;">Go to Home Page</b></a>
<center><h1> Furnished Flow </h1></center><br/>
<h2> PLACE YOUR ORDER HERE </h2>
<div id="error_message"></div>
<form id="myform" onsubmit="return validate();"> 
		<p> Name<b style="color:red;">*</b>: </p>
        <input type="text" placeholder="Name" id="name" required>  <br/> 
		<p> Phone Number <b style="color:red;">*</b>: </p>
        <input type="text" placeholder="Phone number" id="phone" required>  <br/> 
		<p> E-mail id: </p>
        <input type="text" placeholder="Email" id="email">	<br/>
		<p> Quantity required<b style="color:red;">*</b>: </p>
        <input type="text" placeholder="Quantity Required" id="quantity"><br/>
		<p> Delivery address<b style="color:red;">*</b>: </p>
        <input type="text" name="address" placeholder="Enter address" style="height:100px" id="message" required><br/><br/>
    


<p> Payment mode<b style="color:red;">*</b>: </p>
<input type="radio" name="payment" value="cash on delivery" id="cod"  >
<label for="payment">Cash on delivery</label><br>
<input type="radio" name="payment" value="online transaction" id="rb">
<label for="payment">Online transaction</label><br>

<p> Feedback / Suggestion: </p>
<input type="text" name="feedback" placeholder="Give us your feedback..." style="height:100px"><br/><br/>

<input type="submit">

</form>


</div>

</body></html>