    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn,'login');
    
	
    $search="Clock";
        
        $sql = "SELECT * FROM product WHERE product_name='$search' or product_model ='$search'";
        $result=mysqli_query($conn,$sql);

        $count=mysqli_num_rows($result);
        
        if($count==1) {
			while($runrows=mysqli_fetch_array($result))
			{
			 echo '<script language="javascript">';
            echo 'alert("Valid product Identified...")';
            echo '</script>';
		//echo $runrows['product_name'].' ';
		 //echo $runrows["product_model"];
       // echo $runrows['price'].' ';
       // echo $runrows['image'].'<br>';
		echo"----------------------------------------------------------------------------------------------------------------------------------";
			}
        }
		else {
            echo '<script language="javascript">';
            echo 'alert("No results found")';
            echo '</script>';
			include 'Main Page.php';
		}
?>
