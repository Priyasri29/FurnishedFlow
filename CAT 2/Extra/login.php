<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","register");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<?php

session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username']))
{
	$username = ($_REQUEST['username']);	
	$password = ($_REQUEST['password']);
	$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1)
		{
	    $_SESSION['username'] = $username;  
	    header("Location: z.php");
        }
		else
		{
			echo "<div class='form'>
			<h3>Username/password is incorrect.</h3>
			<br/>Click here to <a href='z.php'>Login</a></div>";
		}
}
else
{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php 
} ?>
</body>
</html>