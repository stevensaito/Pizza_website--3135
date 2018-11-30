<?php
//session_start();
require_once('database.php');

//$foodID = $_SESSION['foodID'];
$foodID = filter_input(INPUT_POST, 'foodID', FILTER_VALIDATE_INT);
$sub = cart\get_subtotal();

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

//foreach ($products as $product) :
//$sub = $sub + $product['price'];
//endforeach;
//$tax = calculate_tax($total);
//$orderTotal = calculate_total($tax, $total);
//echo $total;

//$_SESSION['foodID'] = $foodID;
//foreach ($products as $product) :
//$_SESSION['cart'] = $product['foodName'];
//endforeach;
//$_SESSION['foodName'] = $foodName;
//$_SESSION['total'] = $orderTotal;

	
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
    background-color:  #f44336;
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

.blockYellow{
		border-radius: 10px;
    display: block;
    width: 100%;
    border: none;
    background-color:  #ff8000;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
	color: white;
}
.blockYellow:hover {
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
	
	        <?php if (empty($_SESSION['cart13']) || 
                  count($_SESSION['cart13']) == 0) : ?>
            <p>There are no items in your cart.</p>
	
	<!--<b>Item</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   <b>Price</b>-->
	<!---MAYBE MAKE A TABLE FOR THIS--><!---MAYBE MAKE A TABLE FOR THIS-->
	<?php   //echo $foodID ?><!--<br>-->
	<?php //foreach ($products as $product) : ?>
	<br><?php //echo $product['foodID']; ?>
	<br><?php //echo $product['foodName']; ?> &emsp;&emsp;&emsp; <?php //echo $product['price']; ?>
	<br><?php //echo $product['description']; ?>
	<?php //endforeach; ?>
	
        <?php else: ?>
            <form action="" method="post">
                <input type="hidden" name="action" value="update">
                <table>
                    <tr id="cart_header"> <!----------------HEADERS----------------><!----------------HEADERS---------------->
                        <th class="left">         Item  </th>
                        <th class="right">      Cost </th>
                        <th class="right" >  Quantity</th>
                        <th class="right"> Total</th>
                    </tr> <!----------------HEADERS----------------><!----------------HEADERS---------------->
                   

				   <!----------------LOOP TO DISPLAY CART---------------->
				   <!----------------cart13   is the name of the session variable ---------------->
				   <!----------------$key  ---------------->
				   <!----------------$item  ---------------->
				   <?php foreach( $_SESSION['cart13'] as $key => $item ) :
                        $cost  = number_format($item['cost'],  2);
                        $total = number_format($item['total'], 2);
                    ?>
					
                    <tr>
                        <td>
						<!----------------      ---------------->
                            <?php echo $item['name']; ?>
                        </td>
                        <td class="right">
                            $<?php echo $cost; ?>
                        </td>
                        <td class="right">
						
						<!----------------      ---------------->
                            <input type="text" class="cart_qty" style="text-align:center"
                                name="newqty[<?php echo $key; ?>]"
                                value="<?php echo $item['qty']; ?>">
								<!----------------      ---------------->
                        </td>
                        <td class="right">
                            $<?php echo $total; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
					<!----------------LOOP TO DISPLAY CART---------------->
					
					
					<!----------------TOTAL---------------->
                    <!--<tr id="cart_footer">
                        <td colspan="3"><b>Subtotal</b></td>
                        <td>$<?php echo cart\get_subtotal(); ?></td>
                    </tr> -->
					
					<!----------------cart\calls the cart function---------------->
					
					<!----------------UPDATE CART BUTTON---------------->
                    <tr>
                        <td colspan="4" class="right">
                            <input type="submit" value="Update Cart">
                        </td>
                    </tr>
					
					
					
					
                </table>
               
            </form>
        <?php //endif; ?>
	
	<?php
	$tax = calculate_tax(cart\get_subtotal());
	$orderTotal = calculate_total($tax, cart\get_subtotal());
	$_SESSION['total'] = $orderTotal;
	
	?>
	
	<br>__________________________________________________<br><br><br>
	<label><b>Subtotal</b></label>&emsp;&emsp;&emsp;  $<?php //echo $sub ?><?php echo cart\get_subtotal(); ?>  <br>
	<label><b>Tax</b></label>&emsp;&emsp;&emsp;  $<?php echo number_format($tax,2) ?> <br>
	<label><b>Your Total</b></label>&emsp;&emsp;&emsp; $<?php echo number_format($orderTotal, 2) ?> <br>
	
	<!--
	<form action="confirmation.php">
	<button class="	" type="submit" >Empty cart</button>
	<?php 
	//unset($_SESSION['cart13']);
        //include('confirmation.php');
		?>
	</form>
	-->
	
	<br><p>Click "Update Cart" to update quantities<br> 
                   Enter a quantity of 0 to remove an item.
                </p>
	 <?php endif; ?>
	 
	<form action="customer.php">
	<br><br><button class="blockRed" type="submit" >Confirm your order</button>
	</form>
	
	<br>	
	<form action="" method="post">
	<input type="hidden" name="action" value="show_add_item">
	 <input type="submit" class="blockGreen" value="Add more items">
	<!--<br><button class="blockGreen" type="submit" a>Add more items</button>-->
	</form>
	
	<br>	
	<form action="" method="post">
	<input type="hidden" name="action" value="empty_cart">
	 <input type="submit" class="blockYellow" value="Empty Cart">
	<!--<br><button class="blockGreen" type="submit" a>Add more items</button>-->
	</form>
	
	
	
	<!--<p><a href="?action=show_add_item">Add Item</a></p>
        <p><a href="?action=empty_cart">Empty Cart</a></p>-->	
	
</main>    
<footer></footer>
</body>
</html>