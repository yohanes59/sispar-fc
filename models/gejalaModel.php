<?php
class gejalaModel extends model
{
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

	public function delete($kode)
	{
		$query = "DELETE FROM gejala WHERE kode='$kode'";
		return $this->execute($query);
	}
}
