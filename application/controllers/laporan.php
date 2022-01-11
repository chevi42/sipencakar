<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        $this->load->model('laporan_model');
        $this->load->model('admin_model');
        $this->load->model('karyawan_model');
        // $this->load->model('mahasiswa_model');
        $this->load->model('periode_model');
        $this->load->model('nilai_model');
    }

    public function cetak_penilaian()
    {
        $data['admin'] = $this->laporan_model->admin_Active();
        $data['title'] = 'Laporan Kinerja Kayawan - cetak Penilaian';
        $data['position'] = 'Cetak Penilaian';
        $data['nama_karyawan'] = $this->karyawan_model->get_AllKaryawan();
        $data['periode'] = $this->periode_model->get_AllPeriode();
        $data['semester'] = [ '1', '2','3','4','5','6','7','8'];
        $data['laporan']= array();

        $this->load->view('template/header', $data);
        $this->load->view('laporan/cetak_penilaian', $data);
        $this->load->view('template/footer');
    }

    function laporan_print($nama_karyawan, $periode, $semester){
        $datakaryawan = $this->karyawan_model->get_ById($nama_karyawan);
        $datanilai = $this->nilai_model->get_NilaiKaryawan($nama_karyawan, $periode);
        $id_admin = '';

        if(count($datanilai)>0){
            foreach($datanilai as $key){
                $row = array();
                $id_admin = $key['id_admin'];

                $row['id_karyawan'] = $key['id_karyawan'];
                $row['id_kriteria'] = $key['id_kriteria'];
                $row['nilai_karyawan'] = $key['nilai_karyawan'];

                if($key['id_kriteria'] == 1){
                    if($key['nilai_karyawan'] == 1){
                        $row['C1_1'] = '&#10003';
                        $row['C1_2'] = '';
                        $row['C1_3'] = '';
                        $row['C1_4'] = '';
                    }else if($key['nilai_karyawan'] == 2){
                        $row['C1_1'] = '';
                        $row['C1_2'] = '&#10003';
                        $row['C1_3'] = '';
                        $row['C1_4'] = '';
                    }else if($key['nilai_karyawan'] == 3){
                        $row['C1_1'] = '';
                        $row['C1_2'] = '';
                        $row['C1_3'] = '&#10003';
                        $row['C1_4'] = '';
                    }else if($key['nilai_karyawan'] == 4){
                        $row['C1_1'] = '';
                        $row['C1_2'] = '';
                        $row['C1_3'] = '';
                        $row['C1_4'] = '&#10003';
                    }else{
                        $row['C1_1'] = '';
                        $row['C1_2'] = '';
                        $row['C1_3'] = '';
                        $row['C1_4'] = '';
                    }
                }else if($key['id_kriteria'] == 2){
                    if($key['nilai_karyawan'] == 1){
                        $row['C2_1'] = '&#10003';
                        $row['C2_2'] = '';
                        $row['C2_3'] = '';
                        $row['C2_4'] = '';
                    }else if($key['nilai_karyawan'] == 2){
                        $row['C2_1'] = '';
                        $row['C2_2'] = '&#10003';
                        $row['C2_3'] = '';
                        $row['C2_4'] = '';
                    }else if($key['nilai_karyawan'] == 3){
                        $row['C2_1'] = '';
                        $row['C2_2'] = '';
                        $row['C2_3'] = '&#10003';
                        $row['C2_4'] = '';
                    }else if($key['nilai_karyawan'] == 4){
                        $row['C2_1'] = '';
                        $row['C2_2'] = '';
                        $row['C2_3'] = '';
                        $row['C2_4'] = '&#10003';
                    }else{
                        $row['C2_1'] = '';
                        $row['C2_2'] = '';
                        $row['C2_3'] = '';
                        $row['C2_4'] = '';
                    }
                }else if($key['id_kriteria'] == 3){
                    if($key['nilai_karyawan'] == 1){
                        $row['C3_1'] == '&#10003';
                        $row['C3_2'] = '';
                        $row['C3_3'] = '';
                        $row['C3_4'] = '';
                    }else if($key['nilai_karyawan'] == 2){
                        $row['C3_1'] = '';
                        $row['C3_2'] = '&#10003';
                        $row['C3_3'] = '';
                        $row['C3_4'] = '';
                    }else if($key['nilai_karyawan'] == 3){
                        $row['C3_1'] = '';
                        $row['C3_2'] = '';
                        $row['C3_3'] = '&#10003';
                        $row['C3_4'] = '';
                    }else if($key['nilai_karyawan'] == 4){
                        $row['C3_1'] = '';
                        $row['C3_2'] = '';
                        $row['C3_3'] = '';
                        $row['C3_4'] = '&#10003';
                    }else{
                        $row['C3_1'] = '';
                        $row['C3_2'] = '';
                        $row['C3_3'] = '';
                        $row['C3_4'] = '';
                    }
                }else if($key['id_kriteria'] == 4){
                    if($key['nilai_karyawan'] == 1){
                        $row['C4_1'] = '&#10003';
                        $row['C4_2'] = '';
                        $row['C4_3'] = '';
                        $row['C4_4'] = '';
                    }else if($key['nilai_karyawan'] == 2){
                        $row['C4_1'] = '';
                        $row['C4_2'] = '&#10003';
                        $row['C4_3'] = '';
                        $row['C4_4'] = '';
                    }else if($key['nilai_karyawan'] == 3){
                        $row['C4_1'] = '';
                        $row['C4_2'] = '';
                        $row['C4_3'] = '&#10003';
                        $row['C4_4'] = '';
                    }else if($key['nilai_karyawan'] == 4){
                        $row['C4_1'] = '';
                        $row['C4_2'] = '';
                        $row['C4_3'] = '';
                        $row['C4_4'] = '&#10003';
                    }else{
                        $row['C4_1'] = '';
                        $row['C4_2'] = '';
                        $row['C4_3'] = '';
                        $row['C4_4'] = '';
                    }
                }else if($key['id_kriteria'] == 5){
                    if($key['nilai_karyawan'] == 1){
                        $row['C5_1'] = '&#10003';
                        $row['C5_2'] = '';
                        $row['C5_3'] = '';
                        $row['C5_4'] = '';
                    }else if($key['nilai_karyawan'] == 2){
                        $row['C5_1'] = '';
                        $row['C5_2'] = '&#10003';
                        $row['C5_3'] = '';
                        $row['C5_4'] = '';
                    }else if($key['nilai_karyawan'] == 3){
                        $row['C5_1'] = '';
                        $row['C5_2'] = '';
                        $row['C5_3'] = '&#10003';
                        $row['C5_4'] = '';
                    }else if($key['nilai_karyawan'] == 4){
                        $row['C5_1'] = '';
                        $row['C5_2'] = '';
                        $row['C5_3'] = '';
                        $row['C5_4'] = '&#10003';
                    }else{
                        $row['C5_1'] = '';
                        $row['C5_2'] = '';
                        $row['C5_3'] = '';
                        $row['C5_4'] = '';
                    }
                }else if($key['id_kriteria'] == 6){
                    if($key['nilai_karyawan'] == 1){
                        $row['C6_1'] = '&#10003';
                        $row['C6_2'] = '';
                        $row['C6_3'] = '';
                        $row['C6_4'] = '';
                    }else if($key['nilai_karyawan'] == 2){
                        $row['C6_1'] = '';
                        $row['C6_2'] = '&#10003';
                        $row['C6_3'] = '';
                        $row['C6_4'] = '';
                    }else if($key['nilai_karyawan'] == 3){
                        $row['C6_1'] = '';
                        $row['C6_2'] = '';
                        $row['C6_3'] = '&#10003';
                        $row['C6_4'] = '';
                    }else if($key['nilai_karyawan'] == 4){
                        $row['C6_1'] = '';
                        $row['C6_2'] = '';
                        $row['C6_3'] = '';
                        $row['C6_4'] = '&#10003';
                    }else{
                        $row['C6_1'] = '';
                        $row['C6_2'] = '';
                        $row['C6_3'] = '';
                        $row['C6_4'] = '';
                    }
                }else if($key['id_kriteria'] == 7){
                    if($key['nilai_karyawan'] == 1){
                        $row['C7_1'] = '&#10003';
                        $row['C7_2'] = '';
                        $row['C7_3'] = '';
                        $row['C7_4'] = '';
                    }else if($key['nilai_karyawan'] == 2){
                        $row['C7_1'] = '';
                        $row['C7_2'] = '&#10003';
                        $row['C7_3'] = '';
                        $row['C7_4'] = '';
                    }else if($key['nilai_karyawan'] == 3){
                        $row['C7_1'] = '';
                        $row['C7_2'] = '';
                        $row['C7_3'] = '&#10003';
                        $row['C7_4'] = '';
                    }else if($key['nilai_karyawan'] == 4){
                        $row['C7_1'] = '';
                        $row['C7_2'] = '';
                        $row['C7_3'] = '';
                        $row['C7_4'] = '&#10003';
                    }else{
                        $row['C7_1'] = '';
                        $row['C7_2'] = '';
                        $row['C7_3'] = '';
                        $row['C7_4'] = '';
                    }
                }else if($key['id_kriteria'] == 8){
                    if($key['nilai_karyawan'] == 1){
                        $row['C8_1'] = '&#10003';
                        $row['C8_2'] = '';
                        $row['C8_3'] = '';
                        $row['C8_4'] = '';
                    }else if($key['nilai_karyawan'] == 2){
                        $row['C8_1'] = '';
                        $row['C8_2'] = '&#10003';
                        $row['C8_3'] = '';
                        $row['C8_4'] = '';
                    }else if($key['nilai_karyawan'] == 3){
                        $row['C8_1'] = '';
                        $row['C8_2'] = '';
                        $row['C8_3'] = '&#10003';
                        $row['C8_4'] = '';
                    }else if($key['nilai_karyawan'] == 4){
                        $row['C8_1'] = '';
                        $row['C8_2'] = '';
                        $row['C8_3'] == '';
                        $row['C8_4'] = '&#10003';
                    }else{
                        $row['C8_1'] = '';
                        $row['C8_2'] = '';
                        $row['C8_3'] = '';
                        $row['C8_4'] = '';
                    }
                }else if($key['id_kriteria'] == 9){
                    if($key['nilai_karyawan'] == 1){
                        $row['C9_1'] = '&#10003';
                        $row['C9_2'] = '';
                        $row['C9_3'] = '';
                        $row['C9_4'] = '';
                    }else if($key['nilai_karyawan'] == 2){
                        $row['C9_1'] = '';
                        $row['C9_2'] = '&#10003';
                        $row['C9_3'] = '';
                        $row['C9_4'] = '';
                    }else if($key['nilai_karyawan'] == 3){
                        $row['C9_1'] = '';
                        $row['C9_2'] = '';
                        $row['C9_3'] = '&#10003';
                        $row['C9_4'] = '';
                    }else if($key['nilai_karyawan'] == 4){
                        $row['C9_1'] = '';
                        $row['C9_2'] = '';
                        $row['C9_3'] = '';
                        $row['C9_4'] = '&#10003';
                    }else{
                        $row['C9_1'] = '';
                        $row['C9_2'] = '';
                        $row['C9_3'] = '';
                        $row['C9_4'] = '';
                    }
                }else if($key['id_kriteria'] == 10){
                    if($key['nilai_karyawan'] == 1){
                        $row['C10_1'] = '&#10003';
                        $row['C10_2'] = '';
                        $row['C10_3'] = '';
                        $row['C10_4'] = '';
                    }else if($key['nilai_karyawan'] == 2){
                        $row['C10_1'] = '';
                        $row['C10_2'] = '&#10003';
                        $row['C10_3'] = '';
                        $row['C10_4'] = '';
                    }else if($key['nilai_karyawan'] == 3){
                        $row['C10_1'] = '';
                        $row['C10_2'] = '';
                        $row['C10_3'] = '&#10003';
                        $row['C10_4'] = '';
                    }else if($key['nilai_karyawan'] == 4){
                        $row['C10_1'] = '';
                        $row['C10_2'] = '';
                        $row['C10_3'] = '';
                        $row['C10_4'] = '&#10003';
                    }else{
                        $row['C10_1'] = '';
                        $row['C10_2'] = '';
                        $row['C10_3'] = '';
                        $row['C10_4'] = '';
                    }
                }

                $data['nilai'][] = $row;  
            }        
        }else{
            $row = array();
            $row['C1_1'] = '';
            $row['C1_2'] = '';
            $row['C1_3'] = '';
            $row['C1_4'] = '';
            $data['nilai'][] = $row;

            $row = array();
            $row['C2_1'] = '';
            $row['C2_2'] = '';
            $row['C2_3'] = '';
            $row['C2_4'] = '';
            $data['nilai'][] = $row;

            $row = array();
            $row['C3_1'] = '';
            $row['C3_2'] = '';
            $row['C3_3'] = '';
            $row['C3_4'] = '';
            $data['nilai'][] = $row;  

            $row = array();
            $row['C4_1'] = '';
            $row['C4_2'] = '';
            $row['C4_3'] = '';
            $row['C4_4'] = '';
            $data['nilai'][] = $row;  

            $row = array();
            $row['C5_1'] = '';
            $row['C5_2'] = '';
            $row['C5_3'] = '';
            $row['C5_4'] = '';
            $data['nilai'][] = $row;  

            $row = array();
            $row['C6_1'] = '';
            $row['C6_2'] = '';
            $row['C6_3'] = '';
            $row['C6_4'] = '';
            $data['nilai'][] = $row;  

            $row = array();
            $row['C7_1'] = '';
            $row['C7_2'] = '';
            $row['C7_3'] = '';
            $row['C7_4'] = '';
            $data['nilai'][] = $row;  

            $row = array();
            $row['C8_1'] = '';
            $row['C8_2'] = '';
            $row['C8_3'] = '';
            $row['C8_4'] = '';
            $data['nilai'][] = $row;  

            $row = array();
            $row['C9_1'] = '';
            $row['C9_2'] = '';
            $row['C9_3'] = '';
            $row['C9_4'] = '';
            $data['nilai'][] = $row;  

            $row = array();
            $row['C10_1'] = '';
            $row['C10_2'] = '';
            $row['C10_3'] = '';
            $row['C10_4'] = '';
            $data['nilai'][] = $row;  
        }
        $data['karyawan'] = $datakaryawan;

        $datapengguna = $this->admin_model->get_ById($id_admin);
        $data['admin'] = $datapengguna;
        $this->load->view('laporan/laporan_print', $data);
    }


    public function laporan_penilai($params)
    {
        If($params=='karyawan'){
            $title = 'Rekap data dinilai';
            $data['title'] = $title;
            $data['categori'] = [ 'Belum dinilai', 'Sudah dinilai'];
            $data['parameter']= 'karyawan';
        }else{
            $title = 'Rekap data penilai';
            $data['categori'] = [ 'Belum menilai', 'Sudah menilai'];
            $data['parameter']= 'mahasiswa';
        }

        $data['admin'] = $this->laporan_model->admin_Active();
        $data['title'] = 'Laporan Kinerja Kayawan - '.$title;
        $data['position'] = 'Laporan Rekap';
        $data['periode'] = $this->periode_model->get_AllPeriode();

        $this->load->view('template/header', $data);
        $this->load->view('laporan/laporan_rekap', $data);
        $this->load->view('template/footer');
    }

    function laporan_rekap_print($params, $periode, $category){
        if($params=='karyawan'){
            if($category=='Belum%20dinilai'){
                $data['title'] = 'Laporan Rekap Data';
                $data['title2'] = 'Belum Dinilai';
                $data['data'] = $this->laporan_model->getdinilai($periode,'0');
                $data['params'] = 'Kayawan';
                $this->load->view('laporan/laporan_rekap_print', $data);
            }else{
                
                // $data['title'] = 'Laporan Rekap Data';
                // $data['title2'] = 'Sudah Dinilai';
                // $data['data'] = $this->laporan_model->getdinilai($periode,'1');

                $selesai = 0;
                $x = 0;
                $tahun = $periode;
                
                $data['alternatif'] = $this->admin_model->get_Alternatif();

                $data['hasil'] = [];
                foreach ($data['alternatif'] as $a) {
                    $id_a = $a['id_alternatif'];
                    $data['total'] = $this->admin_model->jumlah($id_a, $tahun);
                    $jumlah = $data['total']['jumlah'];
                    $data['jumlah'][$x] = $jumlah;
                    $data['list'] = $this->admin_model->get_Karyawan($id_a, $tahun);
                    $data['hasil'] = array_merge($data['hasil'], $data['list']);

                    $selesai = $selesai + $jumlah;
                    $x = $x + 1;
                }

                $data['periode'] = $this->periode_model->get_ById($periode);
                $this->load->view('laporan/laporan_penilaian_print', $data);
            }

        }else{
            if($category=='Belum%20menilai'){
                $data['title'] = 'Laporan Rekap Data';
                $data['title2'] = 'Belum Menilai';
                $data['data'] = $this->laporan_model->getpenilai($periode,'0');
            }else{
                $data['title'] = 'Laporan Rekap Data';
                $data['title2'] = 'Sudah Menilai';
                $data['data'] = $this->laporan_model->getpenilai($periode,'1');
            }
            $data['params'] = 'Mahasiswa';

            $this->load->view('laporan/laporan_rekap_print', $data);
        }
    }


    public function laporan_penilai_karyawan()
    {
        $data['admin'] = $this->laporan_model->admin_Active();
        $data['title'] = 'Laporan Kinerja Kayawan - Laporan Penilaian';
        $data['position'] = 'Laporan Rekap';
        $data['periode'] = $this->periode_model->get_AllPeriode();

        $this->load->view('template/header', $data);
        $this->load->view('laporan/laporan_penilaian', $data);
        $this->load->view('template/footer');
    }

    function laporan_penilaian_print($params){
        $selesai = 0;
        $x = 0;
        $tahun = $params;
        
        $data['alternatif'] = $this->admin_model->get_Alternatif();

        $data['hasil'] = [];
        foreach ($data['alternatif'] as $a) {
            $id_a = $a['id_alternatif'];
            $data['total'] = $this->admin_model->jumlah($id_a, $tahun);
            $jumlah = $data['total']['jumlah'];
            $data['jumlah'][$x] = $jumlah;
            $data['list'] = $this->admin_model->get_Karyawan($id_a, $tahun);
            $data['hasil'] = array_merge($data['hasil'], $data['list']);
            $selesai = $selesai + $jumlah;
            $x = $x + 1;
        }

        $data['periode'] = $this->periode_model->get_ById($params);
        $this->load->view('laporan/laporan_penilaian_print', $data);
    }
}