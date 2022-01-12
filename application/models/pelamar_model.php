<?php

class pelamar_Model extends CI_Model
{
    //Akun Aktif
    public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function get_AllPelamar()
    {
        $query = "SELECT * FROM `pelamar` g 
        join `lowongan` m on g.id_lowongan = m.id_lowongan join `hasil_psikotest` h on g.id_pelamar = h.id_pelamar join `nilai` n on g.id_pelamar = n.id_pelamar
        ORDER BY g.id_pelamar ";
        return $this->db->query($query)->result_array();
    }

    public function getstatus()
    {
        $query = "SELECT pelamar.status FROM pelamar JOIN admin ON admin.id_admin = pelamar.id_admin";
    }

    public function get_Pelamar($admin)
    {
        $query = "SELECT * FROM `pelamar` g 
        join `lowongan` m on g.id_lowongan = m.id_lowongan WHERE g.id_admin = ? ORDER BY g.id_pelamar";
        return $this->db->query($query, $admin)->result_array();
    }

    public function get_ById($id)
    {
        $query = "SELECT * FROM `pelamar` g 
        join `lowongan` m on g.id_lowongan = m.id_lowongan WHERE g.id_pelamar = ?";
        return $this->db->query($query, $id)->row_array();
    }

    public function get_Penilai()
    {
        return $this->db->get_where('admin', ['akses' => "Penilai"])->result_array();
    }

    public function get_lowongan()
    {
        return $this->db->get('lowongan')->result_array();
    }

    public function add()
    {
        $data = [
            'id_lowongan' => $this->input->post('lowongan', true),
            'nama_pelamar' => htmlspecialchars($this->input->post('nama', true)),
            'nik' => htmlspecialchars($this->input->post('nik', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            //'email' => $this->input->post('email'),
            'ipk' => $this->input->post('ipk'),
            'toefl' => $this->input->post('toefl'),
            'pengalaman' => $this->input->post('pengalaman'),
            'umur'=> $this->input->post('umur'),
        ];

        $this->db->insert('pelamar', $data);
    }

    public function edit($id)
    {
        $this->db->set('id_lowongan', $this->input->post('id_lowongan'));
        $this->db->set('nama_pelamar', $this->input->post('nama_pelamar'));
        $this->db->set('nik', $this->input->post('nik'));
        $this->db->set('jenis_kelamin', $this->input->post('jenis_kelamin'));
        $this->db->set('alamat', $this->input->post('alamat'));
        $this->db->set('no_hp', $this->input->post('no_hp'));
        //$this->db->set('email', $this->input->post('email'));
        $this->db->set('ipk', $this->input->post('ipk'));
        $this->db->set('toefl', $this->input->post('toefl'));        
        $this->db->set('psikotes', $this->input->post('psikotes'));
        $this->db->set('pengalaman', $this->input->post('pengalaman'));
        $this->db->set('umur', $this->input->post('umur'));
        $this->db->where('id_pelamar', $id);
        $this->db->update('pelamar');
    }

    public function delete($id)
    {
        $this->db->delete('pelamar', ['id_pelamar' => $id]);
    }
}
