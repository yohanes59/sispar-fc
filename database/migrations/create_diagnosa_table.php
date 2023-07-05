<?php
$tableDiagnosa = "CREATE TABLE IF NOT EXISTS diagnosa(
	kode varchar(10) PRIMARY KEY NOT NULL,
	user_id int(11) NOT NULL,
	kode_gejala varchar(10) NOT NULL,
	created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (kode_gejala) REFERENCES gejala(kode)
)";
$createTable = mysqli_query($conn, $tableDiagnosa);
