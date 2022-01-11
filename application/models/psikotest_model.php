<?php

class psikotest_model extends CI_Model
{
    public function getSoalTest(){
        $query = "select * from soal_psikotest";
        return $this->db->query($query)->result_array();
    }

    public function getPengguna($where){
        $query = "select * from pelamar where $where";
        return $this->db->query($query)->result_array();
    }

    public function getHasilTest(){
        $query = "SELECT pelamar.*,hasil_psikotest.* FROM pelamar JOIN hasil_psikotest on pelamar.id_pelamar = hasil_psikotest.id_pelamar";
        return $this->db->query($query)->result_array();
    }

    public function getDetailTest($id){
        return $this->db->get_where('hasil_psikotest', ['id_test' => $id])->row_array();
    }

    public function insertData($data){
        $this->db->insert("hasil_psikotest", $data);
        return true;
    }

}
?>