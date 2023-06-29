<?php
$page = @$_GET['page'];

if ($page == '' || $page == REGISTER_URL) {
    include 'views/layouts/auth/index.php';
} elseif ($page == HOME_URL) {
    include 'views/layouts/home/index.php';
}