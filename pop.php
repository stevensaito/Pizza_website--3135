<?php
require_once('database.php');

// run query
$queryProducts = "SELECT * FROM menu";
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

// set array
$array = array();

// look through query
while($row = mysql_fetch_assoc($queryProducts)){

  // add each row returned into an array
  $array[] = $row;

  // OR just echo the data:
  echo $row['username']; // etc

}

// debug:
print_r($array); // show all array data
echo $array[0]['username']; // print the first rows username
