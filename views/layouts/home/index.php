<?php
session_start();

include './database/koneksi.php';
include './controllers/userController.php';
include './controllers/dashboardController.php';
include './controllers/gejalaController.php';
include './controllers/kerusakanController.php';
include './controllers/pengetahuanController.php';

$user = new userController();
$dashboard = new dashboardController();
$gejala = new gejalaController();
$kerusakan = new kerusakanController();
$pengetahuan = new pengetahuanController();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- style -->
    <link rel="stylesheet" href="../../../assets/css/home/style.css">

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

    <script src="../../../assets/js/main.js"></script>
</body>

</html>