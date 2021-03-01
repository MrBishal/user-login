<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

		if($_SERVER['REQUEST_METHOD'] == "POST") {
			
			if(empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['gender']) && empty($_POST['email'])
				&& empty($_POST['uname']) && empty($_POST['pword']) && empty($_POST['remail'])) {
				echo "Please fill up the form properly";
			} 
			else {
				$firstName = $_POST['fname'];
				$lastName = $_POST['lname'];
				$gender = $_POST['gender'];
				$email = $_POST['email'];
				$userName = $_POST['uname'];
				$password = $_POST['pword'];
				$recoveryEmail = $_POST['remail'];
				echo "Information Saved to file is: <br> $firstName <br> $lastName <br> $gender <br> $email <br> $userName <br> $password <br> $recoveryEmail";
				
				$f = fopen("data.txt", "w");
				
				fwrite($f, $firstName . "\n" . $lastName . "\n" . $gender . "\n" . $email . "\n" . $userName . "\n" . $password . "\n" . $recoveryEmail . "\n");
			}
		}
	?>

</body>
</html>