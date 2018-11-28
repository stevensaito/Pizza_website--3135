	<!DOCTYPE html>
	<html>
		<head>
		<title>Fleetwood Pizza</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="main.css" />
	
	</head>
	
	<body>
	<main>
	<h1 align="center">Fleetwood Pizza</h1>
	<h2 align="center">Menu</h2>	<br>
	
	<!----PIZZA----!>
	
	<?php


	$con = mysqli_connect('localhost', 'mgs_user', 'pa55word', 'pizza_database');
	$query = 'SELECT * FROM menu WHERE foodID >= 0 AND foodID <= 12';
	$result = mysqli_query($con, $query);
	


	if ($result){
		if(mysqli_num_rows($result)>0){
			while($product = mysqli_fetch_assoc($result)){
				
				}
			}
		}


	?>

	
	<br><br><br><br><br>

	

	<?php


	$con = mysqli_connect('localhost', 'mgs_user', 'pa55word', 'pizza_database');
	$query = 'SELECT * FROM menu WHERE foodID >= 20 AND foodID <= 29';
	$result = mysqli_query($con, $query);
						
						



	if ($result){
		if(mysqli_num_rows($result)>0){
			while($product = mysqli_fetch_assoc($result)){
				
				}
			}
		}


	?>

	
	
	
	
	
	
	
	<br><br><br><br><br>

	<?php
	$con = mysqli_connect('localhost', 'mgs_user', 'pa55word', 'pizza_database');
	$query = 'SELECT * FROM menu WHERE foodID >= 30 AND foodID <= 39';
	$result = mysqli_query($con, $query);
						
						



	if ($result){
		if(mysqli_num_rows($result)>0){
			while($product = mysqli_fetch_assoc($result)){
				
				}
			}
		}


	?>

	
	
	</div>
	
	<br><br><br><br><br>


	</body>
	</html>
