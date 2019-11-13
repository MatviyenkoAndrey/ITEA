<?php 
	require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
	
	if (isset($_GET['red_id'])) {
      
      header('Location: edit.php');
      exit();
    }
    $usersList = mysqli_query($link, "SELECT * FROM users");
	// while ($row = mysqli_fetch_array($usersList)) {
 //        print_r($row);
 //     	echo "<br>";
 //    }
	// mysqli_close($link);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="2">
		<tr>
    		<td><b>id</b></td>
    		<td><b>username</b></td>
    		<td><b>surname</b></td>
    		<td><b>email</b></td>
    		<td><b>password</b></td>
    		<td><b>created_on</b></td>
    		<td><b>updated_on</b></td>
  		</tr>
		<?php 
			while ($row = mysqli_fetch_array($usersList)) {
        	echo "<tr>
        	<td>{$row['id']}</td>
        	<td>{$row['username']}</td>
        	<td>{$row['surname']}</td>
        	<td>{$row['email']}</td>
        	<td>{$row['password']}</td>
        	<td>{$row['created_on']}</td>
        	<td>{$row['updated_on']}</td>
        	<td><a href='?red_id={$row['id']}'>Edit</a></td>
        	</tr>";
     		}
     		mysqli_close($link);
		?>
	</table>
	<br>
	<a href="index.php">Add new User</a>
</body>
</html>