<?php

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("mreport");
    }
    public function index()
    {
        $this->load->view("register_v");
    }
    public function buatAkun()
    {
    	$username = $this->input->post('username');
    	$nama = $this->input->post('nama');
    	$alamat = $this->input->post('alamat');
    	$no_telp = $this->input->post('no_telp');
    	$password = $this->input->post('password');

    	if (!($username) || !($nama) || !($alamat) || !($no_telp) || !($password)) {
    		$this->session->set_flashdata('daftar_gagal', '*Data akun tidak boleh ada yang kosong');
    		redirect('register');
    	}else{
            $data = array('username' => $username,
                          'nama_pelanggan' => $nama,
                          'alamat_pelanggan' => $alamat,
                          'no_telp' => $no_telp,
                          'password' => md5($password));
            
            $this->mreport->daftarAkun($data);
    		redirect(base_url() . 'login');
    	}
    }
}