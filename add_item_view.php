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
        <h1>Add Item</h1>
        <form action="" method="post">
            <input type="hidden" name="action" value="add">

            <label>Name:</label>
			
			
			
            <select name="productkey">
			<!----------------USES $key as loop, product is one item---------------->
            <?php foreach($products as $key => $product) :
                $cost = number_format($product['cost'], 2);
                $name = $product['name'];
                $item = $name . ' ($' . $cost . ')'; //Used in option
            ?>
			<!---   Shows the items ----><!---   Shows the items ---->
                <option value="<?php echo $key; ?>">
                    <?php echo $item; ?>
                </option>
            <!---   Shows the items ----><!---   Shows the items ---->
			<?php endforeach; ?>
            </select><br>
			<br>

			            <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>
			
			
            <label>&nbsp;</label>
            <input type="submit" value="Add Item">
        </form>
		<!----.?action=show_cart    takes you to index---->
        <p><a href="?action=show_cart">View Cart</a></p>    
    </main>
</body>
</html>