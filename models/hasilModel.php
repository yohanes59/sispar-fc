<?php
class hasilModel
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

    public function insert($kode_diagnosa, $kode_kerusakan, $nama_kerusakan)
    {
        $query = "INSERT INTO hasil(kode_diagnosa, kode_kerusakan, nama_kerusakan, created_at, updated_at) VALUES ('$kode_diagnosa', '$kode_kerusakan', '$nama_kerusakan', NOW(), NOW())";
        return $this->execute($query);
    }
}
