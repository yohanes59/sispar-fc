<?php
$tableHasil = "CREATE TABLE IF NOT EXISTS hasil(
	id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	kode_diagnosa varchar(10) NOT NULL,
	kode_kerusakan varchar(10) NOT NULL,
	nama_kerusakan varchar(50) NOT NULL,
	created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	FOREIGN KEY (kode_diagnosa) REFERENCES diagnosa(kode)
)";
$createTable = mysqli_query($conn, $tableHasil);
