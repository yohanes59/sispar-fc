<?php 
$tableUser = "CREATE TABLE IF NOT EXISTS users(
	id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password varchar(100) NOT NULL,
	role enum('Admin', 'User') DEFAULT 'User' NOT NULL,
	created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)";
$createTable = mysqli_query($conn, $tableUser);
