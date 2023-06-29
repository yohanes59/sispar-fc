<table class="table">
    <a href="?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>&act=tambah">
        <button class="btn tambah"><i class="fa-solid fa-plus"></i> Tambah Data</button>
    </a>
    <a href="?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>&act=print">
        <button class="btn"><i class="fa-solid fa-file"></i> Cetak Laporan</button>
    </a>
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Gejala</th>
            <th>Nama Gejala</th>
            <th>Aksi</th>
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
                    <a href="" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')">
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