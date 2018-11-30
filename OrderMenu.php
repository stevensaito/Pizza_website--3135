
<html>

<head><title>
Fleetwood Pizza
</title>

 <link rel="stylesheet" type="text/css" href="main.css" />


<style>

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

<body>
<h2>
Place your order
</h2>
<main>
    <aside>
        <h1>Pizza</h1>
        <nav>
		
        <ul>
		<img src = "pictures/1.jpg" alt="pepperoni pizza"  style="width:128px;height:128px;"/>
		
		
            <!-- add items individually from each choice -->
	<br><form action="Sub Menu.php"
              id="sub_order_form" name="Pepperoni" align="center">
	<button class="button buttonO" type="submit" name="Pepperoni" value="Add Pepperoni Pizza" style="height:40px;width:100px;font-size:10px">Pepperoni Pizza</button><br>
	</form>
	
	&nbsp;
	&nbsp;
	<br>
	
	<img src = "pictures/6.jpg" alt="hawaiian pizza" style="width:128px;height:128px;"/>
            <!-- display links for all categories -->
	<br><form action="Sub Menu.php"
              id="sub_order_form" name="Cheese" align="center">
	<button class="button buttonO" type="submit" name="Cheese" value="Add Cheese Pizza" style="height:40px;width:100px;font-size:10px">Cheese Pizza</button><br>
	</form>
	&nbsp;
	&nbsp;
	<br>
	
	<img src = "pictures/3.jpg" alt="cheese pizza" style="width:128px;height:128px;"/>		
            <!-- display links for all categories -->
	<br><form action="Sub Menu.php"
              id="sub_order_form" name="Hawaiian" align="center">
	<button class="button buttonO" type="submit" name="Hawaiian" value="Add Hawaiian Pizza"style="height:40px;width:100px;font-size:10px">Hawaiian Pizza</button><br>
	</form>
	&nbsp;
	&nbsp;
	<br>

        </nav>
    </aside>
    <section>
    <h1>Side Orders</h1>
		
	
        <nav>
		
		<ul>
				<img src = "pictures/42.jpg" alt="lasanga" style="width:128px;height:128px;"/>
		
       <!-- add items individually from each choice -->
                       
	<br><form action="Sub Menu.php"
              id="sub_order_form" name="Lasanga" align="center">
	<button class="button buttonO" type="submit" name="Lasanga" value="Add Meat Lasanga" style="height:40px;width:100px;font-size:10px">Lasanga</button><br>
	</form>
	
	&nbsp;
	&nbsp;
                
        </nav>
    </section>
</main>



</body>




</html>