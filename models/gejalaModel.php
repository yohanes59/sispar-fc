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
		$query = "SELECT MAX(kode) FROM gejala";
		return $this->execute($query);
	}

	public function selectAll()
	{
		$query = "SELECT * FROM gejala ORDER BY kode ASC";
		return $this->execute($query);
	}

	public function select($kode)
	{
		$query = "SELECT * FROM gejala WHERE kode='$kode'";
		return $this->execute($query);
	}

	public function insert($kode, $nama)
	{
		$query = "INSERT INTO gejala(kode, nama, created_at, updated_at) VALUES ('$kode', '$nama', NOW(), NOW())";
		return $this->execute($query);
	}

	public function update($kode, $nama)
	{
		$query = "UPDATE gejala SET nama='$nama' WHERE kode='$kode'";
		return $this->execute($query);
	}
}
