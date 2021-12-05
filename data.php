<?php 

	// $default variable with empty value
	
	$email = '';
	$pass ='';
	$repassword = '';

	// $_SERVER -> bien global, array


	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// echo "<pre>";
	// var_dump($_POST);
		// echo "<br>";
	
		$email =($_POST['em']);
		
		$pass =($_POST['psw']);

		$repassword =($_POST['repsw']);
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
			 
			 	<p> Email: <?php echo $email; ?></p>
			 	<p> Password: <?php echo $pass; ?></p>
			 	<p> Confirm Password: <?php echo $repassword; ?></p>


			</body>
			</html>
