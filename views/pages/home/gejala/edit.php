<div class="container">
    <a href="?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>">
        <button class="btn"><i class="fa-solid fa-chevron-left"></i> Kembali</button>
    </a>
    <form action="" method="POST">
        <h1 style="margin: 10px 0">Edit Data Gejala</h1>
        <hr style="margin: 10px 0">
        <div class="row">
            <div class="col-25">
                <label for="kategori">Nama Gejala</label>
            </div>
            <div class="col-75">
                <input type="text" id="gejala" name="gejala" placeholder="Nama Gejala.." value="">
            </div>
        </div>

        <div class="row">
            <input type="submit" value="Simpan">
        </div>
    </form>
</div>