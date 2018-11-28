<?php
session_start();
$product_ids = array();
session_destroy();

if(filter_input(INPUT_POST, 'foodID')){
	if(isset($_SESSION['shopping_cart'])){
	//count how many orders in the cart
	$count = count($_SESSION['shopping_cart']);
	
	//sequential array for matching keys
	$product_ids = array_column($_SESSION['foodID'], 'id');
	
	$product_ids = array_column($_SESSION['home'], 'id');
			
	if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
		$_SESSION['shopping_cart'][$count] = array
			(
			'id' => filter_input(INPUT_GET, 'foodID'),
			'food' => filter_input(INPUT_POST, 'foodName'),
			'price' => filter_input(INPUT_POST, 'price'),
			'quantity' => filter_input(INPUT_GET, 'quantity')
			
			
			
			)
			
			
			
	else
	
	{
		for($i = 0, $i < count($products_ids); $i++){
	if ($product_ids[$i} == filter_input(INPUT_GET, 'id')){
	$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
			}
		
		}
		
	}
	
	
	
	
	
	
	
	{
	//if the shopping crt oesn't exist, create a product with array key 0
	//else creay array with form data
	$_SESSION['shopping_cart'][0] = array(
	'id' => filter_input(INPUT_GET, 'foodID'),
	'food' => filter_input(INPUT_POST, 'foodName'),
	'price' => filter_input(INPUT_POST, 'price'),
	'quantity' => filter_input(INPUT_GET, 'quantity')
			);

	}
}
//print_r($_SESSION);


function pre_r($array){echo '<pre>';
print_r($array);
echo '</pre>';
}
?>