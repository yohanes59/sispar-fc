<?php
include 'models/pengetahuanModel.php';

class pengetahuanController
{
    public $pModel, $kModel, $gModel;

    public function __construct()
    {
        $this->pModel = new pengetahuanModel();
        $this->kModel = new kerusakanModel();
        $this->gModel = new gejalaModel();
    }

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
        $data = $this->pModel->selectAll();
        include './views/pages/home/pengetahuan/index.php';
    }

    public function create()
    {
        $k_Data = $this->kModel->selectAll();
        $g_Data = $this->gModel->selectAll();
        include './views/pages/home/pengetahuan/tambah.php';
    }

    public function insert()
    {
        $kerusakan = @$_POST['kerusakan'];
        $gejala = @$_POST['gejala'];

        $insert = $this->pModel->insert($kerusakan, $gejala);
        if ($insert) {
            echo "<script type='text/javascript'>
                    Swal.fire({
                    icon: 'success',
                    title: 'Data Tersimpan',
                    text: 'Data berhasil disimpan!'
                    }).then(function() {
                        location.href = '?page=home&sub=pengetahuan';
                    });
                </script>";
        }
    }

    public function edit($kode)
    {
        $k_Data = $this->kModel->selectAll();
        $g_Data = $this->gModel->selectAll();
        $data = $this->pModel->select($kode);
        $itemData = $this->pModel->fetch($data);
        include './views/pages/home/pengetahuan/edit.php';
    }

    public function update()
    {
        $kode = $_GET['kode'];
        $kode_kerusakan = @$_POST['kerusakan'];
        $kode_gejala = @$_POST['gejala'];

        $update = $this->pModel->update($kode, $kode_kerusakan, $kode_gejala);
        if ($update) {
            echo "<script type='text/javascript'>
                    Swal.fire({
                    icon: 'success',
                    title: 'Data Tersimpan',
                    text: 'Data berhasil diubah!'
                    }).then(function() {
                        location.href = '?page=home&sub=pengetahuan';
                    });
                </script>";
        }
    }

    public function destroy($kode)
    {
        $delete = $this->pModel->delete($kode);
        if ($delete) {
            echo "<script type='text/javascript'>
                Swal.fire({
                icon: 'success',
                title: 'Data Terhapus',
                text: 'Data berhasil dihapus!'
                }).then(function() {
                    location.href = '?page=home&sub=pengetahuan';
                });
            </script>";
        }
    }
}
