<html>
<head>
<title> Search</title>
   <style type="text/css">
 body{
 background-color:#CACFD2;
 }
 input[type=text],input[type=password] {
  width: 30%;
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
  font-size: 12px;
  font-family: Courier New, monospace;
}
input[type=submit]:hover {
  background-color: #C39BD3;
  color: black;
}
fieldset {
        width: 80%;
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
}</style>
</head>
<body>
	<form name="form1" method="POST" target="_top" action="http://localhost/WT%20php/CAT%202/search.php">
<a href="http://localhost/WT%20php/CAT%202/living.php" target="_top"><b>Living Room Products</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/WT%20php/CAT%202/bedroom.php" target="_top"><b>Bedroom Products</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/WT%20php/CAT%202/decor.php" target="_top"><b>Decor</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<input type="text" placeholder="Search" name="search" aria-label="Search" size="70" required>
		<input type="submit" value="search" name="submit"></input>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/WT%20php/CAT%202/php-pdf-master/" target="_top"><b>Your orders</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/WT%20php/Login/" target="_top"><b>Shop Now!!</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/WT%20php/CAT%202/Main%20Page.php" target="_top"><b>Home</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/WT%20php/CAT%202/about%20us%20page.php" target="_top"><b>About Us</b></a>
	</form>
<center>
<fieldset>
	<?php
if(isset($_POST['submit'])){
$search = $_POST['search'];
// connect to database
$con= mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,'login');
$sql = "SELECT * FROM products WHERE product_name='$search' or product_description = '$search'";
$result = mysqli_query($con,$sql);
$foundnum = mysqli_num_rows($result);

if($foundnum==0)
{
	echo '<h1>No results found</h1>';
}
else{
	echo "<h1><strong> $foundnum Result(s) found for \"".$search."\"</strong></h1>";
	$sql = "SELECT * FROM products WHERE product_name='$search' or product_description = '$search'";
	$getquery = mysqli_query($con,$sql);
	while($runrows=mysqli_fetch_array($getquery))
	{
		echo"<h5 class='card-title'>Product Name: ". $runrows["product_name"]."</h5>";
		echo"<h5 class='card-title'>Product Model: ". $runrows["product_description"]."</h5>";
		echo"<h5 class='card-title'>Price: Rs.". $runrows["product_price"]."</h5>";
		echo"----------------------------------------------------------------------------------";
	}
}
mysqli_close($con);
	}
?>
</fieldset>
</body>
</html>



