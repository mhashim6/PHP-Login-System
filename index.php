<?php 
	//Allow the config
	define('__CONFIG__',true);
	//Require the config
	Require_once "inc/footer.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<meta name="robots" content="follow">

		<title>Page Title</title>
		<base href="/">
		<link rel="stylesheet" href="PHP-Login-System/assets/js/jquery-3.4.1.min.js">
		<link rel="stylesheet"  href="/PHP-Login-System/assets/css/uikit.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.1/css/uikit.min.css" />
	</head>

<body>
	<div class="uk-section uk-container">
		<?php
		echo "Helloo world. Today is: ";
		echo date("Y m d");
		?>
		<p>
			<a href="/PHP-Login-System/login.php">Login</a>
			<a href="/PHP-Login-System/register.php">Register</a>
		</p>
		
		<?php require_once "inc/footer.php"; ?>	

	</div>
</body>
</html>