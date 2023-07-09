<h1 class="content-header">Diagnosa</h1>
<hr class="line">

<div class="wrapper">
    <form method="POST">
        <div class="element">
            <h2>Pilih Gejala</h2>
            <?php
            foreach ($data as $item) : ?>
                <div class="el-child">
                    <div class="ui-checkbox bg-limegreen ui-small ui-animation-zoom">
                        <input type="checkbox" value="<?= $item['kode'] ?>" id="<?= $item['kode']; ?>" name="input[]"><span data-checked="&#10004;" />
                    </div>
                    <label for="<?= $item['kode']; ?>"><?= $item['nama']; ?></label>
                </div>
            <?php endforeach; ?>
        </div>
        <input class="btn" name="proses" type="submit" value="Diagnosa">
    </form>
</div>

