<?php 
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database)
	or die("Error" . mysqli_error($link));
if ($link) {
	echo "Connection is Ok";
}

mysqli_close($link);
?>