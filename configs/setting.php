<?php
define('APP_NAME', 'Sistem Pakar Kerusakan Mesin Jahit Forward Chaining');

define('REGISTER_URL', 'register');
define('HOME_URL', 'home');
define('DASHBOARD_URL', 'dashboard');
define('GEJALA_URL', 'gejala');
define('KERUSAKAN_URL', 'kerusakan');
define('PENGETAHUAN_URL', 'pengetahuan');
define('RIWAYAT_URL', 'riwayat');
define('WELCOME_URL', 'welcome');
define('ATURAN_URL', 'aturan');
define('DIAGNOSA_URL', 'diagnosa');
define('HASIL_URL', 'hasil');

define('GEJALA_SCRIPT', '
    function confirmDeleteGejala(event, kode) {
        event.preventDefault();

        Swal.fire({
            title: "Konfirmasi",
            text: "Yakin ingin menghapus data ini?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                let deleteUrl = "?page=" + "' . HOME_URL . '" + "&sub=" + "' . GEJALA_URL . '" + "&act=delete&kode=" + kode;
                window.location.href = deleteUrl;
            }
        });
    }
');

define('KERUSAKAN_SCRIPT', '
function confirmDeleteKerusakan(event, kode) {
    event.preventDefault();

    Swal.fire({
        title: "Konfirmasi",
        text: "Yakin ingin menghapus data ini?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, Hapus!",
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            let deleteUrl = "?page=" + "' . HOME_URL . '" + "&sub=" + "' . KERUSAKAN_URL . '" + "&act=delete&kode=" + kode;
            window.location.href = deleteUrl;
        }
    });
}
');

define('PENGETAHUAN_SCRIPT', '
function confirmDeletePengetahuan(event, id) {
    event.preventDefault();

    Swal.fire({
        title: "Konfirmasi",
        text: "Yakin ingin menghapus data ini?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, Hapus!",
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            let deleteUrl = "?page=" + "' . HOME_URL . '" + "&sub=" + "' . PENGETAHUAN_URL . '" + "&act=delete&kode=" + id;
            window.location.href = deleteUrl;
        }
    });
}
');

