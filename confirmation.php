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
	<p>Fleetwood Pizza
	<p>Confirm below that this is what you want to order
	<form action="customer.php"
              id="confirmation" name="confirmation">
	<input type="submit" name="confirmation" value="Confirm"><br>
	</form>
	
</main>    
<footer></footer>
</body>
</html>