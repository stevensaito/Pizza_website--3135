<?php
require_once('database.php');

function calculate_tax(){
	return $sub * 0.12;
	}
	
function calculate_total(){
	return $tax + $sub;
	}
	

?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Fleetwood Pizza</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
<style>
	.block {
    display: block;
    width: 100%;
    border: none;
    background-color:  #D08504;
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
	<p>Confirm your order below<br><br>
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