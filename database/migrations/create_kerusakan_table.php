<?php
$tableKerusakan = "CREATE TABLE IF NOT EXISTS kerusakan(
	kode varchar(10) PRIMARY KEY NOT NULL,
	nama varchar(50) NOT NULL,
	created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)";
$createTable = mysqli_query($conn, $tableKerusakan);
