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
        'solusi' => 'Solusi 1',
    ],
    [
        'kode' => 'KK-02',
        'nama' => 'Tension kencang',
        'solusi' => 'Solusi 2',
    ],
    [
        'kode' => 'KK-03',
        'nama' => 'Jarum bengkok dan terbalik',
        'solusi' => 'Solusi 3',
    ],
    [
        'kode' => 'KK-04',
        'nama' => 'Jarum tumpul',
        'solusi' => 'Solusi 4',
    ],
    [
        'kode' => 'KK-05',
        'nama' => 'Gigi tumpul',
        'solusi' => 'Solusi 5',
    ],
    [
        'kode' => 'KK-06',
        'nama' => 'Gigi rusak',
        'solusi' => 'Solusi 6',
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
