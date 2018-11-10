<?php

function add($A, $B)
{
	$sum = 	$A + $B;
	return $sum;
}

function subtract($A, $B)
{
	$sum = 	$A - $B;
	return $sum;
}

$addA = $_POST['addA'];
$addB = $_POST['addB'];

if(isset($_POST['add']))
{
$total = add($addA, $addB);
}
else if (isset($_POST['subtract']))
{
$total = subtract($addA, $addB);
}


?>



<!DOCTYPE html>
<html>
<head>
<title>Calc</title>
</head>
<body>
<main>
This is for my inclass activity which is a calculator
<p>
<form action="" method="post">
<div id="data">
<label>A</label>
<input type="text" name="addA"><br>
<label>B</label>
<input type="text" name="addB"><br>
</div>

<br>
<div id="buttons">
<label>&nbsp;</label>

<button type="submit" name="add">Add</button><br><p>
<button type="submit" name="subtract">Subtract</button><br>

</div>
<br>

The total is
<?php echo $total ?>

</form>
</main>
</body>
</html>