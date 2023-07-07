<?php
$sub = @$_GET['sub'];
$act = @$_GET['act'];
$kode = @$_GET['kode'];

if ($sub == '') {
    if ($act == '') {
        $dashboard->index();
    } elseif ($act == 'logout') {
        $user->logout();
    }
} elseif ($sub == GEJALA_URL) {
    if ($act == '') {
        $gejala->index();
    } elseif ($act == 'tambah') {
        $gejala->create();
        if (@$_POST['simpan']) {
            $gejala->insert();
        }
    } elseif ($act == 'edit') {
        $gejala->edit($kode);
        if (@$_POST['simpan']) {
            $gejala->update();
        }
    } elseif ($act == 'delete') {
        $gejala->destroy($kode);
    }
} elseif ($sub == KERUSAKAN_URL) {
    if ($act == '') {
        $kerusakan->index();
    } elseif ($act == 'tambah') {
        $kerusakan->create();
        if (@$_POST['simpan']) {
            $kerusakan->insert();
        }
    } elseif ($act == 'edit') {
        $kerusakan->edit($kode);
        if (@$_POST['simpan']) {
            $kerusakan->update();
        }
    } elseif ($act == 'delete') {
        $kerusakan->destroy($kode);
    }
} elseif ($sub == PENGETAHUAN_URL) {
    if ($act == '') {
        $pengetahuan->index();
    } elseif ($act == 'tambah') {
        $pengetahuan->create();
        if (@$_POST['simpan']) {
            $pengetahuan->insert();
        }
    } elseif ($act == 'edit') {
        $pengetahuan->edit($kode);
        if (@$_POST['simpan']) {
            $pengetahuan->update();
        }
    } elseif ($act == 'delete') {
        $pengetahuan->destroy($kode);
    }
} elseif ($sub == ATURAN_URL) {
    $aturan->index();
} elseif ($sub == DIAGNOSA_URL) {
    $diagnosa->index();
    if (@$_POST['proses']) {
        $diagnosa->process();
    }
} elseif ($sub == HASIL_URL) {
    $diagnosa->showHasil();
}
