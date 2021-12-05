<?php 

	// $default variable with empty value
	$username = '';
	$email = '';
	$pass ='';

	// $_SERVER -> bien global, array


	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// echo "<pre>";
	// var_dump($_POST);
		// echo "<br>";
		$username=($_POST['uname']);
	
		$email=($_POST['em']);
		
		$pass=($_POST['psw']);
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
</head>
<body>
 	<h1>Welcome</h1>
 
 	<p> User Name: <?php echo $username; ?></p>
 	<p> Email: <?php echo $email; ?></p>
 	<p> Password: <?php echo $pass; ?></p>


</body>
</html>