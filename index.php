<?php
require_once('database.php');

?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Fleetwood Pizza</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<main>

    <h1>Fleetwood Pizza</h1>
    <img src="home_banner.jpg" alt="pizza banner"/>
	<p>Welcome to Fleetwood Pizza
	<p>Check out our mouthwatering menu
	<form action="add_order.php"
              id="add_order_form" name="menu">
	<input type="submit" name="menu" value="View Menu"><br>
	</form>
	
</main>    
<footer></footer>
</body>
</html>