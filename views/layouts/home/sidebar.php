<aside class="sidebar">
    <a href="" class="brand-link">
        <img src="/assets/img/logo.png" alt="Logo" class="brand-logo">
        <h1 class="brand-title sidebar-text">Sistem Pakar FC</h1>
    </a>
    <div class="menu">
        <!-- jika session admin -->
        <?php if ($_SESSION['role'] == 'Admin') { ?>
            <a href="?page=<?= HOME_URL ?>" class="menu-item active">
                <i class="fa-solid fa-house"></i>
                <p class="sidebar-text">Dashboard</p>
            </a>
            <a href="?page=<?= HOME_URL ?>&sub=<?= GEJALA_URL ?>" class="menu-item">
                <i class="fa-solid fa-clipboard-check"></i>
                <p class="sidebar-text">Data Gejala</p>
            </a>
            <a href="?page=<?= HOME_URL ?>&sub=<?= KERUSAKAN_URL ?>" class="menu-item">
                <i class="fa-solid fa-clipboard-check"></i>
                <p class="sidebar-text">Data Kerusakan</p>
            </a>
            <a href="?page=" class="menu-item">
                <i class="fa-solid fa-rectangle-list"></i>
                <p class="sidebar-text">Data Pengetahuan</p>
            </a>
        <?php } ?>

        <!-- jika session user -->
        <?php if ($_SESSION['role'] == 'User') { ?>
            <a href="?page=" class="menu-item">
                <i class="fa-solid fa-rectangle-list"></i>
                <p class="sidebar-text">Diagnosa</p>
            </a>
        <?php } ?>
        <a href="?page=<?= HOME_URL ?>&act=logout" class="menu-item">
            <i class="fa-solid fa-rectangle-list"></i>
            <p class="sidebar-text">Logout</p>
        </a>
    </div>
</aside>