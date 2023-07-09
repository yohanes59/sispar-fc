<?php
class hasilModel extends model
{
	public function selectAll()
	{
		$query = "SELECT * FROM hasil";
		return $this->execute($query);
	}

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

    public function selectInputGejalaByDiagnosaCode($kode)
    {
        $query = "SELECT d.kode_diagnosa, d.kode_gejala, g.nama
                FROM diagnosa as d
                JOIN gejala as g ON d.kode_gejala = g.kode
                WHERE d.kode_diagnosa='$kode'";
        return $this->execute($query);
    }

    public function selectRelateGejalaByDiagnosaCode($kode)
    {
        $query = "SELECT h.kode_diagnosa, h.kode_kerusakan, h.nama_kerusakan, p.kode_gejala, g.nama, h.created_at
                FROM hasil as h
                JOIN pengetahuan as p ON h.kode_kerusakan = p.kode_kerusakan
                JOIN gejala as g ON p.kode_gejala = g.kode
                WHERE h.kode_diagnosa='$kode'";
        return $this->execute($query);
    }

    public function selectRiwayat()
    {
        $query = "SELECT DISTINCT h.kode_diagnosa, u.username, h.nama_kerusakan, h.created_at
                FROM hasil as h
                JOIN diagnosa as d ON h.kode_diagnosa = d.kode_diagnosa
                JOIN users as u ON d.user_id = u.id";
        return $this->execute($query);
    }
}
