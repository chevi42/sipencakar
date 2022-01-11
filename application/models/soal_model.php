<?php

class soal_model extends CI_Model
{
    //Akun Aktif
    public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function get_AllSoal()
    {
        return $this->db->get('soal_psikotest')->result_array();
    }

    public function get_ById($id)
    {
        return $this->db->get_where('soal_psikotest', ['id_soal' => $id])->row_array();
    }

    public function add()
    {

        $data = [
            'soal' => $this->input->post('soal'),
            'bobot' => $this->input->post('bobot'),
            'jawaban' => $this->input->post('jawaban'),
            'id_option1' => $this->input->post('id_option1'),
            'option1' => $this->input->post('option1'),
            'id_option2' => $this->input->post('id_option2'),
            'option2' => $this->input->post('option2'),
            'id_option3' => $this->input->post('id_option3'),
            'option3' => $this->input->post('option3'),
            'id_option4' => $this->input->post('id_option4'),
            'option4' => $this->input->post('option4'),

        ];
        $this->db->insert('soal_psikotest', $data);
    }

    public function edit($id)
    {
        $this->db->set('soal', $this->input->post('soal'));
        $this->db->set('bobot', $this->input->post('bobot'));
        $this->db->set('jawaban', $this->input->post('jawaban'));
        $this->db->set('option1', $this->input->post('option1'));
        $this->db->set('option2', $this->input->post('option2'));
        $this->db->set('option3', $this->input->post('option3'));
        $this->db->set('option4', $this->input->post('option4'));
        $this->db->where('id_soal', $id);
        $this->db->update('soal_psikotest');
    }

    public function delete($id)
    {
        $this->db->delete('soal_psikotest', ['id_soal' => $id]);
    }
}
