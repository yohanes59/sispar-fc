<?php
ob_start();
session_start();

include './database/koneksi.php';
include './controllers/controller.php';
include './controllers/userController.php';
include './controllers/dashboardController.php';
include './controllers/gejalaController.php';
include './controllers/kerusakanController.php';
include './controllers/pengetahuanController.php';
include './controllers/aturanController.php';
include './controllers/diagnosaController.php';
include './controllers/hasilController.php';

$user = new userController();
$dashboard = new dashboardController();
$gejala = new gejalaController();
$kerusakan = new kerusakanController();
$pengetahuan = new pengetahuanController();
$aturan = new aturanController();
$diagnosa = new diagnosaController();
$hasil = new hasilController();
$user->guest();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME; ?></title>

    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />

    <!-- style -->
    <link rel="stylesheet" href="assets/css/home/style.css">
    <?php if ($_SESSION['role'] == 'Admin') : ?>
        <link rel="stylesheet" href="assets/css/home/_partials/setting-table.css">
    <?php else : ?>
        <link rel="stylesheet" href="assets/css/home/_partials/hasil.css">
    <?php endif; ?>

    <script src="assets/js/signature.js"></script>

    <?php
    $sub = @$_GET['sub'];

    if ($sub == GEJALA_URL) {
        echo '<script>' . GEJALA_SCRIPT . '</script>';
    } elseif ($sub == KERUSAKAN_URL) {
        echo '<script>' . KERUSAKAN_SCRIPT . '</script>';
    } elseif ($sub == PENGETAHUAN_URL) {
        echo '<script>' . PENGETAHUAN_SCRIPT . '</script>';
    }
    ?>
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <main>
        <?php
        include 'sidebar.php';
        include 'navbar.php';
        ?>
        <section class="content">
            <?php include 'content-route.php'; ?>
        </section>
        <?php
        include 'footer.php';
        ?>
    </main>

    <script src="assets/js/main.js"></script>
</body>

</html>