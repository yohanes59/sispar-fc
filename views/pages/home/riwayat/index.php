<h1 class="content-header">Data Riwayat Diagnosa User</h1>
<hr class="line">
<div class="aksi-button">
    <a href="" onclick="window.print();">
        <button class="btn cetak"><i class="fas fa-file"></i> Cetak Laporan</button>
    </a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Diagnosa</th>
            <th>Tanggal Diagnosa</th>
            <th>Nama User</th>
            <th>Nama Kerusakan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($data_riwayat as $item) :
        ?>
            <tr>
                <td data-label="No."><?= $no; ?></td>
                <td data-label="Kode Diagnosa"><?= $item['kode_diagnosa']; ?></td>
                <td data-label="Tanggal"><?= date('d-m-Y - \J\a\m: H:i', strtotime($item['created_at'])); ?></td>
                <td data-label="Kode Diagnosa"><?= $item['username']; ?></td>
                <td data-label="Kode Diagnosa"><?= ($item['nama_kerusakan'] == "-") ? "Tidak Teridentifikasi" : $item['nama_kerusakan']; ?></td>
            </tr>
        <?php
            $no++;
        endforeach;
        ?>
    </tbody>
</table>