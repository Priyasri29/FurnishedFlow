<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "login";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
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
      
        $sql = "SELECT *FROM login table where User name = '$username' and password = '$password'" ;  
       
		$result = mysqli_query($con, $sql); 
		if (!$result) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
        }
		while( $row = mysqli_fetch_array( $result,MYSQLI_ASSOC)){
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
  ?>