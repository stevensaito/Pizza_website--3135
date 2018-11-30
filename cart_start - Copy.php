<?php
////MAKE SURE TO EMPTY CART IF ERROR
// Start session management
session_start();
require('database.php');

// Create a cart array if needed - CART UPDATE FROM STARTS
if (empty($_SESSION['cart13'])) { $_SESSION['cart13'] = array(); }

// Create a table of products//////////////////////////THE ARRAY
$products = array();
$queryProducts = "SELECT foodID, foodName, price FROM menu
					WHERE foodID < 50";
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

foreach ($products as $product) :
$products[$product['foodID']] = array('name' => $product['foodName'], 'cost' => $product['price']);
endforeach;
///////////////////////////////////////////SHOWS DATABASE ITEMS IN ARRAY
////below shows the array
//echo '<pre>'; print_r($products); echo '</pre>';

// Include cart functions
require_once('cart.php');

// Get the sort key   THIS AFFECTS THE CATEGORIES ON THE CART_VIEW
$sort_key = filter_input(INPUT_POST, 'sortkey');
if ($sort_key === NULL) { $sort_key = 'name'; }

// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {  /////THIS INITIALIZES THE DEFAULT PAGE
        $action = 'show_add_item';
    }
}

// Add or update cart as needed DEPENDING ON ACTION SELECTED FROM BUTTONS AND SUCH
switch($action) {
    case 'add':
        $key = filter_input(INPUT_POST, 'productkey');
        $quantity  = filter_input(INPUT_POST, 'itemqty');
        cart\add_item($key, $quantity);
        include('cart_view.php');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', 
                FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['cart13'][$key]['qty'] != $qty) {
                cart\update_item($key, $qty);
            }
        }
        cart\sort($sort_key);
        include('cart_view.php');
        break;
    case 'show_cart':
        cart\sort($sort_key);
        include('cart_view.php');
        break;
		//THIS IS SHOWN FIRST, CHANGE TO MENU.php
    case 'show_add_item':
        include('add_item_view.php');
        break;
    case 'empty_cart':
        unset($_SESSION['cart13']);
        include('cart_view.php');
        break;
}
?>