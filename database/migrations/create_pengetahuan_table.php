<?php
$tablePengetahuan = "CREATE TABLE IF NOT EXISTS pengetahuan(
	id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	kode_kerusakan varchar(10) NOT NULL,
	kode_gejala varchar(10) NOT NULL,
	created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	FOREIGN KEY (kode_kerusakan) REFERENCES kerusakan(kode),
	FOREIGN KEY (kode_gejala) REFERENCES gejala(kode)
)";
$createTable = mysqli_query($conn, $tablePengetahuan);
