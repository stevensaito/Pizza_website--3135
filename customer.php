<?php
require('database.php');

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
    <img src="pictures/home_banner.jpg" alt="pizza banner"/>
	<p>Input your information below
        <form action="add_order.php" method="post"
              id="customer" name="submit">


            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Address:</label>
            <input type="text" name="address"><br>
			
			<label>Phone Number:</label>
            <input type="text" name="phoneNumber"><br>

            <input type="submit" name="submit" value="Submit"><br>
        </form>
	
</main>    
<footer></footer>
</body>
</html>