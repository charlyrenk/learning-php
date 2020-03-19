<?php
	# LOOPS - Execute code set number of times

	// For Loop
	// @params - init, condition, inc

	// for($i = 0; $i <= 10;$i++){
	// 	echo $i;
	// 	echo '<br>';
	// }

	// While Loop
	// @params - condition

	// $i = 0;

	// while($i < 10) {
	// 	echo $i;
	// 	echo '<br>';
	// 	$i++;
	// }

	#Do...while
	// @params - condition
	$i = 0;

	// do {
	// 	echo $i;
	// 	echo '<br>';
	// 	$i++;
	// }

	// while($i < 10);
	
	#For each - for arrays

	// $people = array('Kevin', 'Jeremy', "Lumina");

	// foreach($people as $person){
	// 	echo $person;
	// 	echo '<br>';
	// }

	#For each for associative arrays
	$people = array('Kevin' => 'brad@gmail.com', 'Jeremy' => 'jeremy@gmail.com', "Lumina" => 'lumina@gmail.com');

	foreach($people as $person => $email){
		echo $person . ": " . $email;
		echo '<br>';
	}