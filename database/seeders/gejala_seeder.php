<?php
function check_data_gejala($data)
{
    global $conn;

    $check = "SELECT * FROM kerusakan WHERE kode = '$data'";
    $result = mysqli_query($conn, $check);
    return $result;
}

$data = [
    [
        'kode' => 'KG-01',
        'nama' => 'Jahitan kusut'
    ],
    [
        'kode' => 'KG-02',
        'nama' => 'Jahitan kendor'
    ],
    [
        'kode' => 'KG-03',
        'nama' => 'Benang mudah putus'
    ],
    [
        'kode' => 'KG-04',
        'nama' => 'Jahitan loncat'
    ],
    [
        'kode' => 'KG-05',
        'nama' => 'Jahitan tidak mengait'
    ],
    [
        'kode' => 'KG-06',
        'nama' => 'Benang mudah lepas'
    ],
    [
        'kode' => 'KG-07',
        'nama' => 'Bahan tidak jalan'
    ],
    [
        'kode' => 'KG-08',
        'nama' => 'Jalan tidak stabil'
    ],
    [
        'kode' => 'KG-09',
        'nama' => 'Bahan rusak'
    ],
    [
        'kode' => 'KG-10',
        'nama' => 'Suara berisik'
    ],
    [
        'kode' => 'KG-11',
        'nama' => 'Sulit memasukkan kain'
    ],
    [
        'kode' => 'KG-12',
        'nama' => 'Jarum patah'
    ],
    [
        'kode' => 'KG-13',
        'nama' => 'Jahitan tidak rapi'
    ],
    [
        'kode' => 'KG-14',
        'nama' => 'Sulit menusuk kain'
    ],
];

foreach ($data as $item) {
    $kode = $item['kode'];
    $nama = $item['nama'];
    $check_query = check_data_gejala($nama);

    if (mysqli_num_rows($check_query) == 0) {
        $insert_query = "INSERT INTO gejala(kode, nama, created_at, updated_at) VALUES ('$kode', '$nama', NOW(), NOW())";
        $seeder = mysqli_query($conn, $insert_query);
    }
}
