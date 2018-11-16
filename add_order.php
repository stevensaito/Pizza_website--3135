<?php
require_once('database.php');

// Get the product data
$address = filter_input(INPUT_POST, 'address');
$name = filter_input(INPUT_POST, 'name');
$phoneNumber = filter_input(INPUT_POST, 'phoneNumber');
//$cart = "medium";
//$totalPrice = 10;




// Validate inputs
if ($address == null || $name == null || $phoneNumber == null) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    //require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO orders
                 (address, name, phoneNumber)
              VALUES
                 (:address, :name, :phoneNumber)';
    $statement = $db->prepare($query);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':phoneNumber', $phoneNumber);
	//add cart and totalPrice back in once shopping cart created
	//$statement->bindValue(':cart', $cart);
    //$statement->bindValue(':totalPrice', $totalPrice);
	$statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('thanks.php');
}
?>