    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn,'login');
    

    $search="Clock";
        
        $sql = "SELECT product_name FROM product WHERE product_name='$search' or product_model = '$search'";
        $result=mysqli_query($conn,$sql);

        $count=mysqli_num_rows($result);
        
        if($count==1) {
            echo '<script language="javascript">';
            echo 'alert("Valid product Identified...")';
            echo '</script>';
        }else {
            echo '<script language="javascript">';
            echo 'alert("No such product")';
            echo '</script>';

        }
        
    
?>
