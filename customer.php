<?php
session_start();
require('database.php');

//echo $_SESSION['foodID'];
//echo "<br>";
//$foodID = $_SESSION['foodID'];
//echo $_SESSION['foodName'];
//$foodName = $_SESSION['cart'];
//echo "<br>";
//echo $_SESSION['total'];
$total = $_SESSION['total'];


//$cars=array("Volvo","BMW","Toyota");
//print_r ($cars);
//echo "<br>";
//echo implode(", ", $cars);
//$cart = implode(", ", $cars);
//echo "<br>";
//echo "This is after implode " . $foodName;
//$_SESSION['cart'] = $cart;	

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

.container {
    position: relative;
}
.box {
  position: absolute;
  top: 10px;
  right: 30px;
}

main {
    margin-bottom: 20px;
}

.buttonGreen {
    background-color: #28a428; /* Green */
    border: none;
    color: white;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 4px;
}

	
.buttonGreen:hover {
    background-color: #ddd;
    color: black;
}

.buttonRed {
    background-color: #f44336; /* Green */
    border: none;
    color: white;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 4px;
}
	
.buttonRed:hover {
    background-color: #ddd;
    color: black;
}


</style>
</head>

<!-- the body section -->
<body>
<main>
    
	<!--<div class="container"><div class="box">
	<img src="pictures/pizzapro.jpg" alt="pizza banner" style="width:43%" align="right"/>
	</div></div>-->
	
	<h1>Fleetwood Pizza</h1>
	<p>Input your information below
	
        <p><form action="add_order.php" method="post"
              id="customer" name="submit">

            <label>Name:</label>
            <input type="text" name="name" required/><br>

            <label>Address:</label>
            <input type="text" name="address" required/><br>
			
			<label>Phone Number:</label>
            <input type="tel" pattern="[0-9]{10}" name="phoneNumber" required /><br><br>

            <button class="buttonGreen" type="submit" name="submit" value="Submit">Submit</button>
        </form>
		
			<form action="cart_start.php" method="post">
	<input type="hidden" name="action" value="show_add_item">
	 <input class="buttonRed" type="submit" value="Return to order">
	<!--<br><button class="blockGreen" type="submit" a>Add more items</button>-->
	</form>
	
<?php $customerOrder=array();
foreach( $_SESSION['cart13'] as $key => $item ) :
$custOrderArray [] = $item['name'] . " (" . $item['qty'] . ")";	
endforeach;
//echo '<pre>'; print_r($custOrderArray); echo '</pre>';

//echo implode(", ", $custOrderArray);
$tell = implode($custOrderArray, ", ");
//echo "<br>";
//echo "This is after implode " . $tell; 
//echo "<br>" . $total;
$_SESSION['cart'] = $tell;	
//echo "<br>SESSION: " . $_SESSION['cart'];
?>
	
	
</main>    
<footer></footer>
</body>
</html>