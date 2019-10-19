<?php 

	//Allow the config 
	define('__CONFIG__', true);

	//Require the config
	require_once "../inc/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//Always return json format
		header('Content=Type: application/json');

	$return = [];

	$email = Filter::String( $_POST[
		'email']);


	//Make sure the user dose not exist.

	$findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");

	$findUser->bindParam(':email' , $email,PDO::PARAM_STR);

	$findUser->execute();

	if($findUser->rowCount() == 1){

		//User exist
		$return['error'] = "You already have an account";
		$return['is_logged_in'] = false;
	} else {
		//User does not exist 

		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$addUser = $con->prepare("INSERT INTO Users(email, :passowrd");
		$addUser->bindParam(':email', $email , PDO::PARAM_STR);
		$addUser->execute();

		$user_id = $con->lastInsertID()

		$_SESSION['user_id'] = (int) $user_id;

		$return['redirect'] = '/dashboard.php?message=welcome';
		$return['is_logged_in'] = true;

	}

	echo json_encode($return, JSON_PRETTY_PRINT);
	exit;

	else{
		//DIE
		exit('Invalid URL')
	}
	//Make sure the user can be added AND is added

	//Return the proper information back to javaScipt to redirect us 


	$return['redirect'] = '/dashboard.php';
	$return['name'] = "Ramy s3f";

	echo json_encode($return, JSON_PRETTY_PRINT);
		exit;
	} else{
		//Die 
		exit('test');
	}	

	?>