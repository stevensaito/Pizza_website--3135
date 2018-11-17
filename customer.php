<?php
require('database.php');

?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Fleetwood Pizza</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
	<style>

	#topBlackBar {
                border-top: 20px solid #000;
            }
	#bottomBlackBar {
                border-top: 55px solid #000;
            }
</style>
</head>

<!-- the body section -->
<body>
<main>
<div id="topBlackBar"></div> <br>
    <h1>Fleetwood Pizza</h1>
	<p>Input your information below
	<img src="pictures/pizzapro.jpg" alt="pizza banner" style="width:48%" align="right"/>
        <p><form action="add_order.php" method="post"
              id="customer" name="submit">

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Address:</label>
            <input type="text" name="address"><br>
			
			<label>Phone Number:</label>
            <input type="text" name="phoneNumber"><br><br>

            <input type="submit" name="submit" value="Submit"><br>
        </form>
		    
	
</main>    
<footer></footer>
</body>
</html>