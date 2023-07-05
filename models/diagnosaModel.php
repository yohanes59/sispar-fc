<?php
class diagnosaModel
{
    public function execute($query)
    {
        include './database/koneksi.php';
        $result =  mysqli_query($conn, $query);

        if (!$result) {
            echo "Error: " . mysqli_error($conn);
        }

        return $result;
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
        $query = "SELECT MAX(kode_diagnosa) FROM diagnosa";
        return $this->execute($query);
    }

    public function insert($kode_diagnosa, $user_id, $kode_gejala)
    {
        $query = "INSERT INTO diagnosa(kode_diagnosa, user_id, kode_gejala, created_at, updated_at) VALUES ('$kode_diagnosa', '$user_id', '$kode_gejala', NOW(), NOW())";
        return $this->execute($query);
    }
}
