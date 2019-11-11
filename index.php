<?php 
require_once 'connection.php';
require_once 'functions.php';

$link = mysqli_connect($host, $user, $password, $database)
	or die("Error" . mysqli_error($link));

$tableArticles = mysqli_query($link, $articles) or die("Error" . mysqli_error($link));
$tableUsers = mysqli_query($link, $users) or die("Error" . mysqli_error($link));

mysqli_close($link);
include "form.php";
?>