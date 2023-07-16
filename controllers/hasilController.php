<?php
include 'models/hasilModel.php';

class hasilController extends controller
{
    public $model;

    public function __construct()
    {
        $this->model = new hasilModel();
    }

    public function index($kode)
    {
        $data_hasil = $this->model->selectLastData();
        $data_hasil = $this->model->fetch($data_hasil);

        $input_gejala = $this->model->selectInputGejalaByDiagnosaCode($data_hasil['kode_diagnosa']);
        while ($row = $this->model->fetch($input_gejala)) {
            $data_input_gejala[] = $row;
        }

        $relate_gejala = $this->model->selectRelateGejalaByDiagnosaCode($data_hasil['kode_diagnosa']);
        while ($row = $this->model->fetch($relate_gejala)) {
            $data_gejala[] = $row;
        }
        include './views/pages/home/diagnosa/hasil.php';
    }

    public function showRiwayat()
    {
        $data = $this->model->selectRiwayat();
        while ($row = $this->model->fetch($data)) {
            $data_riwayat[] = $row;
        }
        include './views/pages/home/riwayat/index.php';
    }
}
