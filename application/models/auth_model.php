<?php

class auth_Model extends CI_Model
{

    public function insert_Admin()
    {
        $data = [
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => md5($this->input->post('passwordsignin')),
            'nama' => htmlspecialchars($this->input->post('fullname', true)),
            'foto' => 'default.png',
            'akses' => 'Pelamar'
        ];

        $this->db->insert('admin', $data);
    }

    public function insert_pelamar()
    {
        $data=
        [
            'nik' => $this->input->post('nik'),
            'nama_pelamar' =>htmlspecialchars($this->input->post('fullname', true)),
            'id_lowongan' => $this->input->post('id_lowongan'),
    
        ];
        $this->db->insert('pelamar',$data);
    }


    public function select_Admin($email)
    {
        return $this->db->get_where('admin', ['email' => $email])->row_array();
    }


    public function logout_Admin()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('akses');
        redirect('auth');
    }

}
