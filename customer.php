<?php
session_start();
require('database.php');

//echo $_SESSION['foodID'];
//echo "<br>";
$foodID = $_SESSION['foodID'];
//echo $_SESSION['foodName'];
//$foodName = $_SESSION['foodName'];
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

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
}

.button4 {
	border-radius: 4px;
	background-color: #f44336;
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

            <button class="button button4" type="submit" name="submit" value="Submit">Submit<br>
        </form>
		    
	
</main>    
<footer></footer>
</body>
</html>