<?php
function check_data_pengetahuan($data)
{
    global $conn;

    $check = "SELECT * FROM pengetahuan WHERE id = '$data'";
    $result = mysqli_query($conn, $check);
    return $result;
}

$data = [
    [
        'id' => '1',
        'kode_kerusakan' => 'KK-01',
        'kode_gejala' => 'KG-01'
    ],
    [
        'id' => '2',
        'kode_kerusakan' => 'KK-01',
        'kode_gejala' => 'KG-02'
    ],
    [
        'id' => '3',
        'kode_kerusakan' => 'KK-01',
        'kode_gejala' => 'KG-06'
    ],
    [
        'id' => '4',
        'kode_kerusakan' => 'KK-02',
        'kode_gejala' => 'KG-03'
    ],
    [
        'id' => '5',
        'kode_kerusakan' => 'KK-02',
        'kode_gejala' => 'KG-04'
    ],
    [
        'id' => '6',
        'kode_kerusakan' => 'KK-02',
        'kode_gejala' => 'KG-10'
    ],
    [
        'id' => '7',
        'kode_kerusakan' => 'KK-02',
        'kode_gejala' => 'KG-11'
    ],
    [
        'id' => '8',
        'kode_kerusakan' => 'KK-03',
        'kode_gejala' => 'KG-04'
    ],
    [
        'id' => '9',
        'kode_kerusakan' => 'KK-03',
        'kode_gejala' => 'KG-05'
    ],
    [
        'id' => '10',
        'kode_kerusakan' => 'KK-03',
        'kode_gejala' => 'KG-12'
    ],
    [
        'id' => '11',
        'kode_kerusakan' => 'KK-03',
        'kode_gejala' => 'KG-13'
    ],
    [
        'id' => '12',
        'kode_kerusakan' => 'KK-04',
        'kode_gejala' => 'KG-04'
    ],
    [
        'id' => '13',
        'kode_kerusakan' => 'KK-04',
        'kode_gejala' => 'KG-09'
    ],
    [
        'id' => '14',
        'kode_kerusakan' => 'KK-04',
        'kode_gejala' => 'KG-14'
    ],
    [
        'id' => '15',
        'kode_kerusakan' => 'KK-05',
        'kode_gejala' => 'KG-07'
    ],
    [
        'id' => '16',
        'kode_kerusakan' => 'KK-05',
        'kode_gejala' => 'KG-09'
    ],
    [
        'id' => '17',
        'kode_kerusakan' => 'KK-05',
        'kode_gejala' => 'KG-10'
    ],
    [
        'id' => '18',
        'kode_kerusakan' => 'KK-06',
        'kode_gejala' => 'KG-07'
    ],
    [
        'id' => '19',
        'kode_kerusakan' => 'KK-06',
        'kode_gejala' => 'KG-08'
    ],
    [
        'id' => '20',
        'kode_kerusakan' => 'KK-06',
        'kode_gejala' => 'KG-10'
    ],
    [
        'id' => '21',
        'kode_kerusakan' => 'KK-06',
        'kode_gejala' => 'KG-13'
    ],
];

foreach ($data as $item) {
    $id = $item['id'];
    $kd_kerusakan = $item['kode_kerusakan'];
    $kd_gejala = $item['kode_gejala'];
    $check_query = check_data_pengetahuan($id);

    if (mysqli_num_rows($check_query) == 0) {
        $insert_query = "INSERT INTO pengetahuan(id, kode_kerusakan, kode_gejala, created_at, updated_at) VALUES ('$id', '$kd_kerusakan', '$kd_gejala', NOW(), NOW())";
        $seeder = mysqli_query($conn, $insert_query);
    }
}
