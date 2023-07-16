<?php
include 'models/kerusakanModel.php';

class kerusakanController extends controller
{
    public $model;

    public function __construct()
    {
        $this->model = new kerusakanModel();
    }

    public function generate_code()
    {
        $result = $this->model->cariCode();

        if ($result == null) {
            return 'KK-01';
        } else {
            $row = $result->fetch_array();
            $lastCode = substr($row[0], 3);
            $nextCode = intval($lastCode) + 1;

            $nextCodeFormatted = sprintf('%02d', $nextCode);
            return 'KK-' . $nextCodeFormatted;
        }
    }

    public function index()
    {
        $data = $this->model->selectAll();
        include './views/pages/home/kerusakan/index.php';
    }

    public function create()
    {
        include './views/pages/home/kerusakan/tambah.php';
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

    function validate_solusi($solusi)
    {
        if (empty(trim($solusi))) {
            $this->sweetalert('error', 'input required!', 'Solusi tidak boleh kosong');
            return false;
        } else {
            return true;
        }
    }

    public function insert()
    {
        $nama = @$_POST['nama'];
        $solusi = @$_POST['solusi'];
        $kode = $this->generate_code();

        if ($this->validate_name($nama) && $this->validate_solusi($solusi)) {
            $insert = $this->model->insert($kode, $nama, $solusi);
            if ($insert) {
                echo "<script type='text/javascript'>
                    Swal.fire({
                    icon: 'success',
                    title: 'Data Tersimpan',
                    text: 'Data berhasil disimpan!'
                    }).then(function() {
                        location.href = '?page=home&sub=kerusakan';
                    });
                </script>";
            }
        }
    }

    public function edit($kode)
    {
        $data = $this->model->select($kode);
        $item = $this->model->fetch($data);
        include './views/pages/home/kerusakan/edit.php';
    }

    public function update()
    {
        $kode = $_GET['kode'];
        $nama = @$_POST['nama'];
        $solusi = @$_POST['solusi'];

        if ($this->validate_name($nama) && $this->validate_solusi($solusi)) {
            $update = $this->model->update($kode, $nama, $solusi);
            if ($update) {
                echo "<script type='text/javascript'>
                    Swal.fire({
                    icon: 'success',
                    title: 'Data Tersimpan',
                    text: 'Data berhasil diubah!'
                    }).then(function() {
                        location.href = '?page=home&sub=kerusakan';
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
                    location.href = '?page=home&sub=kerusakan';
                });
            </script>";
        }
    }
}
