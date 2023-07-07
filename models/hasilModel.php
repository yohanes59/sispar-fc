<?php
class hasilModel extends model
{
    public function insert($kode_diagnosa, $kode_kerusakan, $nama_kerusakan)
    {
        $query = "INSERT INTO hasil(kode_diagnosa, kode_kerusakan, nama_kerusakan, created_at, updated_at) VALUES ('$kode_diagnosa', '$kode_kerusakan', '$nama_kerusakan', NOW(), NOW())";
        return $this->execute($query);
    }

    public function selectLastData()
	{
		$query = "SELECT * FROM hasil ORDER BY id DESC LIMIT 1";
		return $this->execute($query);
	}
}
