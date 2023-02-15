<html>  
<head>  
    <title>PHP login system</title>  
    <!-- insert style.css file inside index.html  
    <link rel = "stylesheet" type = "text/css" href = "style.css"-->
<style>   
   body{   
    background: #95D3DF;  
}  
form{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  
}  
#button{  
    color: #fff;  
    background: #95D3DF;  
    padding: 7px;  
}
</style>  	
</head>  
<body>  
    
	<?php  
// define variables to empty values  
$nameErr = $passwordErr = "";  
$user = $pass = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
        
    //Password Validation  
    if (empty($_POST["password"])) {  
            $passwordErr = "Password is required";  
    } else {  
            $password = input_data($_POST["password"]);  
           
        //check password length should not be less than 5  
        if (strlen ($password) <= 5) {  
            $passwordErr = "Password must contain more than 5 characters.";  
            }  
    }  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >   
  <center>
<h2>Registration Form</h2>  
<br><br>
    Name: 
    <input type="text" name="name">  
	<br>
    <span class="error"> <?php echo $nameErr; ?> </span>  
    <br><br>  
      
    Password:  
    <input type="password" name="password">  
	<br>
    <span class="error"> <?php echo $passwordErr; ?> </span>  
    <br><br> 

	<input type="submit" name="submit" value="Submit" id="button">   
    <br><br>    
                                
</form>  
  
<?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $passwordErr == "") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
      
			    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "login";  
      
    $con = mysqli_connect($host, $user, $password, $db_name); 
	mysqli_select_db($con,$db_name);	
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
 
     
    //include('login2.php');  
    $username = isset($_POST['user']) ? $_POST['user'] : '' ;  
    $password = isset($_POST['pass']) ? $_POST['pass'] : '';
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
      $sql = "SELECT * FROM logintable where Username=".'$username'." and password=".'$password' ; 
	  
	  // $sql = "SELECT * FROM logintable where Username='".$username."' and password='".$password."'limit1";
	  //$sql = "SELECT *  FROM   logintable  WHERE  Username = .'$username' .and  password = .'$password'";
		$result = mysqli_query($con, $sql) ; 
		if (!$result) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
        }
		while( $row = mysqli_fetch_array( $result)){
        //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		echo $row;
        }
        //$row = mysqli_fetch_array($result, MYSQLI_BOTH);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    } 
?>  
  
    
</body>     
</html>

/*
if(isset($_POST['send'])){
     $from =  $_POST['femail'];
     $phoneno = $_POST['phoneno'];
     $message = $_POST['message'];
     $carrier = $_POST['carrier'];
     if(empty($from)){
       echo("enter the email");
       exit();
     }else if(empty($phoneno)){
   echo("enter the phone no");
     exit();
    }elseif(empty($carrier)){
   echo("enter the specific carrier");
   exit();
    }else if(empty($message)){
  echo("enter the message");
  exit();
  }else{
     $message = wordwrap($message, 70);
     $header = "From: $from\n";
     $subject = 'from submission';
     $to = $phoneno.'@'.$carrier;
	 //$headers =  'MIME-Version: 1.0' . "\r\n"; 
	 //$headers = 'From: <dharshiniraja2002@gmail.com>' . "\r\n";
	 //$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
	// ini_set('SMTP','myserver');
	 //ini_set('smtp_port',25);
	 //ini_set('From: ','admin@example.co.uk')
	 //ini_set("sendmail_from", "you @ your_hosted_domain.com");
     $result = mail($to, $subject, $message, $header);
     echo("message sent to".$to);
  }
}*/