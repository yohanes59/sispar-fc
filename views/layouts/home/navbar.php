<nav class="navbar">
    <button class="navbar-collapse">
        <i class="fas fa-bars fa-lg"></i>
    </button>
    <button class="navbar-menu">
        <i class="fas fa-user"></i>
        <span>
            <?= ucfirst($_SESSION["username"]); ?>
        </span>
    </button>
    <button class="navbar-dropdown">
        <a href='?page=<?= HOME_URL ?>&sub=<?= HOME_URL ?>&act=logout' class="navbar-link">
            <i class="fad fa-arrow-alt-to-left"></i>
            Logout
        </a>
    </button>
</nav>