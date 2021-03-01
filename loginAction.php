<!DOCTYPE html>
<html>
<head>
	<title>Login Form Action</title>
</head>
<body>

	<h1>Login Form Action</h1>

	<?php 
	session_start();

		if($_SERVER['REQUEST_METHOD'] == "GET") {
			
			if(empty($_GET['uname']) && empty($_GET['pword'])) {
				echo "Please fill up properly";
			} 
			else {
				
				$userName = $_GET['uname'];
				$password = $_GET['pword'];
				
				$SESSION['login_user']= $userName;
				$SESSION['password']= $password;
				
				$f = fopen("data.txt", "r");
				
				$data = fread($f, filesize("data.txt"));
				$data_filter = explode("\n", $data);
				
				if(($data_filter[4]==$userName) && ($data_filter[5]==$password))
				{
					echo "Login Successful!!!<br>";
					echo "$data_filter[4]<br>";
					echo "$data_filter[0]<br>";
					echo "$data_filter[1]<br>";
					echo "$data_filter[3]<br>";
				}
				
				else
				{
					echo "Login Failed";
				}
				 
			}
		}
	?>
	
	<form action="logoutAction.php" method="POST">

		<input type="submit" value="Logout">

	</form>

</body>
</html>