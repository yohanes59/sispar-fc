<?php
class diagnosaModel extends model
{
    public function cariCode()
    {
        $query = "SELECT MAX(kode_diagnosa) FROM diagnosa";
        return $this->execute($query);
    }

    public function insert($kode_diagnosa, $user_id, $kode_gejala)
    {
        $query = "INSERT INTO diagnosa(kode_diagnosa, user_id, kode_gejala, created_at, updated_at) VALUES ('$kode_diagnosa', '$user_id', '$kode_gejala', NOW(), NOW())";
        return $this->execute($query);
    }

    public function selectLast()
    {
        $kode_diagnosa = $this->cariCode();
        $kode = $kode_diagnosa->fetch_array();
        $kd = $kode[0];
        $query = "SELECT kode_gejala FROM diagnosa WHERE kode_diagnosa='$kd'";
        return $this->execute($query);
    }

    public function selectSolusiByCode($kd)
    {
        $query = "SELECT solusi FROM kerusakan WHERE kode='$kd'";
        return $this->execute($query);
    }
}
