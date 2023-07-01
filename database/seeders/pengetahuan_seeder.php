<?php

$data = [
    [
        'kode_kerusakan' => 'KK-01',
        'kode_gejala' => 'KG-01'
    ],
    [
        'kode_kerusakan' => 'KK-01',
        'kode_gejala' => 'KG-02'
    ],
    [
        'kode_kerusakan' => 'KK-01',
        'kode_gejala' => 'KG-03'
    ],
    [
        'kode_kerusakan' => 'KK-01',
        'kode_gejala' => 'KG-04'
    ],
    [
        'kode_kerusakan' => 'KK-02',
        'kode_gejala' => 'KG-01'
    ],
    [
        'kode_kerusakan' => 'KK-02',
        'kode_gejala' => 'KG-02'
    ],
    [
        'kode_kerusakan' => 'KK-02',
        'kode_gejala' => 'KG-05'
    ],
    [
        'kode_kerusakan' => 'KK-02',
        'kode_gejala' => 'KG-06'
    ],
    [
        'kode_kerusakan' => 'KK-02',
        'kode_gejala' => 'KG-07'
    ],
    [
        'kode_kerusakan' => 'KK-03',
        'kode_gejala' => 'KG-08'
    ],
    [
        'kode_kerusakan' => 'KK-03',
        'kode_gejala' => 'KG-09'
    ],
    [
        'kode_kerusakan' => 'KK-03',
        'kode_gejala' => 'KG-10'
    ],
    [
        'kode_kerusakan' => 'KK-04',
        'kode_gejala' => 'KG-11'
    ],
    [
        'kode_kerusakan' => 'KK-04',
        'kode_gejala' => 'KG-12'
    ],
    [
        'kode_kerusakan' => 'KK-05',
        'kode_gejala' => 'KG-13'
    ],
    [
        'kode_kerusakan' => 'KK-05',
        'kode_gejala' => 'KG-14'
    ],
    [
        'kode_kerusakan' => 'KK-06',
        'kode_gejala' => 'KG-15'
    ],
    [
        'kode_kerusakan' => 'KK-06',
        'kode_gejala' => 'KG-16'
    ],
    [
        'kode_kerusakan' => 'KK-06',
        'kode_gejala' => 'KG-17'
    ],
    [
        'kode_kerusakan' => 'KK-07',
        'kode_gejala' => 'KG-18'
    ],
    [
        'kode_kerusakan' => 'KK-07',
        'kode_gejala' => 'KG-19'
    ],
    [
        'kode_kerusakan' => 'KK-07',
        'kode_gejala' => 'KG-20'
    ],
    [
        'kode_kerusakan' => 'KK-07',
        'kode_gejala' => 'KG-21'
    ],
    [
        'kode_kerusakan' => 'KK-08',
        'kode_gejala' => 'KG-22'
    ],
    [
        'kode_kerusakan' => 'KK-08',
        'kode_gejala' => 'KG-23'
    ],
];

foreach ($data as $item) {
    $kd_kerusakan = $item['kode_kerusakan'];
    $kd_gejala = $item['kode_gejala'];

    if (mysqli_num_rows($check_query) == 0) {
        $insert_query = "INSERT INTO pengetahuan(kode_kerusakan, kode_gejala, created_at, updated_at) VALUES ('$kd_kerusakan', '$kd_gejala', NOW(), NOW())";
        $seeder = mysqli_query($conn, $insert_query);
    }
}
