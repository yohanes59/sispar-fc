<div class="container">
    <a href="?page=<?= HOME_URL ?>&sub=<?= PENGETAHUAN_URL ?>">
        <button class="btn"><i class="fa-solid fa-chevron-left"></i> Kembali</button>
    </a>
    <form method="POST">
        <h1 style="margin: 10px 0">Ubah Data Pengetahuan</h1>
        <hr style="margin: 10px 0">

        <div class="row">
            <div class="col-25">
                <label for="kerusakan">Nama Kerusakan</label>
            </div>
            <div class="col-75">
                <select id="kerusakan" name="kerusakan">
                    <option value="" selected disabled hidden>-- Pilih Kerusakan --</option>
                    <?php foreach ($k_Data as $item) : ?>
                        <option value="<?= $item['kode'] ?>" <?= isset($itemData) ? ($itemData['kode_kerusakan'] == $item['kode'] ? 'selected' : '') : '' ?>><?= $item['nama'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="gejala">Nama Gejala</label>
            </div>
            <div class="col-75">
                <select id="gejala" name="gejala">
                    <option value="" selected disabled hidden>-- Pilih Gejala --</option>
                    <?php foreach ($g_Data as $item) : ?>
                        <option value="<?= $item['kode'] ?>" <?= isset($itemData) ? ($itemData['kode_gejala'] == $item['kode'] ? 'selected' : '') : '' ?>><?= $item['nama'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <button value="Simpan" name="simpan" class="btn-submit">Submit</button>
        </div>

    </form>
</div>