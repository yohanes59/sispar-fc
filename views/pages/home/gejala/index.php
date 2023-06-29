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

                    <a href="?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>&act=delete&kode=<?= $data_gejala['kode']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')">
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




<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.btn-delete');

        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();

                const kode = this.dataset.kode;

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Anda tidak akan dapat mengembalikan ini!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Perform AJAX delete request
                        ajaxDelete(kode);
                    }
                });
            });
        });

        function ajaxDelete(kode) {
            // Perform AJAX request to delete the data
            // Update the URL and method according to your implementation
            fetch(`?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>&act=delete&kode=${kode}`, {
                    method: 'GET',
                })
                .then(function(response) {
                    if (response.ok) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Data Terhapus',
                            text: 'Data berhasil dihapus!'
                        }).then(function() {
                            location.href = '?page=home&sub=gejala';
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Menghapus Data',
                            text: 'Terjadi kesalahan saat menghapus data.'
                        });
                    }
                })
                .catch(function(error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Menghapus Data',
                        text: 'Terjadi kesalahan saat menghapus data.'
                    });
                });
        }
    });
</script>