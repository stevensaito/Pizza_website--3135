<?php
session_start ();
require 'connect.php';
require 'item.php';
if (isset ($_GET ['id'])  && !isset($_POST['update'])){
		$result =mysqli_query ($con, 'select * from product where id=' . $_GET ['foodID'] );
		$product = mysqli_etch_object ($result);
		$item = new Item();
		$item->foodID = $product->foodID;
		$item->foodName = $product->foodName;
		$item->price = $product->price;
		$item->quantity = 1;
		
		//Check if food exists
		$index = -1;
		if (isset ($_SESSION ['cart'] )) {
			$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
			for ($i = 0; $i < count ( $cart ); $i ++)
		if ($cart [$i]->foodID == $_GET ['foodID']) {
			
			$index = $i;
			break; 
			
		}
		
		if ($index == -1)
			$_SESSION ['cart'][] = $item;
		else {
			
			$cart[$index]->quantity ++;
			$_SESSION ['cart'] = $cart;
			}
			
		}
			//delete
			if (isset ($_GET ['index'] )) {
				$cart = unserialize ( serialize ( $_SESSION ['cart']) );
				unset ($cart [$_GET ['index']]);
				$cart = array_values ($cart);
				$_SESSION ['cart'] = $cart;
				
			}
			?>
			
			
			//update quantity in cart
			if(isset($_POST['update'])) {
				$arrQuantity = $_POST['quantity'];
				
				//Check validity quantity
				$valid = 1;
				for($i=0; $i<count($arrQuantity); $i++)
			if(!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1) {
				$valid = 0;
				break;
				
			}
			if(valid==1){
				$cart = unserialize ( serialize ( $_SESSION [cart'] ) );
					for($i = 0; $i < count ( $cart ); $i ++) {
					$cart[$i]->quantity = $arrQuantity[$i];
					}
					$_SESSION ['cart']=$cart;
			}
			else			
			
			$error = 'Invalid quantity';

			}
				?>
				
				
				
				<?php echo isset($error) ? $error : ''; ?>
		<form method="post">
			<table cellpadding="2" cellspacing="2" border="1">
			<tr>
				<th>Option</th>
				<th>Id</th>
				<th>Name</th>
				<th>Price</th>
//update button	<th>Quantity <input type="image" src ="pictures/pepperoni.jpg"></th>
					<input type ="hidden" nme="update">
				<th>Sub Total</th>
	
			</tr>
			<?php 
			$cart = unserialize ( serialize ( $_SESSION ['cart']) );
			$s = 0;
			$index = 0;
			for($i = 0; $i < count($cart); $i ++)
				$s += $cart [$i]-> price _ $cart [$i]->quantity;
			?>
			
			<tr>
				<td><a href ="cart.php?index=<?php echo $index; ?>"
				onclick="return confirm('Are you sure?')">Delete</a></td>
				<td><?php echo $cart[$i]->foodID; ?></td>
				<td><?php echo $cart[$i]->foodName; ?></td>
				<td><?php echo $cart[$i]->price; ?></td>
				<td><td><input type="text" value="<?php echo $cart[$i]->quantity; ?>"
				style="width: 30px;" name="quantity[]"></td>
				<?php echo $cart[$i]->price * $cart[$i]->quantity; ?></td>
			</tr>
			
			<?php	
			$index++;
			}
			?>
			
			<tr>
					<td> copan="5" align="right">Sum</td>
					<td align="left"><?php echo $s; ?></td>
					</tr>
					</table>
					
					
					<br>
					<a href="inex.php">Continue Shopping</a> | <a href="checkout.php">Checkout</a>
			