<?php
session_start();
	require_once('database.php');

$foodID = $_SESSION['foodID'];

function calculate_tax(){
	return $sub * 0.12;
	}
	
function calculate_total(){
	return $tax + $sub;
	}
	
	$test="six";
	
	
$queryProducts = "SELECT * FROM menu
					WHERE foodID = '$foodID'";
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
	
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
}

.block {
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
.block:hover {
    background-color: #ddd;
    color: black;
}


</style>
</head>

<!-- the body section -->
<body>
<main>
    <h1>Fleetwood Pizza</h1>
	<p>Confirm your order below<br>
	<?php foreach ($products as $product) : ?>
	<br><?php echo $product['foodID']; ?>
	<br><?php echo $product['foodName']; ?>
	<br><?php echo $product['price']; ?>
	<br><?php echo $product['description']; ?>
	<?php endforeach; ?>
	
	__________________________________________________<br><br><br>
	<label><b>Subtotal</b></label><br>
	<label><b>Tax</b></label><br>
	<label><b>Your Total</b></label><br>
	
	<form action="customer.php">
	<br><br><button class="block" type="submit" >Confirm your order</button>
	</form>
	
</main>    
<footer></footer>
</body>
</html>