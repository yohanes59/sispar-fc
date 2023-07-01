<div class="info-section">
    <div class="info">
        <div class="info-body">
            <div class="info-header">
                <h3 class="info-title"><?= $jumlahGejala; ?></h3>
                <p>Data Gejala</p>
            </div>
            <div class="info-icon">
                <i class="fa-solid fa-clipboard-check"></i>
            </div>
        </div>
        <a href="?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>" class="info-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
    </div>

    <div class="info">
        <div class="info-body">
            <div class="info-header">
                <h3 class="info-title"><?= $jumlahKerusakan; ?></h3>
                <p>Data Kerusakan</p>
            </div>
            <div class="info-icon">
                <i class="fa-solid fa-rectangle-list"></i>
            </div>
        </div>
        <a href="?page=<?= HOME_URL ?>&sub=<?= KERUSAKAN_URL ?>" class="info-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
    </div>

    <div class="info">
        <div class="info-body">
            <div class="info-header">
                <h3 class="info-title"><?= $jumlahPengetahuan; ?></h3>
                <p>Data Pengetahuan</p>
            </div>
            <div class="info-icon">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
        <a href="?page=<?= HOME_URL ?>&sub=<?= PENGETAHUAN_URL ?>" class="info-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
    </div>

</div>