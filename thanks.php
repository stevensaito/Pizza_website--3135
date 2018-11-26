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
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

	<!---button--->		
.button {
    background-color: #f44336; /* Red */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.buttonO {
	border-radius: 10px;
    background-color: #f44336; 
    color: white; 
    border: 2px solid #f44336;
}

.buttonO:hover {
    background-color: white;
    color: black;
	border: 2px solid #f44336;
}

<!---button--->

	</style>
</head>

<!-- the body section -->
<body>
<main>

    <h1 align="center">Fleetwood Pizza</h1>
    <center><img src="pictures/pizzadel-1.jpg" alt="pizza delivery" style="width:80%"/></center>
	
	<br><div><span style="font-size: 25px;">
	<br><p align="center">Thank you for your order!
	<p align="center">Your order will arrive in 30 minutes at
	
	
<?php
date_default_timezone_set('America/Los_Angeles');
$startTime = date("g:i a");
/*echo $startTime;*/
$convertedTime = date('g:i a',strtotime('+30 minute',strtotime($startTime)));
echo ''.$convertedTime;
?></span></div><br>
 
	<form action="index.php"
              id="add_order_form" name="menu" align="center">
	<button class="button buttonO" type="submit" name="menu" value="home" style="height:50px;width:150px;font-size:20px">Return Home</button><br>
	</form>

	
</main>    
<footer></footer>
</body>
</html>