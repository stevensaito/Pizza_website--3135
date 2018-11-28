<?php


$query = 'INSERT INTO cart
                 (foodID, foodName, price )
              VALUES
                 (:foodID, :foodName, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':foodID', $foodID);
    $statement->bindValue(':foodName', $foodName);
    $statement->bindValue(':price', $price);
	//add cart and totalPrice back in once shopping cart created
	$statement->bindValue(':cart', $cart);
    $statement->bindValue(':totalPrice', $totalPrice);
	$statement->execute();
    $statement->closeCursor();	
	
	?>