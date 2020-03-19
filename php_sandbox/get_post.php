<?php 
	if (isset($_GET['name'])) {
		echo $_GET['name'];
	} else {
		echo '500';
	}

	// if (isset($_POST['name'])) {
	// 	$name = htmlentities($_POST['name']);
	// 	echo $name;
	// } else {
	// 	echo '500';
	// }

	// if (isset($_REQUEST['name'])) {
	// 	// print_r($_REQUEST);
	// 	$name = htmlentities($_REQUEST['name']);
	// 	echo $name;
	// } else {
	// 	echo '500';
	// }

	// echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<form method="GET" action="get_post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name"/>
		</div>
		<div>
			<label>Email</label><br>
			<input type="text" name="email"/>
		</div>
		<input type="submit" value="Submit"/>
	</form>
	<ul>
		<li>
			<a href="get_post.php?name=Brad">Brad</a>
		</li>
		<li>
			<a href="get_post.php?name=Steve">Steve</a>
		</li>
	</ul>
</body>
</html>