<?php
session_start();

include './database/koneksi.php';
include './controllers/userController.php';

$user = new userController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME; ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    if ($page == '') {
        $user->login_view();
        if (isset($_POST['login'])) {
            $user->do_login();
        }
    } elseif ($page == REGISTER_URL) {
        $user->register_view();
        if (isset($_POST['register'])) {
            $user->do_register();
        }
    }
    ?>

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
</body>

</html>