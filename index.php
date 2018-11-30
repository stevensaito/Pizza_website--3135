<?php
require_once('database.php');
?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Fleetwood Pizza</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
	
	<style>

	
body, html {
    height: 100%;
    <!---margin: 0;-->
    font-family: Arial, Helvetica, sans-serif;
}

html {
    background-image: url("pictures/background.jpg");
}
	
.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("pictures/pizza5.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}	

.hero-text button:hover {
  background-color: #555;
  color: white;
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

.buttonDeal {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.buttonDeal:hover {
    background-color: #f44336;
    color: white;
}
<!---button--->

<!----deal--->
.container {
    position: relative;
}

.container_innerR {
    position: relative;
	top: 100px;
	left: 63%;
}
.container_innerL {
    position: relative;
	top: 100px;
	left: 10%;
}

.image {
  opacity: 1;
  display: block;
  transition: .5s ease;
  backface-visibility: hidden;
}

.overlay {
  position: absolute;
  opacity: 0;
  transition: .3s ease;
  background-color: red;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  background-color: #f44336;
  color: white;
  font-size: 16px;
}
	</style>
</head>

<!-- the body section -->
<body>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Fleetwood Pizza</h1>
    <p>Welcome to Fleetwood Pizza</p>
  </div>
</div>

<main>
	
	<!---  ADD IN When pressed reset cart -->
	<br><form action="cart_start.php"
              id="add_order_form" name="menu" align="center">
	<button class="button buttonO" type="submit" name="menu" value="View Menu" style="height:70px;width:200px;font-size:25px">View Menu</button><br>
	</form>
	&nbsp;
	&nbsp;
	<br>
	
	
<div class="container">
  <img src="pictures/pizza7.jpg" alt="deal1" class="image" style="width:48%" align="left">
  <div class="container_innerL">
  <div class="overlay">
    <div class="text">
	<form action="cart_start.php" method="post" align="center">
	<button class="button buttonDeal" type="submit" name="menu" value="View Menu" style="height:70px;width:200px;font-size:20px">Hot Wheels Combo</button><br>
	
	 <input type="hidden" name="foodID"
                           value="24">
  
	</form>
	</div>
	</div>
  </div>
</div>

	
<div class="container">
  <img src="pictures/pizza2-1.jpg" alt="deal1" class="image" style="width:48%" align="right">
  <div class="container_innerR">
  <div class="overlay">
    <div class="text">
	<!--<form action="confirmation.php" method="post" align="center">
	<button class="button buttonDeal" type="submit" name="menu" value="View Menu" style="height:70px;width:200px;font-size:20px">Flying V Combo</button><br>
	
	  
 <input type="hidden" name="foodID"
                           value="10">-->
						   <form action="confirmation.php" method="post">
						   
						   	<form action="cart_start.php" method="post" align="center">
	<button class="button buttonDeal" type="submit" name="menu" value="View Menu" style="height:70px;width:200px;font-size:20px">Hot Wheels Combo</button><br>
	
	 <input type="hidden" name="foodID"
                           value="32">
  
	</form>
						   
	<!--<input type="hidden" name="action" value="add">
	<!--<button class="button buttonO" type="submit" name="menu" value="home">Add to cart</button><br>-->
	<!--<button class="button buttonDeal" type="submit" name="menu" value="View Menu" style="height:70px;width:200px;font-size:20px">Flying V Combo</button><br>
	<?php //foreach ($products as $key => $product) : ?>
	<input type="hidden" name="foodID"
                           value="<?php //echo $product['foodID']; ?>">
<input type="hidden" name="foodName"
                           value="<?php //echo $product['foodName']; ?>">	
<input type="hidden" name="price"
                           value="<?php //echo $product['price']; ?>">							   
							<?php //$name =  ?>
							<?php //endforeach; ?>-->
	</form>

	</div>
	</div>
  </div>
</div>
<br><br>
<img src="pictures/pizza9-1.png" alt="pizza banner" align="left" height="125" width="759"/>
</main>    
<footer>	</footer>
<br><br><br><br><div id="bottomBlackBar"></div>
</body>
</html>