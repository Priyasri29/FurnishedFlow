
<?php
if(isset($_POST['submit'])){
    require('fpdf/fpdf.php');
    $name = $_POST['userid'];
    $prod = $_POST['prod'];
	$orderid = $_POST['date'];
    $title = 'Furnished Flow | Order Details';

    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->SetTitle($title);
    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Calculate width of title and position
    $w = $pdf->GetStringWidth($title)+50;
    $pdf->SetX((210-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(127, 140, 141,1);
    $pdf->SetFillColor(149, 165, 166,1);
    $pdf->SetTextColor(255,255,255,1);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(1);
    // Title
    // Cell(width, height, content, border, nextline parametters, alignement[c - center], fill)
    $pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    // Line break
    $pdf->Ln(10);

    $pdf->SetTextColor(0,0,0,1);
    $w = $pdf->GetStringWidth($name)+20;
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Name:', 1, 0, 'C');
    $pdf->Cell($w, 10, $name, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Product ID:', 1, 0, 'C');
    $pdf->Cell($w, 10, $prod, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Order ID:', 1, 0, 'C');
    $pdf->Cell($w, 10, $orderid, 1, 1, 'C');
    
		
		$conn = mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($conn,"login");
		
        $sql1 = "SELECT * FROM orders_items WHERE order_id='$prod' ";
        $result1=mysqli_query($conn,$sql1);
        $count1=mysqli_num_rows($result1);
        
        $sql2 = "SELECT * FROM products WHERE product_id='$orderid' ";
        $result2=mysqli_query($conn,$sql2);
        $count2=mysqli_num_rows($result2);
				
         if($count1==1 and $count2==1) {
			while($runrows2=mysqli_fetch_array($result2) and $runrows1=mysqli_fetch_array($result1))
			{
			     $pdf->SetX((170-$w)/2);
				 $pdf->Cell(40, 10, 'Product ID:', 1, 0, 'C');
				 $pdf->Cell($w, 10, $runrows2["product_id"], 1, 1, 'C');
				 
				 
				 $pdf->SetX((170-$w)/2);
				 $pdf->Cell(40, 10, 'Product Name:', 1, 0, 'C');
				 $pdf->Cell($w, 10, $runrows2["product_name"], 1, 1, 'C');
				 
				 
				 $pdf->SetX((170-$w)/2);
				 $pdf->Cell(40, 10, 'Price(per item):', 1, 0, 'C');
				 $pdf->Cell($w, 10, $runrows2["product_price"], 1, 1, 'C');
				 
				 
				 $pdf->SetX((170-$w)/2);
				 $pdf->Cell(40, 10, 'Quantity:', 1, 0, 'C');
				 $pdf->Cell($w, 10, $runrows1["quantity"], 1, 1, 'C');
				 
				 
				 $pdf->SetX((170-$w)/2);
				 $pdf->Cell(40, 10, 'Amount:', 1, 0, 'C');
				 $pdf->Cell($w, 10, ($runrows2["product_price"]*$runrows1["quantity"]), 1, 1, 'C');
				 $pdf->Output();
			}
        }
		else {
            echo '<script language="javascript">';
            echo 'alert("No results found")';
            echo '</script>';
			include 'Main Page.php';
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="css/style.css">
	<style>
	 body{
 background-color:#CACFD2;
 }
 input[type=text],input[type=password] {
  width: 70%;
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
</style>
</head>
<body>
    <div class="main-block">
        <div class="header">
            Furnished Flow
        </div>
        <div class="body">
		<center>
		<br><br><br><br><br><br><br>
			<h1><strong>Order Details<br></strong></h1>
            <form action="" method="post" name="pdf">
                <fieldset>
                    
					<b>Username: </b>
                    <input type="text" name="userid" id="userid" >
					<br><br>
					<b>Order ID: </b>
                    <input type="text" name="prod" id="prod" >
					<br><br>
					<b>Product ID: </b>
                    <input type="text" name="date" id="date"  >
					<br><br>
                    <input type="submit" value="Submit" name="submit" >
					<br>
                </fieldset>
            </form> 
        </div>
        
    </div>
</body>
</html>