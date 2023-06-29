<?php
class gejalaModel
{
	public function execute($query)
	{
		include './database/koneksi.php';
		return mysqli_query($conn, $query);
	}

	public function fetch($var)
	{
		return mysqli_fetch_array($var, MYSQLI_ASSOC);
	}

	public function numRow($data)
	{
		return mysqli_num_rows($data);
	}

	public function cariCode()
	{
		$query = "SELECT MAX(kode_gejala) FROM gejala";
		return $this->execute($query);
	}

	public function insert($nama)
	{
		$query = "INSERT INTO gejala(nama, created_at, updated_at) VALUES ('$nama', NOW(), NOW())";
		return $this->execute($query);
	}

	// function select($username)
	// {
	// 	$query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
	// 	return $this->execute($query);
	// }
}
