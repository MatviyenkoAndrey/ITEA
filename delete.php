<?php 
	require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));

	if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы
    $sql = mysqli_query($link, "DELETE FROM users WHERE id = {$_GET['del_id']}");
    if ($sql) {
      echo "<p>User was deleted</p>";
    } else {
      echo '<p>Something was wrong: ' . mysqli_error($link) . '</p>';
    }
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
	<a href="users.php">List of Users</a>
</body>
</html>
