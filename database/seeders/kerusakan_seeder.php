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
        'nama' => 'Tension kendor'
    ],
    [
        'kode' => 'KK-02',
        'nama' => 'Tension kencang'
    ],
    [
        'kode' => 'KK-03',
        'nama' => 'Jarum bengkok dan terbalik'
    ],
    [
        'kode' => 'KK-04',
        'nama' => 'Jarum tumpul'
    ],
    [
        'kode' => 'KK-05',
        'nama' => 'Gigi tumpul'
    ],
    [
        'kode' => 'KK-06',
        'nama' => 'Gigi rusak'
    ],
];

foreach ($data as $item) {
    $kode = $item['kode'];
    $nama = $item['nama'];
    $check_query = check_data_kerusakan($nama);

    if (mysqli_num_rows($check_query) == 0) {
        $insert_query = "INSERT INTO kerusakan(kode, nama, created_at, updated_at) VALUES ('$kode', '$nama', NOW(), NOW())";
        $seeder = mysqli_query($conn, $insert_query);
    }
}
