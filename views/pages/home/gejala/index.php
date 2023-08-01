<div id="kop-surat">
    <img id="logo" src="assets/img/logo-p.png">
</div>
<div id="garis"></div>

<h1 class="content-header">Data Gejala</h1>
<hr class="line">
<div class="aksi-button">
    <a href="?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>&act=tambah">
        <button class="btn tambah"><i class="fas fa-plus"></i> Tambah Data</button>
    </a>
    <a href="" onclick="appendSignature();">
        <button class="btn"><i class="fas fa-file"></i> Cetak Laporan</button>
    </a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Gejala</th>
            <th>Nama Gejala</th>
            <th class="aksi">Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $no = 1;
        while ($data_gejala = $this->model->fetch($data)) :
        ?>
            <tr>
                <td data-label="No."><?= $no; ?></td>
                <td data-label="Kode Gejala"><?= $data_gejala['kode']; ?></td>
                <td data-label="Nama Gejala"><?= $data_gejala['nama']; ?></td>
                <td data-label="Aksi" class="aksi">
                    <a href="?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>&act=edit&kode=<?= $data_gejala['kode']; ?>">
                        <button class="btn">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                    </a>

                    <a href="" onclick="confirmDeleteGejala(event, '<?= $data_gejala['kode']; ?>')">
                        <button class="btn">
                            <i class="fa fa-trash"></i> Hapus
                        </button>
                    </a>
                </td>
            </tr>
        <?php
            $no++;
        endwhile;
        ?>
    </tbody>
</table>

<div id="tanda-tangan"></div>
