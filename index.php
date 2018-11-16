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

    <h1 align="center ">Fleetwood Pizza</h1>
    <center><img src="pictures/home_banner.jpg" alt="pizza banner" /></center>
	<p align="center">Welcome to Fleetwood Pizza
	<p align="center"><font size="4">Check out our mouthwatering menu</font>
	<form action="add_order.php"
              id="add_order_form" name="menu" align="center">
	<input type="submit" name="menu" value="View Menu"><br>
	</form>
	&nbsp;
	&nbsp;
	<img class="index" src="pictures/home_banner.jpg" alt="pizza banner" align="left"/>
	<img src="pictures/home_banner.jpg" alt="pizza banner" align="right" height="42" width="42"/>
	
</main>    
<footer></footer>
</body>
</html>