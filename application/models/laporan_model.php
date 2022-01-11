<?php

class laporan_model extends CI_Model
{

	public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }
    

    //laproranrekap
    function getdinilai($id_periode, $categori){
        if($categori=='1'){
           $query = "SELECT a.id_karyawan, a.nik, a.nama_karyawan
                FROM karyawan a
                WHERE a.id_karyawan in (SELECT id_karyawan FROM nilai where id_periode = $id_periode GROUP BY id_karyawan)
                GROUP BY a.id_karyawan";
        }else{
            $query = "SELECT a.id_karyawan, a.nik, a.nama_karyawan
                FROM karyawan a
                WHERE a.id_karyawan NOT in (SELECT id_karyawan FROM nilai where id_periode = $id_periode GROUP BY id_karyawan)
                GROUP BY a.id_karyawan";
        }

        return $this->db->query($query)->result_array();
    }

    function getpenilai($id_periode, $categori){
        if($categori=='1'){
           $query = "SELECT a.nim, a.nama, b.nama_prodi, a.jenjang, c.kelas
                from mahasiswa a
                INNER JOIN prodi b ON a.id_prodi = b.id_prodi
                INNER JOIN kelas c ON a.id_kelas = c.id_kelas

                WHERE a.nim IN 
                    (SELECT REPLACE(e.email, '@gmail.com','') AS nim
                        from nilai d
                        INNER JOIN admin e ON d.id_admin = e.id_admin
                        WHERE d.id_periode = $id_periode
                        GROUP BY d.id_admin
                    )";
        }else{
            $query = "SELECT a.nim, a.nama, b.nama_prodi, a.jenjang, c.kelas
                from mahasiswa a
                INNER JOIN prodi b ON a.id_prodi = b.id_prodi
                INNER JOIN kelas c ON a.id_kelas = c.id_kelas

                WHERE a.nim NOT IN 
                    (SELECT REPLACE(e.email, '@gmail.com','') AS nim
                        from nilai d
                        INNER JOIN admin e ON d.id_admin = e.id_admin
                        WHERE d.id_periode = $id_periode
                        GROUP BY d.id_admin
                    )";
        }

        return $this->db->query($query)->result_array();
    }


}