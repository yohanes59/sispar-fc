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
        'nama' => 'Perubahan suara serta sulit atau rasa sakit saat menelan serta mengunyah'
    ],
    [
        'kode' => 'KG-02',
        'nama' => 'Pembengkakan pada wajah dan leher'
    ],
    [
        'kode' => 'KG-03',
        'nama' => 'Bercak kemerahan atau putih dalam mulut, dan lidah terasa sakit atau mulut nyeri'
    ],
    [
        'kode' => 'KG-04',
        'nama' => 'Pendarahan pada rongga mulut dan gigi tanggal dengan sendirinya'
    ],
    [
        'kode' => 'KG-05',
        'nama' => 'Batuk kronis serta telinga terasa sakit dan berdengung'
    ],
    [
        'kode' => 'KG-06',
        'nama' => 'Timbul benjolan yang muncul di sekitar mata, rahang, leher, atau tenggorokan'
    ],
    [
        'kode' => 'KG-07',
        'nama' => 'Pembengkakan kelenjar getah bening'
    ],
    [
        'kode' => 'KG-08',
        'nama' => 'Dada sesak, nyeri, dan berat'
    ],
    [
        'kode' => 'KG-09',
        'nama' => 'Batuk berdahak disertai bercak darah'
    ],
    [
        'kode' => 'KG-10',
        'nama' => 'Sakit pada tulang, bisa pada bahu, lengan atau tangan serta perubahan pada bentuk jari, yaitu ujung jari menjadi cembung'
    ],
    [
        'kode' => 'KG-11',
        'nama' => 'Gatal-gatal atau rasa sakit pada payudara atau ketiak serta perubahan ukuran atau bentuk putting'
    ],
    [
        'kode' => 'KG-12',
        'nama' => 'Kemunculan benjolan atau pembengkakan yang kemerahan pada ketiak, atau payudara, atau kulit payudara yang menebal serta keluarnya cairan dari puting (biasanya disertai darah)'
    ],
    [
        'kode' => 'KG-13',
        'nama' => 'Frekuensi buang air kecil semakin sering, tapi jumlah urine yang dikeluarkan hanya sedikit, serta warna urin keruh atau kuning kemerahan'
    ],
    [
        'kode' => 'KG-14',
        'nama' => 'Kandung kemih terasa tegang, penuh, keras dan nyeri pada perut bagian bawah, serta nyeri atau perih ketika buang air kecil'
    ],
    [
        'kode' => 'KG-15',
        'nama' => 'Sakit kepala yang tiba-tiba'
    ],
    [
        'kode' => 'KG-16',
        'nama' => 'Tiba-tiba kehilangan kesadaran, keseimbangan, koordinasi, kontrol tubuh, dan bicara tidak jelas'
    ],
    [
        'kode' => 'KG-17',
        'nama' => 'Kelemahan dan kelumpuhan pada beberapa bagian tubuh (wajah, lengan, tangan, terutama pada salah satu sisi tubuh)'
    ],
    [
        'kode' => 'KG-18',
        'nama' => 'Dada sesak, nyeri, dan berat'
    ],
    [
        'kode' => 'KG-19',
        'nama' => 'Infeksi saluran pernapasan (flu atau pilek)'
    ],
    [
        'kode' => 'KG-20',
        'nama' => 'Keluar lendir dari rongga hidung terus menerus yang berwarna kemerahan'
    ],
    [
        'kode' => 'KG-21',
        'nama' => 'Pembengkakan pada pergelangan kaki, kaki, dan tungkai kiri serta kanan'
    ],
    [
        'kode' => 'KG-22',
        'nama' => 'Terlalu cepat ejakulasi'
    ],
    [
        'kode' => 'KG-23',
        'nama' => 'Kesulitan memulai dan mempertahankan ereksi'
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
