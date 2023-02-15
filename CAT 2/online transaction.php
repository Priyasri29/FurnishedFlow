<!DOCTYPE html>
<html>
<head>
<title>Online Transaction</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="C:\Users\dhars\Desktop\WT Lab\Furnished Flow\style1.css">
<script src="C:\Users\dhars\Desktop\WT Lab\Furnished Flow\validate.js"></script>
</head>
<body style="background-color:lavenderblush";>

<a style="text-decoration:none" href="Main Page.php"> <b style="color:black;">Go to Home Page</b></a>
<div class="order-placement-form">
<h2> Online Transaction </h2>
<div id="error_message"></div>
<form id="myform" onsubmit="return validate();">

		<p>Card Holder Name</p>
        <input type="text" placeholder="Cardholder Name" id="name" required>  <br/> <br/> 
		<p>Card Number</p>
        <input type="text" placeholder="Card Number" id="number" required>  <br/> <br/>
		<p>CVV Number</p>
        <input type="password" placeholder="CVV Number" id="cvvno" required>	<br/><br/>

<p> Expiry date(month/year) : </p>
<select name="months" id="months">
                                <option value="Jan">Jan</option>
                                <option value="Feb">Feb</option>
                                <option value="Mar">Mar</option>
                                <option value="Apr">Apr</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="Aug">Aug</option>
                                <option value="Sep">Sep</option>
                                <option value="Oct">Oct</option>
                                <option value="Nov">Nov</option>
                                <option value="Dec">Dec</option>
                            </select>
                            <select name="years" id="years">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select><br/><br/>




<input type="submit">
</form>
</body>
</html>
