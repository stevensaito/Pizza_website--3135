<!DOCTYPE html>
<html>
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <header>
        <h1>My Guitar Shop</h1>
    </header>
    <main>
        <h1>Your Cart</h1>
		<!---------------------------------------------------->
        <?php if (empty($_SESSION['cart13']) || 
                  count($_SESSION['cart13']) == 0) : ?>
            <p>There are no items in your cart.</p>
			<!-----------------------------------CART IS EMPTY-->
        <?php else: ?>
            <form action="" method="post">
                <input type="hidden" name="action" value="empty_cart">
                <table>
                    <tr id="cart_header"> <!----------------HEADERS----------------><!----------------HEADERS---------------->
                        <th class="left">
                            Item <input type="radio"
                            <?php if ($sort_key == 'name') : ?>
                                checked
                            <?php endif; ?>
                            name="sortkey" value="name"></th>
                        <th class="right">
                            <input type="radio"
                            <?php if ($sort_key == 'cost') : ?>
                                checked
                            <?php endif; ?>
                                name="sortkey" value="cost">
                            Item Cost</th>
                        <th class="right" >
                            <input type="radio"
                            <?php if ($sort_key == 'qty') : ?>
                                checked
                            <?php endif; ?>
                                name="sortkey" value="qty">
                            Quantity</th>
                        <th class="right">
                            <input type="radio"
                            <?php if ($sort_key == 'total') : ?>
                               checked
                            <?php endif; ?>
                                name="sortkey" value="total">
                        Item Total</th>
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
                            <input type="text" class="cart_qty"
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
                    <tr id="cart_footer">
                        <td colspan="3"><b>Subtotal</b></td>
                        <td>$<?php echo cart\get_subtotal(); ?></td>
                    </tr>
					
					<!----------------cart\calls the cart function---------------->
					
					<!----------------UPDATE CART BUTTON---------------->
                    <tr>
                        <td colspan="4" class="right">
                            <input type="submit" value="Update Cart">
                        </td>
                    </tr>
					
					
					
					
                </table>
                <p>Click "Update Cart" to update quantities or the sort 
                   sequence in your cart.<br> 
                   Enter a quantity of 0 to remove an item.
                </p>
            </form>
        <?php endif; ?>
		
<!---------------CART--------><!---------------CART--------><!---------------CART-------->
		<?php /*$customerOrder=array();
foreach( $_SESSION['cart13'] as $key => $item ) :
$custOrderArray [] = $item['name'] . " (" . $item['qty'] . ")";	
endforeach;
echo '<pre>'; print_r($custOrderArray); echo '</pre>';

echo implode(", ", $custOrderArray);
$tell = implode($custOrderArray, ", ");
echo "<br>";
echo "This is after implode " . $tell; */
?>
<!---------------CART--------><!---------------CART--------><!---------------CART-------->


		
		<!----------------CASE ACTION ON cart_start.php---------------->
		<!----.?action=show_cart    takes you to index---->
        <p><a href="?action=show_add_item">Add Item</a></p>
        <p><a href="?action=empty_cart">Empty Cart</a></p>	
    </main>
</body>
</html>