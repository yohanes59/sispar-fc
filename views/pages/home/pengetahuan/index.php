<div id="kop-surat">
    <img id="logo" src="assets/img/logo-p.png">
</div>
<div id="garis"></div>

<h1 class="content-header">Data Pengetahuan</h1>
<hr class="line">
<div class="aksi-button">
    <a href="?page=<?= HOME_URL ?>&sub=<?= PENGETAHUAN_URL ?>&act=tambah">
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
            <th>Nama Penyakit</th>
            <th>Nama Gejala</th>
            <th class="aksi">Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $no = 1;
        while ($data_pengetahuan = $this->pModel->fetch($data)) :
        ?>
            <tr>
                <td data-label="No."><?= $no; ?></td>
                <td data-label="Nama Penyakit"><?= $data_pengetahuan['nama_kerusakan']; ?></td>
                <td data-label="Nama Gejala"><?= $data_pengetahuan['nama_gejala']; ?></td>
                <td data-label="Aksi" class="aksi">
                    <a href="?page=<?= HOME_URL ?>&sub=<?= PENGETAHUAN_URL ?>&act=edit&kode=<?= $data_pengetahuan['id']; ?>">
                        <button class="btn">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                    </a>

                    <a href="" onclick="confirmDeletePengetahuan(event, '<?= $data_pengetahuan['id']; ?>')">
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
