<?php 
require_once 'connection.php';
require_once 'functions.php';
include 'form.php';



$link = mysqli_connect($host, $user, $password, $database)
	or die("Error" . mysqli_error($link));

$tableArticles = mysqli_query($link, $articles) or die("Error" . mysqli_error($link));
$tableUsers = mysqli_query($link, $users) or die("Error" . mysqli_error($link));



mysqli_query($link, "INSERT INTO users (username, surname, email) VALUES('$name', '$surname', '$email')");


mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<br>
	<a href="users.php">List of Users</a>
</body>
</html>