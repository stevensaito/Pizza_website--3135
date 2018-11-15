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
	<p>Thank you for the order!!
	<p>Your order will arrive at
	
	

<?php

$startTime = date("H:i:s");
echo $startTime;
echo "<br>";
$cenvertedTime = date('H:i:s',strtotime('+15 minute',strtotime($startTime)));
echo 'Converted Time (added 15 minutes): '.$cenvertedTime;
?>
 
	<form action="index.php"
              id="thanks" name="home">
	<input type="submit" name="home" value="Return to home"><br>
	</form>
	
</main>    
<footer></footer>
</body>
</html>