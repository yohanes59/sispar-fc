<div class="container">
    <a href="?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>">
        <button class="btn"><i class="fas fa-chevron-double-left"></i> Kembali</button>
    </a>
    <form method="POST">
        <h1 style="margin: 10px 0">Tambah Data Gejala</h1>
        <hr style="margin: 10px 0">
        <div class="row">
            <div class="col-25">
                <label for="gejala">Nama Gejala</label>
            </div>
            <div class="col-75">
                <input type="text" id="gejala" name="nama" placeholder="Nama Gejala..">
            </div>
        </div>

        <div class="row">
            <button value="Simpan" name="simpan" class="btn-submit">Submit</button>
        </div>

    </form>
</div>