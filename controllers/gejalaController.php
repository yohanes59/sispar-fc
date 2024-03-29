<?php
include 'models/gejalaModel.php';

class gejalaController extends controller
{
    public $model;

    public function __construct()
    {
        $this->model = new gejalaModel();
    }

    public function generate_code()
    {
        $result = $this->model->cariCode();

        if ($result == null) {
            return 'KG-01';
        } else {
            $row = $result->fetch_array();
            $lastCode = substr($row[0], 3);
            $nextCode = intval($lastCode) + 1;

            $nextCodeFormatted = sprintf('%02d', $nextCode);
            return 'KG-' . $nextCodeFormatted;
        }
    }

    public function index()
    {
        $data = $this->model->selectAll();
        include './views/pages/home/gejala/index.php';
    }

    public function create()
    {
        include './views/pages/home/gejala/tambah.php';
    }

    function validate_name($nama)
    {
        if (empty(trim($nama))) {
            $this->sweetalert('error', 'input required!', 'Nama tidak boleh kosong');
            return false;
        } else {
            return true;
        }
    }

    public function insert()
    {
        $nama = @$_POST['nama'];
        $kode = $this->generate_code();

        if ($this->validate_name($nama)) {
            $insert = $this->model->insert($kode, $nama);
            if ($insert) {
                echo "<script type='text/javascript'>
                    Swal.fire({
                    icon: 'success',
                    title: 'Data Tersimpan',
                    text: 'Data berhasil disimpan!'
                    }).then(function() {
                        location.href = '?page=home&sub=gejala';
                    });
                </script>";
            }
        }
    }

    public function edit($kode)
    {
        $data = $this->model->select($kode);
        $item = $this->model->fetch($data);
        include './views/pages/home/gejala/edit.php';
    }

    public function update()
    {
        $kode = $_GET['kode'];
        $nama = @$_POST['nama'];

        if ($this->validate_name($nama)) {
            $update = $this->model->update($kode, $nama);
            if ($update) {
                echo "<script type='text/javascript'>
                    Swal.fire({
                    icon: 'success',
                    title: 'Data Tersimpan',
                    text: 'Data berhasil diubah!'
                    }).then(function() {
                        location.href = '?page=home&sub=gejala';
                    });
                </script>";
            }
        }
    }

    public function destroy($kode)
    {
        $delete = $this->model->delete($kode);
        if ($delete) {
            echo "<script type='text/javascript'>
                Swal.fire({
                icon: 'success',
                title: 'Data Terhapus',
                text: 'Data berhasil dihapus!'
                }).then(function() {
                    location.href = '?page=home&sub=gejala';
                });
            </script>";
        }
    }
}
