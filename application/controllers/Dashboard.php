<?php

    class Dashboard extends CI_Controller{

        public function __construct(){
            parent::__construct();
            //model load
        }
        
        public function index(){
            $this->load->view("admin/includes/head");
            $this->load->view("admin/includes/header");
            $this->load->view("admin/includes/sidebar");
            $this->load->view("admin/dashboard_v");
            $this->load->view("admin/includes/footer");
        }
    }