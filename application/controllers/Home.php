<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("mreport");
        $this->load->model("musers");
    }

    public function index()
    {

        $data['users'] = $this->session->userdata('users');
        $data['jenisKeluhan'] = $this->musers->readJenisKeluhan();
        $this->load->view("layout/navigation", $data);
        $this->load->view("layout/header");
        $this->load->view("index_v");
        $this->load->view("layout/footer");
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function sendReport()
    {
        $report = $this->input->post("keluhan");
        $message = $this->input->post("pesan");
        $idPelanggan = $this->session->userdata("users")['id_pelanggan'];
        $tanggal = date('Y-m-d');
        
        
        if (!empty($report) && !empty($message)) {
            $data = array(
                "id_pelanggan" => $idPelanggan,
                "keluhan" => $report,
                "tanggal" => $tanggal,
                "pesan" => $message
            );  

            $this->mreport->sendReport($data);
            $this->session->set_flashdata('message', 'Data Keluhan berhasil Diterima');
            $this->session->set_flashdata('istrue', "Sukses");
            redirect(base_url() . 'home');
        } else {
            $this->session->set_flashdata('message', 'Lengkapi Data Keluhan,silahkan coba lagi!');
            $this->session->set_flashdata('istrue', "Gagal");
            redirect(base_url() . 'home');
        }
    }

    public function KeluhanPelanggan()
    {
        $idJenis = $this->uri->segment(3);
        $result = $this->musers->readKeluhanPelangganById($idJenis);
        header('Content-type: application/json');
        echo json_encode($result);
    }

    public function Kuesioner()
    {
        $data['users'] = $this->session->userdata('users');
        $this->load->view("layout/navigation",$data);
        $this->load->view("layout/header");
        $this->load->view("kuesioner_v");
        $this->load->view("layout/footer");
    }
    public function inputKuesioner(){
        $pertanyaan_satu = $this->input->post('pertanyaan_satu');
        foreach ($pertanyaan_satu as $obj_satu) {
            $objsatu = $obj_satu;
        }
        $pertanyaan_dua = $this->input->post('pertanyaan_dua');
        foreach ($pertanyaan_dua as $obj_dua) {
            $objdua = $obj_dua;
        }
        $pertanyaan_tiga = $this->input->post('pertanyaan_tiga');
        foreach ($pertanyaan_tiga as $obj_tiga) {
            $objtiga = $obj_tiga;
        }
        $pertanyaan_empat = $this->input->post('pertanyaan_empat');
        foreach ($pertanyaan_empat as $obj_empat) {
            $objempat = $obj_empat;
        }
        $pertanyaan_lima = $this->input->post('pertanyaan_lima');
        foreach ($pertanyaan_lima as $obj_lima) {
            $objlima = $obj_lima;
        }
        $pesan = $this->input->post('pesan');

        if (!($objsatu) || !($objdua) || !($objtiga) || !($objempat) || !($objlima) || !($pesan)) {
            $this->session->set_flashdata('kuesioner_gagal', 'Kuesioner tidak boleh kosong!');
            redirect('home');
        }else{
            $data = array('pertanyaan_satu' => $objsatu,
                      'pertanyaan_dua' => $objdua,
                      'pertanyaan_tiga' => $objtiga,
                      'pertanyaan_empat' => $objempat,
                      'pertanyaan_lima' => $objlima,
                      'pesan' => $pesan);
        

            $this->mreport->sendKuesioner($data);
            redirect('home');
        }
    }
}
