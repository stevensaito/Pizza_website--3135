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
    font-size: 200%;
}

h1, h2 {
    color: #f44336;
}

.collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    border: 2px solid white;
}

.active, .collapsible:hover {
    background-color: #f44336;
}

.content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
}

</style>
</head>

<!-- the body section -->
<body>
<main>
    <h1 align="center">Fleetwood Pizza</h1>
	<h2 align="center">Menu</h2>	<br>
	
<!---PIZZA---><!---PIZZA---><!---PIZZA---><!---PIZZA---><!---PIZZA---><!---PIZZA---><!---PIZZA--->
<button class="collapsible"><b>Pizzas</b></button>
<?php
require_once('database.php');

$queryProducts = "SELECT * FROM menu
					WHERE foodID >= 0 AND foodID <= 12";
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

?>
<div class="content">
  	<?php foreach ($products as $product) : ?>
	<br><b><?php echo $product['foodName']; ?></b>
	<?php echo "     ($" ?><?php echo $product['price']; ?><?php echo ")" ?>
	<br><?php echo $product['description']; ?>
	<form action="index.php"
              id="add_order_form" name="menu">
	<button type="submit" name="menu" value="home">Return Home</button><br>
	</form>
	<br><br>
	<?php endforeach; ?>
</div>

<!---WINGS----><!---WINGS----><!---WINGS----><!---WINGS----><!---WINGS----><!---WINGS----><!---WINGS---->
<button class="collapsible"><b>Traditional Wings</b></button>
<?php
require_once('database.php');

$queryProducts = "SELECT * FROM menu
					WHERE foodID >= 20 AND foodID <= 29";
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

?>
<div class="content">
  	<?php foreach ($products as $product) : ?>
	<br><b><?php echo $product['foodName']; ?></b>
	<?php echo "($" ?><?php echo $product['price']; ?><?php echo ")" ?>
	<br><?php echo $product['description']; ?><br><br>
	<?php endforeach; ?>
</div>

<!----BITES---><!----BITES---><!----BITES---><!----BITES---><!----BITES---><!----BITES--->
<button class="collapsible"><b>Boneless Bites</b></button>
<?php
require_once('database.php');

$queryProducts = "SELECT * FROM menu
					WHERE foodID >= 30 AND foodID <= 39";
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

?>
<div class="content">
  	<?php foreach ($products as $product) : ?>
	<br><b><?php echo $product['foodName']; ?></b>
	<?php echo "     ($" ?><?php echo $product['price']; ?><?php echo ")" ?>
	<br><?php echo $product['description']; ?><br><br>
	<?php endforeach; ?>
</div>

<!----PASTA---><!----PASTA---><!----PASTA---><!----PASTA---><!----PASTA---><!----PASTA---><!----PASTA--->
<button class="collapsible"><b>Pastas</b></button>
<?php
require_once('database.php');

$queryProducts = "SELECT * FROM menu
					WHERE foodID >= 40 AND foodID <= 49";
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

?>
<div class="content">
  	<?php foreach ($products as $product) : ?>
	<br><b><?php echo $product['foodName']; ?></b>
	<?php echo "     ($" ?><?php echo $product['price']; ?><?php echo ")" ?>
	<br><?php echo $product['description']; ?><br><br>
	<?php endforeach; ?>
</div>
	
	
	
	<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


</main>    
<footer></footer>
</body>
</html>




</html>