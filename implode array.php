$foodID = 'hi';
		$foodName = 'hey';
		$price = 'boo';

		$foodData = array(
			'foodID' => $foodID,
			'foodName' => $foodName,
			'price' => $price

		);
		//print_r($foodData);



		$fields_sql = '`' . implode('`,`', array_keys($foodData)). '`';

		$values_sql = '\''. implode('\',\'', $foodData) . '\'';


		// was using ', now use back tick `
		$sql = "
			INSERT INTO `table`($fields_sql)
				VALUES('$foodID','$foodName','price')";

		echo $sql;	
		
		
		
		<!--
	<form action="confirmation.php">
	<button class="	" type="submit" >Empty cart</button>
	<?php 
	//unset($_SESSION['cart13']);
        //include('confirmation.php');
		?>
	</form>
	-->