<html>

<?php
require 'connect.php';
$result = mysqli query($con, 'select * from menu');


?>

<!-- the head section -->
<head>
    <title>Fleetwood Pizza</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
<style>

<body>
<main>
    <h1 align="center">Fleetwood Pizza</h1>
	<h2 align="center">Menu</h2>	<br>
	
<!---PIZZA---><!---PIZZA---><!---PIZZA---><!---PIZZA---><!---PIZZA---><!---PIZZA---><!---PIZZA--->
<button class="collapsible"><b>Pizzas</b></button>

<div class="content">
	<?php foreach ($products as $product) : ?>
	<?php $image_filename = 'pictures/' . $product['foodID'] . '.jpg'; ?>
	<img src="<?php echo $image_filename; ?>" alt="pic" style="width:15%" align="right">
	<br><b><?php echo $product['foodName']; ?></b>
	<?php echo "     ($" ?><?php echo $product['price']; ?><?php echo ")" ?>
	<br><?php echo $product['description']; ?>
	<form action="confirmation.php" method="post">
	<button class="button buttonO" type="submit" name="menu" value="home">Add to cart</button><br>
	<input type="hidden" name="foodID"
                           value="<?php echo $product['foodID']; ?>">
	</form>
	
	
	<br>
	<?php endforeach; ?>
</div>

<!---WINGS----><!---WINGS----><!---WINGS----><!---WINGS----><!---WINGS----><!---WINGS----><!---WINGS---->
<button class="collapsible"><b>Traditional Wings</b></button>

<div class="content">
  	<?php foreach ($products as $product) : ?>
	<?php $image_filename = 'pictures/' . $product['foodID'] . '.jpg'; ?>
	<img src="<?php echo $image_filename; ?>" alt="pic" style="width:15%" align="right">
	<br><b><?php echo $product['foodName']; ?></b>
	<?php echo "($" ?><?php echo $product['price']; ?><?php echo ")" ?>
	<br><?php echo $product['description']; ?>
		<form action="confirmation.php" method="post">
	<button class="button buttonO" type="submit" name="menu" value="home">Add to cart</button><br>
	<input type="hidden" name="foodID"
                           value="<?php echo $product['foodID']; ?>">
	</form>
	<br>
	<?php endforeach; ?>
</div>

<!----BITES---><!----BITES---><!----BITES---><!----BITES---><!----BITES---><!----BITES--->

<div class="content">
  	<?php foreach ($products as $product) : ?>
	<?php $image_filename = 'pictures/' . $product['foodID'] . '.jpg'; ?>
	<img src="<?php echo $image_filename; ?>" alt="pic" style="width:15%" align="right">
	<br><b><?php echo $product['foodName']; ?></b>
	<?php echo "     ($" ?><?php echo $product['price']; ?><?php echo ")" ?>
	<br><?php echo $product['description']; ?>
		<form action="confirmation.php" method="post">
	<button class="button buttonO" type="submit" name="menu" value="home">Add to cart</button><br>
	<input type="hidden" name="foodID"
                           value="<?php echo $product['foodID']; ?>">
	</form>
	<br>
	<?php endforeach; ?>
</div>

<!----PASTA---><!----PASTA---><!----PASTA---><!----PASTA---><!----PASTA---><!----PASTA---><!----PASTA--->
<button class="collapsible"><b>Pastas</b></button>
<?php
//require_once('database.php');

$queryProducts = "SELECT * FROM menu
					WHERE foodID >= 40 AND foodID <= 49";
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

?>
<div class="content">
  	<?php foreach ($products as $product) : ?>
	<?php $image_filename = 'pictures/' . $product['foodID'] . '.jpg'; ?>
	<img src="<?php echo $image_filename; ?>" alt="pic" style="width:15%" align="right">
	<br><b><?php echo $product['foodName']; ?></b>
	<?php echo "     ($" ?><?php echo $product['price']; ?><?php echo ")" ?>
	<br><?php echo $product['description']; ?>
		<form action="confirmation.php" method="post">
	<button class="button buttonO" type="submit" name="menu" value="home">Add to cart</button><br>
	<input type="hidden" name="foodID"
                           value="<?php echo $product['foodID']; ?>">
	</form>
	<br>
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