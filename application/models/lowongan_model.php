<?php

class lowongan_model extends CI_Model
{
    //Akun Aktif
    public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function get_AllLowongan()
    {
        return $this->db->get('lowongan')->result_array();
    }

    public function get_ById($id)
    {
        return $this->db->get_where('lowongan', ['id_lowongan' => $id])->row_array();
    }

    public function add()
    {

        $data = [
            'lowongan' => $this->input->post('lowongan'),
            'status' => $this->input->post('status'),
        ];
        $this->db->insert('lowongan', $data);
    }

    public function edit($id)
    {
        $this->db->set('lowongan', $this->input->post('lowongan'));
        $this->db->set('status', $this->input->post('status'));
        $this->db->where('id_lowongan', $id);
        $this->db->update('lowongan');
    }

    public function delete($id)
    {
        $this->db->delete('lowongan', ['id_lowongan' => $id]);
    }
}
