<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Fleetwood Pizza</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
	<style>
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
	</style>
</head>

<!-- the body section -->
<body>
<main>

    <h1 align="center">Fleetwood Pizza</h1>
    <center><img src="pictures/home_banner.jpg" alt="pizza banner"/></center>
	
	<br><div><span style="font-size: 20px;">
	<br><p align="center">Thank you for your order!!
	<p align="center">Your order will arrive at
	
	
<?php

$startTime = date("H:i");
echo $startTime;
echo "<br>";
$convertedTime = date('H:i',strtotime('+30 minute',strtotime($startTime)));
echo 'Converted Time (added 30 minutes):'.$convertedTime;
?></span></div><br>
 
	<form action="index.php" align="center">
	<button class="block" type="submit" >Return Home</button><br>
	</form>

	
</main>    
<footer></footer>
</body>
</html>