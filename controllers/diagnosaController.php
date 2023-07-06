<?php
include 'models/diagnosaModel.php';
include 'models/hasilModel.php';

class diagnosaController
{
    public $pModel, $kModel, $gModel, $hModel, $model;

    public function __construct()
    {
        $this->gModel = new gejalaModel();
        $this->kModel = new kerusakanModel();
        $this->pModel = new pengetahuanModel();
        $this->hModel = new hasilModel();
        $this->model = new diagnosaModel();
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

    function validate_input($input)
    {
        if (count($input) > 5) {
            $this->sweetalert('error', 'input error!', 'Input gejala maksimal 5');
            return false;
        } else {
            return true;
        }
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

        if ($this->validate_input($kode_gejala)) {
            foreach ($kode_gejala as $gejala) {
                $this->model->insert($kode_diagnosa, $user_id, $gejala);
            }
        }

        $data_diagnosa = $this->model->selectLast();
        $data = array();
        while ($result = $this->model->fetch($data_diagnosa)) {
            $data[] = $result;
        }
        return $data;
    }

    public function forward_chaining($rules, $facts)
    {
        $conclusion = [];

        foreach ($rules as $result => $rule) {
            $aturan = array_column($rule, 'kode_gejala');

            if (array_diff($aturan, $facts) == []) {
                $conclusion[] = $result;
            }
        }

        if (!empty($conclusion)) {
            $result = implode(", ", $conclusion);
        } else {
            $result = "-";
        }

        return $result;
    }

    public function process()
    {
        // data input
        $data_kode_diagnosa = $this->insert();

        // data kode diagnosa
        $data_pengetahuan = $this->pModel->selectCodeData();
        $rule = [];
        foreach ($data_pengetahuan as $row) {
            $index = $row['kode_kerusakan'];
            $item = $row['kode_gejala'];
            unset($row['kode_kerusakan']);
            $rule[$index][$item] = $row;
        }

        $hasil = $this->forward_chaining($rule, array_column($data_kode_diagnosa, 'kode_gejala'));

        $kode = $this->model->cariCode($data_kode_diagnosa);
        $kode = $this->model->fetch($kode);
        $nama = $this->kModel->select($hasil);
        $nama = $this->kModel->fetch($nama);

        // insert ke tabel hasil
        // inisiasi variabel
        $kode_diagnosa = implode(", ", $kode);
        $kode_kerusakan = $hasil;
        if ($kode_kerusakan !== "-") {
            $nama_kerusakan = $nama['nama'];
        } else {
            $nama_kerusakan = "-";
        }

        $this->hModel->insert($kode_diagnosa, $kode_kerusakan, $nama_kerusakan);
    }
}
