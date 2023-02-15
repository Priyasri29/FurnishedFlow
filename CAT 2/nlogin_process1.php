    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn,'login');
    

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $sql = "SELECT username FROM users WHERE username='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        $count=mysqli_num_rows($result);
        
        if($count==1) {
            
            include 'C:\Users\dhars\Desktop\WT Lab\Furnished Flow\Main Page.html';
            
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
			include 'nlogin.php';

        }
        
    }
?>
