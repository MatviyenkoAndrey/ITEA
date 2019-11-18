<?php 
	require_once 'connection.php';
	$link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));

    
	// if (isset($_POST['id'])) {
	
 //    	$sql = mysqli_query($link, "UPDATE users SET username = {$_POST['name']}, surname = {$_POST['surname']}, email = {$_POST['email']} WHERE id = {$_POST['id']}");
	
	// }
    $usersList = mysqli_query($link, "SELECT * FROM users");
    
	
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
        	<td><a href='edit.php?red_id={$row['id']}'>Edit</a></td>
        	<td><a href='delete.php?del_id={$row['id']}'>Delete</a></td>
        	</tr>";
     		}
     		mysqli_close($link);
		?>
	</table>
	<br>
	<a href="index.php">Add new User</a>
</body>
</html>