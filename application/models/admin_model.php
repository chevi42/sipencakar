<?php

class admin_Model extends CI_Model
{
    //Akun Aktif
    public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function count_Pelamar()
    {
        return $this->db->count_all_results('pelamar');
    }

    public function count_KaryawanAktif($lowongan)
    {
        $query = "SELECT COUNT(id_pelamar) as jumlah from 
        (SELECT id_pelamar FROM `nilai` WHERE id_lowongan = ? GROUP BY id_pelamar) as sub_query";
        return $this->db->query($query, $lowongan)->row_array();
    }

    public function count_Departement()
    {
        return $this->db->count_all_results('departement');
    }

    public function count_HRD()
    {
        $query = "SELECT count(id_hrd) as jumlah FROM `hrd`";
        return $this->db->query($query)->row_array();
    }

    public function count_Lowongan()
    {
        return $this->db->count_all_results('lowongan');
    }    

    public function get_Alternatif()
    {
        return $this->db->get('alternatif')->result_array();
    }

    public function jumlah($id_a, $lowongan)
    {
        $query = "SELECT COUNT(*) as jumlah from (SELECT n.id_karyawan from penilaian p 
        JOIN nilai n on p.id_nilai = n.id_nilai
        JOIN karyawan g on n.id_karyawan = g.id_karyawan
        WHERE p.rank = ? AND n.id_lowongan = ?
        GROUP BY n.id_karyawan) as sub_query";
        return $this->db->query($query, array($id_a, $lowongan))->row_array();
    }

    public function get_karyawan($id_a, $lowongan)
    {
        $query = "SELECT * , (SELECT nama_alternatif from alternatif WHERE id_alternatif = ?) as alternatif from 
        (SELECT n.id_karyawan, g.nama_karyawan, g.nik from penilaian p 
        JOIN nilai n on p.id_nilai = n.id_nilai 
        JOIN karyawan g on n.id_karyawan = g.id_karyawan
        -- JOIN matkul m on g.id_matkul = m.id_matkul
        WHERE p.rank = ? AND n.id_lowongan = ? 
        GROUP BY n.id_karyawan) as sub_query";
        return $this->db->query($query, array($id_a, $id_a, $lowongan))->result_array();
    }

    public function edit_Password($id, $newpassword)
    {
        $this->db->set('password', $newpassword);
        $this->db->where('id_admin', $id);
        $this->db->update('admin');
    }

    public function image_Profile()
    {
        $image = $this->upload->data('file_name');
        $this->db->set('foto', $image);
    }

    public function edit_Data()
    {
        $id = $this->input->post('idadmin');
        $name = $this->input->post('name');

        $this->db->set('nama', $name);
        $this->db->where('id_admin', $id);
        $this->db->update('admin');
    }

    // Pengguna

    public function get_AllAdmin()
    {
        return $this->db->get('admin')->result_array();
    }

    public function delete_pengguna($id)
    {
        $this->db->delete('admin', ['id_admin' => $id]);
    }

    public function get_ById($id)
    {
        return $this->db->get_where('admin', ['id_admin' => $id])->row_array();
    }

    public function insert_Pengguna()
    {
        $data = [
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => md5($this->input->post('password')),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'foto' => 'default.png',
            'akses' => 'Penilai'
        ];

        $this->db->insert('admin', $data);
    }

    public function edit_Pengguna($id)
    {
        $akses = $this->input->post('akses', true);
        $this->db->set('akses', $akses);
        $this->db->where('id_admin', $id);
        $this->db->update('admin');
    }

    public function get_Akses()
    {
        $this->db->distinct();
        $this->db->select('akses');
        $this->db->from('admin');
        return $this->db->get()->result_array();

        //return $this->db->query('SELECT DISTINCT `akses` FROM `admin`')->result_array();
    }

    public function reset()
    {
        $id = $this->input->post('idadmin', true);
        $password = md5($this->input->post('newpassword', true));

        $this->db->set('password', $password);
        $this->db->where('id_admin', $id);
        $this->db->update('admin');
    }
}
