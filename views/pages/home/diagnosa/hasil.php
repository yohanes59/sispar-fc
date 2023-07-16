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
                    <?php if($data_hasil['solusi'] != "-") :?>
                    <tr>
                        <th class="left" colspan="2">
                            <p>Solusi atas kerusakan anda adalah :</p>
                        </th>
                    </tr>
                    <tr>
                        <th class="left" colspan="2">
                            <p><?= $data_hasil['solusi']; ?></p>
                        </th>
                    </tr>
                    <?php endif; ?>
                </table>
            </div>

        </div>
    </div>

<?php endif; ?>
