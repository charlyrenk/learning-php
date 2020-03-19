<?php
	date_default_timezone_set('America/Chicago');
	
	echo date('Y/m/d l');
	echo '<br>';
	echo date('h:i:sa');

	$timestamp = mktime(10,14,54,9,10,1981);
	echo '<br>';
	echo $timestamp;
	echo '<br>';
	echo date('m/d/y l', $timestamp);
	echo '<br>';
	$timestamp2 = strtotime('7:00pm March 22 2016');
	echo '<br>';
	echo $timestamp2;
	echo '<br>';
	echo date('m/d/y l', $timestamp2);
?>