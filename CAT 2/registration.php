<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
   <style type="text/css">
 body{
 background-color:#CACFD2;
 }
 input[type=text],input[type=password],input[type=email] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #7D3C98;
  border-radius: 4px;
  background-color: #C39BD3;
  color: #A9DFBF;
}
input[type=text]:focus,input[type=password]:focus,input[type=email]:focus {
  border: 3px solid #555;
}
input[type=submit] {
  background-color: #839192;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
  font-size: 20px;
  font-family: Courier New, monospace;
}
input[type=submit]:hover {
  background-color: #C39BD3;
  color: black;
}
fieldset {
        width: 40%;
		color: #17202A;
		border: 3px solid #555;
		font-family: Courier New, monospace;
		font-size: 20px;
}
h1 {
  color:#4A235A;
  text-shadow: 3px 2px #C39BD3;
  font-family: Courier New, monospace;
  font-size: 40px;
}
</style>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","login");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<?php
// If form submitted, insert values into the database.
if (isset($_REQUEST['username']))
{
        // removes backslashes
	$username = ($_REQUEST['username']); 
	$email = ($_REQUEST['email']);
	$password = ($_REQUEST['password']);
        $query = "INSERT into `users` (username, password, email)
VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo '<script language="javascript">';
            echo 'alert("You have successfully registered...Now login again")';
            echo '</script>';
			include 'nlogin.php';
        }
    }else{
?>
<center>
<h1>Registration</h1>
<fieldset>
<form name="registration" action="" method="post"><br>
<input type="text" name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input type="submit" name="submit" value="Register" />
</fieldset>
</form>
<?php } ?>
</body>
</html>
