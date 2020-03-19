<?php
	// Check for posted data
	// echo (filter_has_var(INPUT_POST, 'data')) ? 'data found' : 'no data';

	/*
 	if (filter_has_var(INPUT_POST, 'data')) {
		$email = $_POST['data'];
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		echo $email . "<br>";
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo 'Email Valid';
		} else {
			echo "Email is not valid";
		} 
	 } else {
		echo 'no data';
	 }
	 
	$var = "d23";
	if (filter_var($var, FILTER_VALIDATE_INT)) {
		echo $var . " is a number";
	} else {
		echo $var . " is not a number";
	} 

	*/

		$var = "ssdgfs45245kjnkj23525";
		var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name='data'/>
	<button type="submit">Submit</button>
</form>