<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("musers");
        $checklogin = $this->session->userdata('users');
        if ($checklogin) {
            redirect(base_url());
        }
    }
    public function index()
    {
        $this->load->view("login_v");
    }

    public function authCostumer()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if (!empty($username) && !empty($password)) {
            $data = [
                $username,
                md5($password)
            ];
            $result = $this->musers->loginCustomer($data);
            if ($result > 0) {
                $this->session->set_userdata('users', $result);
                redirect(base_url());
            } else {
                $this->session->set_flashdata('message', 'Username dan password tidak sesuai,Silahkan Coba Lagi');
                redirect(base_url() . 'login');
            }
        } else {
            $this->session->set_flashdata('message', 'username dan password tidak boleh kosong');
            redirect(base_url() . 'login');
        }
    }
}
