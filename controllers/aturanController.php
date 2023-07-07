<?php

class aturanController extends controller
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
        $data = $this->pModel->showRuleDataToPage();
        $arrayData = [];
        while ($row = $data->fetch_assoc()) {
            $kodeKerusakan = $row['kode_kerusakan'];
            $arrayData[$kodeKerusakan][] = $row;
        }
        $jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);
        include './views/pages/home/aturan/index.php';
    }
}
