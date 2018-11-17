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
	
	#topBlackBar {
                border-top: 20px solid #000;
            }
	#bottomBlackBar {
                border-top: px solid #000;
            }
		
	
body, html {
    height: 100%;
    <!---margin: 0;-->
    font-family: Arial, Helvetica, sans-serif;
}
	
.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("pictures/pizza5.jpg");
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
    width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.left {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 80%;
  left: 40%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.right {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 80%;
  left: 59%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .left {
  opacity: 1;
}

.container:hover .right {
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
<div id="topBlackBar"></div> <br>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Fleetwood Pizza</h1>
    <p>Welcome to Fleetwood Pizza</p>
	<!---<form action="OrderMenu.php
              id="index" name="menu" align="center">
	<button type="submit" name="menu" value="View Menu">View Menu</button><br>
	</form>-->
  </div>
</div>

<main>


    <!---<h1 align="center ">Fleetwood Pizza</h1>
	<p align="center">Welcome to Fleetwood Pizza
	<p align="center"><font size="4">Check out our mouthwatering menu</font>--->
	
	<!---  ADD IN When pressed reset cart -->
	<br><form action="OrderMenu.php"
              id="add_order_form" name="menu" align="center">
	<button class="button buttonO" type="submit" name="menu" value="View Menu" style="height:70px;width:200px;font-size:25px">View Menu</button><br>
	</form>
	&nbsp;
	&nbsp;
	<br>
	<!---<img src="pictures/pizza2.jpg" alt="pizza banner" align="left" height="238" width="340"/>
	<img src="pictures/pizza7.jpg" alt="pizza banner" align="right" height="238" width="340"/>--->
	
	
<div class="container">
  <img src="pictures/pizza7.jpg" alt="deal1" class="image" style="width:48%" align="left">
  <div class="left">
    <div class="text"><form action="OrderMenu.php"
              id="add_order_form" name="menu" align="center">
	<button class="button buttonDeal" type="submit" name="menu" value="View Menu" style="height:70px;width:200px;font-size:20px">Hot Wheels Combo</button><br>
	</form>
	</div>
  </div>
</div>

	
<div class="container">
  <img src="pictures/pizza2-1.jpg" alt="deal1" class="image" style="width:48%" align="right">
  <div class="right">
    <div class="text"><form action="OrderMenu.php"
              id="add_order_form" name="menu" align="center">
	<button class="button buttonDeal" type="submit" name="menu" value="View Menu" style="height:70px;width:200px;font-size:20px">Flying V Combo</button><br>
	</form>
	</div>
  </div>
</div>
</main>    
<footer>	</footer>
<br><br><br><br><div id="bottomBlackBar"></div>
</body>
</html>