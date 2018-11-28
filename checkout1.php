<?php

session_start();
require 'connect.php';
require 'item.php';

//save new order
mysqli_query($con, 'insert into orders(name, datecreation, status, username) 
values ("order", "'.date('Y-m-d').'",0,"account")');
$ordersID = mysqli_insert_id($con);
echo 'insert into orders(name, datecreation, status, username) 
values ("order", "'.date('Y-m-d').'",0,"account")';
echo $ordersID;

//save details
$cart = unserialize ( serialize ($_SESSION ['cart']) ) ;
for($i=0; $i<count($cart); $i++){
	mysqli_query($con, 'insert into ordersdetail(productid, ordersid, price, quantity)
values('.$cart[$i]->id.', '.$ordersID.','.$cart[$i]->prices.', '.$cart[$i]->quantity.');


}



// clear the cart
unset($_SESSION['cart']);
?>
Thanks or buying products. Click <a href="index.php">here</a> to continue shopping.