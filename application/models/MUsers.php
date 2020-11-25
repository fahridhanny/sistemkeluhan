<?php

class MUsers extends CI_Model
{

    public function loginCustomer($data)
    {
        $query = $this->db->get_where("tb_pelanggan", ["username" => $data[0], "password" => $data[1]]);
        return $query->row_array();
    }

    public function readJenisKeluhan(){
        $query = $this->db->get("tb_keluhan");
        return $query->result_array();
    }

    public function readKeluhanPelangganById($id){
        $query = $this->db->get_where("tb_keluhan",array("jenis_keluhan"=>$id));
        return $query->result_array();
    }
}
