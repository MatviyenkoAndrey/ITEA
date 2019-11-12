<?php 
	$articles = "CREATE TABLE IF NOT EXISTS articles(
		id INT AUTO_INCREMENT PRIMARY KEY,
		user_id INT,
		title VARCHAR(200) NOT NULL UNIQUE,
		content VARCHAR(200),
		created_on DATETIME,
		updated_on DATETIME
	)";
	$users = "CREATE TABLE IF NOT EXISTS users(
		id INT AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(200) NOT NULL UNIQUE,
		surname VARCHAR(200),
		email VARCHAR(200) NOT NULL UNIQUE,
		password VARCHAR(200),
		created_on DATETIME,
		updated_on DATETIME 
	)";


	
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	if (!preg_match("/^[a-яA-Яa-zA-Z ]*$/",$name)){
		trigger_error("Invalid name");
		$inputErr = "Please check your data";
		}
	}

	if (isset($_POST['surname'])) {
		$surname = $_POST['surname'];
	if (!preg_match("/^[a-яA-Яa-zA-Z ]*$/",$surname)){
		trigger_error("Invalid surname");
		$inputErr = "Please check your data";
		}
	}

	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		trigger_error("Invalid email");
		$inputErr = "Please check your data";
		}
	}

	

	if(!$inputErr){

echo "New User: $name $surname - $email";
	

	} else {
		echo $inputErr;
	}


?>