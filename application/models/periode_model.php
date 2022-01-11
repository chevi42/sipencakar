<?php

class periode_Model extends CI_Model
{
    //Akun Aktif
    public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function get_AllPeriode()
    {
        return $this->db->get('periode')->result_array();
    }

    public function get_ById($id)
    {
        return $this->db->get_where('periode', ['id_periode' => $id])->row_array();
    }

    public function get_Bywaktu($id)
    {
        return $this->db->get_where('periode', ['waktu' => $id])->row_array();
    }

    public function add()
    {
        $this->db->set('aktif', "N");
        $this->db->update('periode');

        $data = [
            'waktu' => $this->input->post('waktu'),
            'keterangan' => $this->input->post('semester'),
            'aktif' => 'Y',
        ];
        $this->db->insert('periode', $data);
    }

    public function add_Nilai()
    {
        $tahun = $this->db->query('SELECT max(id_periode) as akhir FROM periode')->row_array();
        $karyawan = $this->db->get_where('karyawan', ['aktif' => "Y"])->result_array();

        foreach ($karyawan as $g) {
            $kriteria = $this->db->get('kriteria')->result_array();
            foreach ($kriteria as $k) {
                $data = [
                    'id_kriteria' => $k['id_kriteria'],
                    'id_karyawan' => $g['id_karyawan'],
                    'id_periode' => $tahun['akhir']
                ];
                $this->db->insert('nilai', $data);
            }
        }
    }

    public function edit($id)
    {
        $this->db->set('waktu', $this->input->post('waktu'));
        $this->db->set('keterangan', $this->input->post('semester'));
        $this->db->where('id_periode', $id);
        $this->db->update('periode');
    }

    public function delete($id)
    {
        $this->db->delete('periode', ['id_periode' => $id]);
    }

    public function active($id)
    {
        $this->db->set('aktif', "N");
        $this->db->update('periode');

        $this->db->set('aktif', "Y");
        $this->db->where('id_periode', $id);
        $this->db->update('periode');
    }
}
