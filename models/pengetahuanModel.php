<?php
class pengetahuanModel extends model
{
	public function selectAll()
	{
		$query = "SELECT p.*, k.nama AS nama_kerusakan, g.nama AS nama_gejala
		FROM pengetahuan as p
		JOIN gejala as g ON p.kode_gejala = g.kode 
		JOIN kerusakan as k ON p.kode_kerusakan = k.kode 
		ORDER BY p.kode_kerusakan ASC";
		return $this->execute($query);
	}

	public function showRuleDataToPage()
	{
		$query = "SELECT p.kode_kerusakan, p.kode_gejala, k.nama AS nama_kerusakan, g.nama AS nama_gejala, k.solusi AS solusi
		FROM pengetahuan as p
		JOIN gejala as g ON p.kode_gejala = g.kode 
		JOIN kerusakan as k ON p.kode_kerusakan = k.kode 
		ORDER BY p.kode_kerusakan ASC";
		return $this->execute($query);
	}

	public function selectCodeData()
	{
		$query = "SELECT p.kode_kerusakan, p.kode_gejala
		FROM pengetahuan as p
		ORDER BY p.kode_kerusakan ASC";
		return $this->execute($query);
	}

	public function select($id)
	{
		$query = "SELECT * FROM pengetahuan WHERE id='$id' LIMIT 1";
		return $this->execute($query);
	}

	public function insert($kode_kerusakan, $kode_gejala)
	{
		$query = "INSERT INTO pengetahuan(kode_kerusakan, kode_gejala, created_at, updated_at) VALUES ('$kode_kerusakan', '$kode_gejala', NOW(), NOW())";
		return $this->execute($query);
	}

	public function update($id, $kode_kerusakan, $kode_gejala)
	{
		$query = "UPDATE pengetahuan SET kode_gejala='$kode_gejala', kode_kerusakan='$kode_kerusakan' WHERE id='$id'";
		return $this->execute($query);
	}

	public function delete($id)
	{
		$query = "DELETE FROM pengetahuan WHERE id='$id'";
		return $this->execute($query);
	}
}
