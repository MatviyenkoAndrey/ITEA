<?php 
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
echo "User: $name $surname - $email";
} else {
	echo $inputErr;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<br>
	<a href="index.php">Home</a>
</body>
</html>