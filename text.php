



<?php 
	$email = '';
	$pass ='';
	$repassword = '';

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// echo "<pre>";
			// var_dump($_POST);
			// echo "<br>";
		
			$email =($_POST['em']);
			
			$pass =($_POST['psw']);

			$repassword =($_POST['repsw']);
	}

	if ($pass==$repassword) {
		// code...
				echo "<h1>Welcome</h1>";
				echo "Email: ".$email; 
				echo "<br>";
				echo "Password: ".$pass; 
				echo "<br>";
				echo "Confirm Password: ".$repassword; 


				
	} else {
		// code...
		echo "your password dont match";
		include 'Sigup.php';
		

	}

 ?>
