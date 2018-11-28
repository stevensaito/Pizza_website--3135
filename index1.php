<?php
require 'connect.php';
$result - mysqli_query($con, 'select * from menu');
?>

<table cellpadding="2" cellspacing="2" border="0">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
	</tr>
	
	
	<?php
	while($product = mysqli_fetch_object($result)){?>
	<tr>
		<td><?php echo $product->foodID ?></td>
		<td><?php echo $product->foodID ?></td>
		<td><?php echo $product->foodID ?></td>
		<td><a href="cart1.php?id=<?php echo $product->id; ?>"></td>
	</tr>
	<?php } ?>
	</table>
		