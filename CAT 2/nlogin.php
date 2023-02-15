<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
   <style type="text/css">
 body{
 background-color:#CACFD2;
 }
 input[type=text],input[type=password] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #7D3C98;
  border-radius: 4px;
  background-color: #C39BD3;
  color: #A9DFBF;
}
input[type=text]:focus,input[type=password]:focus {
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
		<center>
		<br><br><br><br><br><br><br>
			<h1><strong>Login<br></strong></h1>
            <form action="nlogin_process1.php" method="post" name="login">
                <fieldset>
                    
					<b>Username: </b>
                    <input type="text" name="userid" id="Uname" >
					<br><br>
					<b>Password: </b>
                    <input type="password" name="password" id="Pass" >
					<br><br>
                    <input type="submit" value="Login" >
					<br>
					<a href='registration.php'>New to Furnished Flow?</a>
                </fieldset>
            </form>    
			
		
</body>
</html>

