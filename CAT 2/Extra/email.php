<!DOCTYPE html>
<?php
if(isset($_POST['send'])){
$username = "dharshiniraja2002@gmail.com";
$password = "7hvFA!gGDt#23@f";

//get form data
$number = $_POST["numberext"].$_POST["number"];
$from = $_POST["from"];
$message = $_POST["message"];

$vars = "uname=".$username."&pword=".$password."&message=".$message."&from=".$from."&selectednums=".$number."&info=1&test=1";

if($_POST['submitted']=="true")
{
	$curl = curl_init('http://www.txtlocal.com/sendsmspost.php');
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $vars);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_USERAGENT,'Google Chrome/91.0.4472.114 ');
	//echo curl_error($curl);
	$result = curl_exec($curl);
	curl_close($curl);
	
	die("SMS is sent.");
}

}
?> 
<html>
<head>
<meta charset="utf-8">
<title>Send sms</title>
</head>

<body>
<form method="POST">
<center>
Number:
	<input type="text" size="2" name="numberext">-<input type = "text" name="number">
<br><br>
Sender:
	<input type="text" name="from" >
<br><br>

Message:
	<textarea name="message"></textarea>
<br><br>
<input type="hidden" name="submitted" value="true">
<input type="submit" value ="send" name="send">

			
</body>
</html>