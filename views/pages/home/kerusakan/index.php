<div id="kop-surat">
    <img id="logo" src="assets/img/logo-p.png">
</div>
<div id="garis"></div>

<h1 class="content-header">Data Kerusakan</h1>
<hr class="line">
<div class="aksi-button">
    <a href="?page=<?= HOME_URL ?>&sub=<?= KERUSAKAN_URL ?>&act=tambah">
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
            <th>Kode Kerusakan</th>
            <th>Nama Kerusakan</th>
            <th>Solusi</th>
            <th class="aksi">Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $no = 1;
        while ($data_kerusakan = $this->model->fetch($data)) :
        ?>
            <tr>
                <td data-label="No."><?= $no; ?></td>
                <td data-label="Kode Kerusakan"><?= $data_kerusakan['kode']; ?></td>
                <td data-label="Nama Kerusakan"><?= $data_kerusakan['nama']; ?></td>
                <td data-label="Solusi"><?= $data_kerusakan['solusi']; ?></td>
                <td data-label="Aksi" class="aksi">
                    <a href="?page=<?= HOME_URL ?>&sub=<?= KERUSAKAN_URL ?>&act=edit&kode=<?= $data_kerusakan['kode']; ?>">
                        <button class="btn">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                    </a>

                    <a href="" onclick="confirmDeleteKerusakan(event, '<?= $data_kerusakan['kode']; ?>')">
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
