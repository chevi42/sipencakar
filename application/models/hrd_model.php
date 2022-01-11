<?php

class hrd_Model extends CI_Model
{
    //Akun Aktif
    public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function get_AllHRD()
    {
        $query = "SELECT * FROM `hrd` m
        ORDER BY m.id_hrd";
        return $this->db->query($query)->result_array();
    }

    public function get_ById($id)
    {
        $query = "SELECT * FROM `hrd` m 
        WHERE m.id_hrd = ?";
        return $this->db->query($query, $id)->row_array();
    }

    public function add()
    {
        $data = [
            'nik' => $this->input->post('nik', true),
            'nama' => $this->input->post('nama', true),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
        ];

        $this->db->insert('hrd', $data);
    }

    public function edit($id)
    {
        $data = [
            'nik' => $this->input->post('nik', true),
            'nama' => $this->input->post('nama', true),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
        ];

        $this->db->where('id_hrd', $id);
        $this->db->update('hrd', $data);
    }

    public function delete($id)
    {
        $this->db->delete('hrd', ['id_hrd' => $id]);
    }


}