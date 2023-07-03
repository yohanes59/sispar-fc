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
        'nama' => 'Loding Xiaomi stuck di logo Animasi'
    ],
    [
        'kode' => 'KG-02',
        'nama' => 'HP Sering restart Sendiri'
    ],
    [
        'kode' => 'KG-03',
        'nama' => 'Tidak bisa masuk pada menu utama namun selang beberapa detik ponsel mengalami hank dan kemudian ponsel me-restart kembali'
    ],
    [
        'kode' => 'KG-04',
        'nama' => 'Tidak Bisa masuk Recovery'
    ],
    [
        'kode' => 'KG-05',
        'nama' => 'Hp seringkali mengalami lag'
    ],
    [
        'kode' => 'KG-06',
        'nama' => 'Memori internal pada hp xiaomi sering cepat penuh'
    ],
    [
        'kode' => 'KG-07',
        'nama' => 'Lupa Password akun MI'
    ],
    [
        'kode' => 'KG-08',
        'nama' => 'Hp xiaomi mengalami lupa pola'
    ],
    [
        'kode' => 'KG-09',
        'nama' => 'Data pada file manager tidak bisa di hapus'
    ],
    [
        'kode' => 'KG-10',
        'nama' => 'Ketika membuka aplikasi sering mengalami force close'
    ],
    [
        'kode' => 'KG-11',
        'nama' => 'Tema pada aplikasi xiaomi tidak bisa di pasang'
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
