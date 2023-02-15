<?php

//if(isset($_POST['submit'])){
$search = $_POST['search'];
echo $search;
//$search="Clock";
// connect to database
$con= mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,'login');


//$sql = “ SELECT *  FROM   product table  WHERE  match( product name, product model, price, image) AGAINST (‘%” .$ search.”%’)”;
//$sql = "SELECT * FROM product1 WHERE productname =".$search;
//$sql = "SELECT * FROM product WHERE match(product_name,product_model,price,image) AGAINST ('%".$search."%')";
$sql = "SELECT product_name FROM product WHERE product_name='$search'";
//echo $result;
if (mysqli_query($con,$sql))
  echo "Success.....";
else
  die('Error: ' . mysqli_error());


mysqli_close($con);
//}
?>