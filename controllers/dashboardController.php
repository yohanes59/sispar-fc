<?php
class dashboardController extends controller
{
    public $hModel, $kModel, $gModel;

    public function __construct()
    {
        $this->hModel = new hasilModel();
        $this->kModel = new kerusakanModel();
        $this->gModel = new gejalaModel();
    }

    public function index()
    {
        $jumlahKerusakan = $this->kModel->numRow($this->kModel->selectAll());
        $jumlahGejala = $this->gModel->numRow($this->gModel->selectAll());
        $jumlahRiwayat = $this->hModel->numRow($this->hModel->selectAll());
        include './views/pages/home/dashboard.php';
    }
}
