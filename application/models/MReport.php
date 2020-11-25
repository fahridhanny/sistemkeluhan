<?php 

class MReport extends CI_Model{

    public function daftarAkun($data){
    	$this->db->insert('tb_pelanggan', $data);
    }
    public function sendReport($data){
        $query = $this->db->insert("tb_keluhan",$data);
        return $query;
    }
    public function sendKuesioner($data){
        $this->db->insert("tb_kuesioner", $data);
    }
}