<?php 
	require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
	$usersList = mysqli_query($link, "SELECT * FROM users");
	while ($row = $usersList->fetch_assoc()) {
        print_r($row);
     	echo "<br>";
    }
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
	<a href="index.php">Add new User</a>
</body>
</html>