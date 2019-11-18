<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
	if (isset($_POST['name'])) {
      //Если это запрос на обновление, то обновляем
      if (isset($_GET['red_id'])) {
          $sql = mysqli_query($link, "UPDATE users SET username = '{$_POST['name']}',surname = '{$_POST['surname']}', email = '{$_POST['email']}' WHERE id = {$_GET['red_id']}");
      }
    }
	if (isset($_GET['red_id'])) {
    	$sql = mysqli_query($link, "SELECT id, username, surname, email, password FROM users WHERE id = {$_GET['red_id']}");
    	$list = mysqli_fetch_array($sql);
    }
	mysqli_close($link);
	
	?>




	<form action="" method="post">
		<p>ID: <input type="text" name="id" value="<?php echo $_GET['red_id']; ?>"></p>
		<p>Username: <input type="text" name="name" value="<?php echo $list['username']; ?>"></p>
		<p>Usersername: <input type="text" name="surname" value="<?php echo $list['surname']; ?>"></p>
		<p>Email: <input type="email" name="email" value="<?php echo $list['email']; ?>"></p>
		<p>Password: <input type="password" name="password" value="<?php echo $list['password']; ?>"></p>
		<p><input type="submit" value="Save changes"></p>
	</form>

	
	<br>
	<a href="users.php">List of Users</a>

</body>
</html>