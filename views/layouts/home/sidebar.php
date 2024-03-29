<aside class="sidebar">
    <a href="" class="brand-link">
        <img src="assets/img/logo-sispar.png" alt="Logo" class="brand-logo">
        <h1 class="brand-title sidebar-text">Sistem Pakar FC</h1>
    </a>
    <div class="menu">
        <!-- jika session admin -->
        <?php if ($_SESSION['role'] == 'Admin') { ?>
            <a href="?page=<?= HOME_URL ?>&sub=<?= HOME_URL ?>" class="menu-item <?= ($_GET['page'] == HOME_URL && $_GET['sub'] == HOME_URL) ? 'active' : '' ?>">
                <i class="fas fa-house"></i>
                <p class="sidebar-text">Dashboard</p>
            </a>
            <a href="?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>" class="menu-item <?= ($_GET['page'] == HOME_URL && $_GET['sub'] == GEJALA_URL) ? 'active' : '' ?>">
                <i class="fas fa-books"></i>
                <p class="sidebar-text">Data Gejala</p>
            </a>
            <a href="?page=<?= HOME_URL ?>&sub=<?= KERUSAKAN_URL ?>" class="menu-item <?= ($_GET['page'] == HOME_URL && $_GET['sub'] == KERUSAKAN_URL) ? 'active' : '' ?>">
                <i class="fad fa-books"></i>
                <p class="sidebar-text">Data Kerusakan</p>
            </a>
            <a href="?page=<?= HOME_URL ?>&sub=<?= PENGETAHUAN_URL ?>" class="menu-item <?= ($_GET['page'] == HOME_URL && $_GET['sub'] == PENGETAHUAN_URL) ? 'active' : '' ?>">
                <i class="fas fa-head-side-brain"></i>
                <p class="sidebar-text">Data Pengetahuan</p>
            </a>
            <a href="?page=<?= HOME_URL ?>&sub=<?= RIWAYAT_URL ?>" class="menu-item <?= ($_GET['page'] == HOME_URL && $_GET['sub'] == RIWAYAT_URL) ? 'active' : '' ?>">
                <i class="fas fa-history"></i>
                <p class="sidebar-text">Riwayat Diagnosa</p>
            </a>
        <?php } ?>

        <!-- jika session user -->
        <?php if ($_SESSION['role'] == 'User') { ?>
            <a href="?page=<?= HOME_URL ?>&sub=<?= WELCOME_URL ?>" class="menu-item <?= ($_GET['page'] == HOME_URL && $_GET['sub'] == WELCOME_URL) ? 'active' : '' ?>">
                <i class="fas fa-house"></i>
                <p class="sidebar-text">Beranda</p>
            </a>
            <a href="?page=<?= HOME_URL ?>&sub=<?= ATURAN_URL ?>" class="menu-item <?= ($_GET['page'] == HOME_URL && $_GET['sub'] == ATURAN_URL) ? 'active' : '' ?>">
                <i class="fas fa-clipboard-check"></i>
                <p class="sidebar-text">Aturan</p>
            </a>
            <a href="?page=<?= HOME_URL ?>&sub=<?= DIAGNOSA_URL ?>" class="menu-item <?= ($_GET['page'] == HOME_URL && $_GET['sub'] == DIAGNOSA_URL) ? 'active' : '' ?>">
                <i class="fas fa-stethoscope"></i>
                <p class="sidebar-text">Diagnosa</p>
            </a>
        <?php } ?>
        <a href="?page=<?= HOME_URL ?>&sub=<?= HOME_URL ?>&act=logout" class="menu-item">
            <i class="fad fa-arrow-alt-to-left"></i>
            <p class="sidebar-text">Logout</p>
        </a>
    </div>
</aside>