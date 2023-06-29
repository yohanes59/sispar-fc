<?php
include 'models/gejalaModel.php';

class gejalaController
{
    public $model;

    public function __construct()
    {
        $this->model = new gejalaModel();
    }

    // public function generate_code()
    // {
    //     $this->model->cariCode();
    // }

    function sweetalert($icon, $title, $text)
    {
        echo "<script type='text/javascript'>
    		Swal.fire({
    		icon: '$icon',
    		title: '$title',
    		text: '$text'
    		});
    	</script>";
    }

    public function index()
    {
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
        include_once './views/pages/home/gejala/tambah.php';
        $nama = @$_POST['nama'];

        if ($this->validate_name($nama)) {
            $insert = $this->model->insert($nama);
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

    public function edit()
    {
        include './views/pages/home/gejala/edit.php';
    }
}
