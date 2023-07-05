<?php
include 'models/diagnosaModel.php';

class diagnosaController
{
    public $pModel, $kModel, $gModel, $model;

    public function __construct()
    {
        $this->gModel = new gejalaModel();
        $this->model = new diagnosaModel();
    }

    public function generate_code()
    {
        $result = $this->model->cariCode();

        if ($result == null) {
            return 'KD-001';
        } else {
            $row = $result->fetch_array();
            $lastCode = substr($row[0], 3);
            $nextCode = intval($lastCode) + 1;

            $nextCodeFormatted = sprintf('%03d', $nextCode);
            return 'KD-' . $nextCodeFormatted;
        }
    }

    public function index()
    {
        $data = $this->gModel->selectAll();
        include './views/pages/home/diagnosa/index.php';
    }

    public function insert()
    {
        $kode_diagnosa = $this->generate_code();
        $user_id = $_SESSION['user_id'];
        $kode_gejala = $_POST['input'];

        foreach ($kode_gejala as $gejala) {
            $this->model->insert($kode_diagnosa, $user_id, $gejala);
        }
    }
}
