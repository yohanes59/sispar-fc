<div class="container">
    <a href="?page=<?= HOME_URL ?>&sub=<?= KERUSAKAN_URL ?>">
        <button class="btn"><i class="fa-solid fa-chevron-left"></i> Kembali</button>
    </a>
    <form method="POST">
        <h1 style="margin: 10px 0">Tambah Data Kerusakan</h1>
        <hr style="margin: 10px 0">
        <div class="row">
            <div class="col-25">
                <label for="kerusakan">Nama Kerusakan</label>
            </div>
            <div class="col-75">
                <input type="text" id="kerusakan" name="nama" placeholder="Nama Kerusakan..">
            </div>
        </div>

        <div class="row">
            <button value="Simpan" name="simpan" class="btn-submit">Submit</button>
        </div>

    </form>
</div>