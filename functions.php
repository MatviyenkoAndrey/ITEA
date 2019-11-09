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

?>