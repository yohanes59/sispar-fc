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

	public function selectAll()
	{
		$query = "SELECT * FROM gejala ORDER BY kode_gejala ASC";
		return $this->execute($query);
	}

	public function insert($kode, $nama)
	{
		$query = "INSERT INTO gejala(kode_gejala, nama, created_at, updated_at) VALUES ('$kode', '$nama', NOW(), NOW())";
		return $this->execute($query);
	}
}
