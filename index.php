<?php 



?>

<!DOCTYPE htnl>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<meta name="robots" content="follow">

		<title>Page Title</title>
		<base href="/">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.1/css/uikit.min.css" />
	</head>

<body>
	<div class="uk-section uk-container">
		<?php
		echo "Hellow world. Today is: ";
		echo date("Y m d");
		?>
		<p>
			<a href="/login.php">Login</a>
			<a href="/register.php">Register</a>
		</p>
		
		<?php require_once "inc/footer.php"; ?>	

	</div>
</body>
</html>