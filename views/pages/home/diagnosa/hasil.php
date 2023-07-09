<?php
if (isset($input_gejala)) :
?>
    <div class="aksi-button">
        <a href="?page=<?= HOME_URL ?>&sub=<?= DIAGNOSA_URL ?>">
            <button class="btn"><i class="fas fa-chevron-double-left"></i> Kembali</button>
        </a>
        <a href="" onclick="window.print();">
            <button class="btn cetak"><i class="fas fa-file"></i> Cetak Hasil Diagnosa</button>
        </a>
    </div>
    <div class="container">
        <div class="receipt">
            <div class="header">
                <div class="logo">
                    <img src="/assets/img/logo-sispar.png" />
                </div>

                <div class="date">
                    <p><?= date('j F Y', strtotime($data_hasil['created_at'])); ?></p>
                </div>
            </div>
            <h2 class="title">Hasil Diagnosa Kerusakan Mesin Jahit</h2>

            <div class="receiptbody">
                <div class="kode">
                    <p>Kode Diagnosa</p>
                    <h3><?= $data_hasil['kode_diagnosa']; ?></h3>
                </div>
                <div class="nama">
                    <p>Nama User</p>
                    <h3><?= ucfirst($_SESSION["username"]); ?></h3>
                </div>

                <table>
                    <tr>
                        <th>
                            <h5>Diagnosa Kerusakan</h5>
                        </th>
                        <td>
                            <p><?= ($data_hasil['nama_kerusakan'] == "-") ? "Tidak Teridentifikasi" : "berdasarkan hasil diagnosa kerusakannya yaitu " . $data_hasil['nama_kerusakan'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <th class="left" colspan="2">
                            <p><?= ($data_hasil['nama_kerusakan'] == "-") ? "Dikarenakan informasi gejala yang anda masukkan tidak sesuai dengan data kami. berikut gejala yang anda masukkan : " : "Dengan gejala kerusakan sebagai berikut :" ?></p>
                        </th>
                    </tr>
                    <tr>
                        <th class="left" colspan="2">
                            <?php
                            $no = 1;
                            if ($data_hasil['nama_kerusakan'] != "-") :
                                foreach ($data_gejala as $item) :
                            ?>
                                    <p><?= $no; ?>. <?= $item['nama']; ?></p>
                                <?php
                                    $no++;
                                endforeach;
                            else :
                                foreach ($data_input_gejala as $item) :
                                ?>
                                    <p><?= $no; ?>. <?= $item['nama']; ?></p>
                            <?php
                                    $no++;
                                endforeach;
                            endif;
                            ?>
                        </th>
                    </tr>
                </table>
            </div>

        </div>
    </div>

<?php endif; ?>

<style>
    .container {
        max-width: 550px;
        background: #fff;
        margin: auto;
        padding: 10px;
        margin-top: 30px;
        border: 4px solid lightblue;
        border-radius: 15px;
    }

    .receipt {
        max-width: 100%;
        margin: 5px;
    }

    .receipt .header,
    .receiptbody {
        min-height: 35px;
        max-width: 100%;
    }

    .receiptbody {
        background: #eee;
        padding: 10px;
        border: 1px solid #eee;
        border-radius: 5px;
    }

    .header .logo,
    .kode {
        width: 50%;
        float: left;
    }

    .nama {
        float: right;
    }

    .header .logo img {
        width: 50px;
        height: 50px;
    }

    .header .date {
        width: 50%;
        float: left;
    }

    .header .date p {
        text-align: right;
        font-size: 12px;
    }

    .kode p,
    .nama p {
        margin-bottom: 0;
        font-size: 12px;
    }

    .kode h3,
    .nama h3 {
        font-size: 20px;
        margin-top: 5px;
    }

    .receiptbody table {
        width: 100%;
        border-collapse: collapse;
    }

    .receiptbody table tr th,
    .receiptbody table tr td {
        border: 1px solid #ccc;
        border: 1pxsolid #ccc;
        padding: 8px;
        font-size: 14px;
    }

    .receiptbody table tr th {
        text-align: left;
    }

    h2.title {
        text-align: center;
        margin-top: 20px;
    }

    th {
        width: 140px;
    }
</style>