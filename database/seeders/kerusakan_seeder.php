<?php
function check_data_kerusakan($data)
{
    global $conn;

    $check = "SELECT * FROM kerusakan WHERE kode = '$data'";
    $result = mysqli_query($conn, $check);
    return $result;
}

$data = [
    [
        'kode' => 'KK-01',
        'nama' => 'Tension kendor',
        'solusi' => 'Atur tension ke angka normal, yaitu antara 3-5',
    ],
    [
        'kode' => 'KK-02',
        'nama' => 'Tension kencang',
        'solusi' => 'Atur tension ke angka normal, yaitu antara 3-5',
    ],
    [
        'kode' => 'KK-03',
        'nama' => 'Jarum bengkok dan terbalik',
        'solusi' => 'Ganti jarum dengan yang baru dan bagus',
    ],
    [
        'kode' => 'KK-04',
        'nama' => 'Jarum tumpul',
        'solusi' => 'Ganti jarum dengan yang baru dan bagus',
    ],
    [
        'kode' => 'KK-05',
        'nama' => 'Gigi tumpul',
        'solusi' => 'Ganti gigi dan pastikan tidak ada yang terlepas atau longgar',
    ],
    [
        'kode' => 'KK-06',
        'nama' => 'Gigi rusak',
        'solusi' => 'Bersihkan dari debu dan percahan kain, jika masih error ganti gigi',
    ],
];

foreach ($data as $item) {
    $kode = $item['kode'];
    $nama = $item['nama'];
    $solusi = $item['solusi'];
    $check_query = check_data_kerusakan($nama);

    if (mysqli_num_rows($check_query) == 0) {
        $insert_query = "INSERT INTO kerusakan(kode, nama, solusi, created_at, updated_at) VALUES ('$kode', '$nama', '$solusi', NOW(), NOW())";
        $seeder = mysqli_query($conn, $insert_query);
    }
}
