<?php


// get the food id
$food_id = isset($_GET['foodID']) ? $_GET['foodID'] : 1;
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";


//Connect to database
$database = new Database();
$db = $database->getConnection();

$cart_item = new CartItem($db);

//objects initialized
$cart_item = new CartItem($db);


$cart_item->foodID=$foodID;
$cart_item->quantity=$quantity;



?>