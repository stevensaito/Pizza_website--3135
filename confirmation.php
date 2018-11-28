<?php
session_start();
require_once('database.php');

		
		
//$foodID = $_SESSION['foodID'];
$foodID = filter_input(INPUT_POST, 'foodID', FILTER_VALIDATE_INT);
$sub = 0;



$sql = "INSERT INTO cart VALUES ('$foodID')";

function add_cart(){
	return $sub * 0.12;
	}

function calculate_tax($sub){
	//echo " calculate_tax ";
	//echo $sub;
	return $sub * 0.12;
	}
	
function calculate_total($tax, $sub){
	//echo " calculate_total ";
	//echo $tax;
	//echo " ____  ";
	//echo $sub;
	return $tax + $sub;
	}
	
	//$test="six";

	
	
	
//this shows multiple
//$queryProducts = "SELECT * FROM menu
					//WHERE foodID < 3";
$queryProducts = "SELECT * FROM menu
					WHERE foodID = '$foodID'";
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

foreach ($products as $product) :
$sub = $sub + $product['price'];
endforeach;
$tax = calculate_tax($sub);
$total = calculate_total($tax, $sub);

$_SESSION['foodID'] = $foodID;
foreach ($products as $product) :
$_SESSION['cart'] = $product['foodName'];
endforeach;
//$_SESSION['foodName'] = $foodName;
$_SESSION['total'] = $total;

	
?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Fleetwood Pizza</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
<style>

html {
    background-image: url("pictures/background.jpg");
}
h1 {
    color: #f44336;
	font-size: 200%;
}

.blockRed{
		border-radius: 10px;
    display: block;
    width: 100%;
    border: none;
    background-color:  #f44336;;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
	color: white;
}
.blockRed:hover {
    background-color: #ddd;
    color: black;
}

.blockGreen{
		border-radius: 10px;
    display: block;
    width: 100%;
    border: none;
    background-color:  #28a428;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
	color: white;
}
.blockGreen:hover {
    background-color: #ddd;
    color: black;
}


</style>
</head>

<!-- the body section -->
<body>
<main>
    <h1>Fleetwood Pizza</h1>
	<p>Confirm your order below<br><br>
	<b>Item</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   <b>Price</b>
	<!---MAYBE MAKE A TABLE FOR THIS--><!---MAYBE MAKE A TABLE FOR THIS-->
	<?php   //echo $foodID ?><!--<br>-->
	<?php foreach ($products as $product) : ?>
	<br><?php //echo $product['foodID']; ?>
	<br><?php echo $product['foodName']; ?> &emsp;&emsp;&emsp; <?php echo $product['price']; ?>
	<br><?php //echo $product['description']; ?>
	
	
	<?php endforeach; ?>
	<?php for($row = 0; $row < 4; $row++) {
		echo "<ul>";
		for ($col = 0; $col< 3; $col++) {
		echo "<li>".$food[$row][$col]."</li>";
		}
	echo "</ul>";
	}
	?>
	<br>__________________________________________________<br><br><br>
	<label><b>Subtotal</b></label>&emsp;&emsp;&emsp;  $<?php echo $sub ?>  <br>
	<label><b>Tax</b></label>&emsp;&emsp;&emsp;  $<?php echo number_format($tax,2) ?> <br>
	<label><b>Your Total</b></label>&emsp;&emsp;&emsp; $<?php echo number_format($total, 2) ?> <br>
	
	
	
	<form action="customer.php">
	<br><br><button class="blockRed" type="submit" >Confirm your order</button>
	</form>
	<form action="menu.php">
	<br><button class="blockGreen" type="submit" >Return to the menu</button>
	</form>
	
</main>    
<footer></footer>
</body>
</html>