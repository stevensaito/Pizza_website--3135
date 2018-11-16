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
	<p>Confirm below that this is what you want to order<br><br>
	__________________________________________________<br><br><br>
	<b>Subtotal</b><br>
	<b>Tax</b><br>
	<b>Your Total</b><br>
	
	<form action="customer.php">
	<br><br><button class="block" type="submit" >Block Button</button>
	</form>
	
</main>    
<footer></footer>
</body>
</html>