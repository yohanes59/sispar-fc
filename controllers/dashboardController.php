<?php

class dashboardController extends controller
{
    public $pModel, $kModel, $gModel;

    public function __construct()
    {
        $this->pModel = new pengetahuanModel();
        $this->kModel = new kerusakanModel();
        $this->gModel = new gejalaModel();
    }

    public function index()
    {
        $jumlahKerusakan = $this->kModel->numRow($this->kModel->selectAll());
        $jumlahGejala = $this->gModel->numRow($this->gModel->selectAll());
        $jumlahPengetahuan = $this->pModel->numRow($this->pModel->selectAll());
        include './views/pages/home/dashboard.php';
    }
}
