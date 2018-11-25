<?php
require_once('database.php');
$queryProducts = "SELECT * FROM menu
					ORDER BY foodID ASC";
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
if (!empty($queryProducts)) { 
	foreach($queryProducts as $key=>$value){
?>
	<div class="product-item">
		<form method="post" action="index.php?action=add&code=<?php echo $queryProducts[$key]["code"]; ?>">
		<div class="product-image"><img src="<?php echo $queryProducts[$key]["image"]; ?>"></div>
		<div class="product-tile-footer">
		<div class="product-title"><?php echo $queryProducts[$key]["name"]; ?></div>
		<div class="product-price"><?php echo "$".$queryProducts[$key]["price"]; ?></div>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
		</div>
		</form>
	</div>
<?php
	}
}
?>