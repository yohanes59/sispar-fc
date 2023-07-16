<?php
class kerusakanModel extends model
{
	public function cariCode()
	{
		$query = "SELECT MAX(kode) FROM kerusakan";
		return $this->execute($query);
	}

	public function selectAll()
	{
		$query = "SELECT * FROM kerusakan ORDER BY kode ASC";
		return $this->execute($query);
	}

	public function select($kode)
	{
		$query = "SELECT * FROM kerusakan WHERE kode='$kode'";
		return $this->execute($query);
	}

	public function insert($kode, $nama, $solusi)
	{
		$query = "INSERT INTO kerusakan(kode, nama, solusi, created_at, updated_at) VALUES ('$kode', '$nama', '$solusi', NOW(), NOW())";
		return $this->execute($query);
	}

	public function update($kode, $nama, $solusi)
	{
		$query = "UPDATE kerusakan SET nama='$nama', solusi='$solusi' WHERE kode='$kode'";
		return $this->execute($query);
	}

	public function delete($kode)
	{
		$query = "DELETE FROM kerusakan WHERE kode='$kode'";
		return $this->execute($query);
	}
}
