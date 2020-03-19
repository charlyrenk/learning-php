<?php
	// Array

	//Indexed
	$people = array('Kevin', 'Jeremy', "Lumina");
	// array() is the same as []

	// Array push
	$people[] = "Charly";
	echo $people[3];
	// Some important array functions 

	echo "<br/>";
	// Get total number of array elements
	echo count($people);

	echo "<br/>";
	// Print entire array
	print_r($people);

	echo "<br/>";
	// get data type
	var_dump($people);

	echo "<br/>";
	// Associative Arrays
	$people = null;
	$people = array('Brad' => 35, "Jose" => 32, 'Willam' => 37);
	$ids = [22 => 'Brad', 18 => 'Harry', 100 => 'Gandalf'];
	echo $people['Brad'];
	echo "<br/>";
	echo $ids[100];
	// Adding to associative array
	$people['Data'] = 42;
	echo "<br/>";
	echo $people['Data'];

	// Multi dimensional arrays
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 30, 20),
		array('Jeep', 23, 12)
	);
	echo "<br/>";
	echo $cars[1][0];
	echo "<br/>";
	echo $cars[2][2];
?>