 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('nilai_model');
        $this->load->model('pelamar_model');
        $this->load->model('alternatif_model');
    }

    public function index()
    {
        $data['admin'] = $this->nilai_model->admin_Active();
        $admin = $data['admin']['id_admin'];
        $data['title'] = 'Penilaian Kinerja Karyawan - Nilai';
        $data['position'] = 'Nilai';
        $data['pelamar'] = $this->nilai_model->get_AllPelamar();

        $this->load->view('template/header', $data);
        $this->load->view('nilai/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_nilai()
    {
        $data['admin'] = $this->nilai_model->admin_Active();
        $admin = $data['admin']['id_admin'];
        $data['title'] = 'Penilaian Kinerja Karyawan - Nilai';
        $data['position'] = 'Nilai';

        $data['kriteria'] = $this->nilai_model->get_AllKriteria();

        $data['pelamar'] = $this->pelamar_model->get_AllPelamar();
        $alternatif = $this->alternatif_model->get_AllAlternatif();

        $row= array();
        foreach($alternatif as $key){
            $row['nama_alternatif'] = $key['nama_alternatif'];

            $data['alternatif'][] = $row;
        }

        $this->load->view('template/header', $data);
        $this->load->view('nilai/tambah', $data);
        $this->load->view('template/footer');
    }

    function insertnilai(){
        $msg = false;
        $id_karyawan = $this->input->post('id_karyawan',TRUE);
        $id_periode = $this->input->post('periode',TRUE);
        $id_admin = $this->input->post('id_admin',TRUE);

        // $getperiode = $this->periode_model->get_Bywaktu($periode);
        // $id_periode = $getperiode['id_periode'];

        $ceknilai_karyawan = $this->nilai_model->get_KaryawanById($id_periode, $id_karyawan);

        $response['data_nilai'] =  $ceknilai_karyawan;

        $C1 = $this->input->post('nilaiC1',TRUE);
        $C2 = $this->input->post('nilaiC2',TRUE);
        $C3 = $this->input->post('nilaiC3',TRUE);
        $C4 = $this->input->post('nilaiC4',TRUE);
        $C5 = $this->input->post('nilaiC5',TRUE);
        $C6 = $this->input->post('nilaiC6',TRUE);
        $C7 = $this->input->post('nilaiC7',TRUE);
        $C8 = $this->input->post('nilaiC8',TRUE);
        $C9 = $this->input->post('nilaiC9',TRUE);
        $C10 = $this->input->post('nilaiC10',TRUE);

        $dataC1=array(
                'id_kriteria'=> '1',
                'id_admin' =>$id_admin,
                'id_karyawan'=> $id_karyawan,
                'id_periode' => $id_periode,
                'nilai_karyawan'=> $C1
            );

        $dataC2=array(
                'id_kriteria'=> '2',
                'id_admin' =>$id_admin,
                'id_karyawan'=> $id_karyawan,
                'id_periode' => $id_periode,
                'nilai_karyawan'=> $C2
            );
        
        $dataC3=array(
                'id_kriteria'=> '3',
                'id_admin' =>$id_admin,
                'id_karyawan'=> $id_karyawan,
                'id_periode' => $id_periode,
                'nilai_karyawan'=> $C3
            );
        
        $dataC4=array(
                'id_kriteria'=> '4',
                'id_admin' =>$id_admin,
                'id_karyawan'=> $id_karyawan,
                'id_periode' => $id_periode,
                'nilai_karyawan'=> $C4
            );
        
        $dataC5=array(
                'id_kriteria'=> '5',
                'id_admin' =>$id_admin,
                'id_karyawan'=> $id_karyawan,
                'id_periode' => $id_periode,
                'nilai_karyawan'=> $C1
            );
        
        $dataC6=array(
                'id_kriteria'=> '6',
                'id_admin' =>$id_admin,
                'id_karyawan'=> $id_karyawan,
                'id_periode' => $id_periode,
                'nilai_karyawan'=> $C6
            );
        
        $dataC7=array(
                'id_kriteria'=> '7',
                'id_admin' =>$id_admin,
                'id_karyawan'=> $id_karyawan,
                'id_periode' => $id_periode,
                'nilai_karyawan'=> $C7
            );
        
        $dataC8=array(
                'id_kriteria'=> '8',
                'id_admin' =>$id_admin,
                'id_karyawan'=> $id_karyawan,
                'id_periode' => $id_periode,
                'nilai_karyawan'=> $C8
            );

        $dataC9=array(
                'id_kriteria'=> '9',
                'id_admin' =>$id_admin,
                'id_karyawan'=> $id_karyawan,
                'id_periode' => $id_periode,
                'nilai_karyawan'=> $C9
            );

        $dataC10=array(
                'id_kriteria'=> '10',
                'id_admin' =>$id_admin,
                'id_karyawan'=> $id_karyawan,
                'id_periode' => $id_periode,
                'nilai_karyawan'=> $C10
            );

        if((count($ceknilai_karyawan) <= 0)){

            $insertdata_C1 = $this->nilai_model->insertnilai($dataC1);
            $insertdata_C2 = $this->nilai_model->insertnilai($dataC2);
            $insertdata_C3 = $this->nilai_model->insertnilai($dataC3);
            $insertdata_C4 = $this->nilai_model->insertnilai($dataC4);
            $insertdata_C5 = $this->nilai_model->insertnilai($dataC5);
            $insertdata_C6 = $this->nilai_model->insertnilai($dataC6);
            $insertdata_C7 = $this->nilai_model->insertnilai($dataC7);
            $insertdata_C8 = $this->nilai_model->insertnilai($dataC8);
            $insertdata_C9 = $this->nilai_model->insertnilai($dataC9);
            $insertdata_C10 = $this->nilai_model->insertnilai($dataC10);
            $msg = true;
        }else{
            $msg = false;
        }


        if($msg == true){ 
            $response['status'] = true;
            $response['msg']= $this->session->set_flashdata('done', 'Data berhasil ditambahkan');
        }else{
            $response['status'] = false;
            $response['msg'] = $this->session->set_flashdata('done', 'Data gagal ditambahkan');  
        }
        
        echo json_encode($response);
    }

    public function ubah($id)
    {
        $data['admin'] = $this->nilai_model->admin_Active();
        $data['title'] = 'Penilaian Kinerja Karyawan - Nilai';
        $data['position'] = 'Nilai';
        $data['periode'] = $this->nilai_model->tahun_Active();
        $tahun = $data['periode']['id_periode'];
        $data['kriteria'] = $this->nilai_model->get_AllKriteria();
        $data['karyawan'] = $this->nilai_model->get_KaryawanById($tahun, $id);
        $alternatif = $this->alternatif_model->get_AllAlternatif();
        $data['nilai'] = [ '1', '2', '3', '4'];

        $row= array();
        foreach($alternatif as $key){
            $row['nama_alternatif'] = $key['nama_alternatif'];

            $data['alternatif'][] = $row;
        }


        $this->load->view('template/header', $data);
        $this->load->view('nilai/ubah', $data);
        $this->load->view('template/footer');
    }

    public function simpan($id)
    {
        $data['periode'] = $this->nilai_model->tahun_Active();
        $tahun = $data['periode']['id_periode'];
        $this->nilai_model->edit($id, $tahun);
        $this->session->set_flashdata('done', 'Data berhasil diubah');
        redirect('nilai');
    }

    public function detail($id)
    {
        $data['admin'] = $this->nilai_model->admin_Active();
        $data['title'] = 'Penilaian Kinerja Karyawan - Nilai';
        $data['position'] = 'Nilai';
        $data['periode'] = $this->nilai_model->tahun_Active();
        $tahun = $data['periode']['id_periode'];
        $data['kriteria'] = $this->nilai_model->get_AllKriteria();
        $data['karyawan'] = $this->nilai_model->get_KaryawanById($tahun, $id);
        $data['nilai'] = $this->nilai_model->get_AllNilai($id, $tahun);
        $data['alternatif'] = $this->nilai_model->get_Alternatif();
        $data['nilai_karyawan'] = $this->nilai_model->get_NilaiKaryawan($id, $tahun);

        if ($data['nilai'] == null) {
            $this->session->set_flashdata('belum', 'Penilaian belum dihitung');
        }

        $posisi = 0;
        foreach ($data['nilai_karyawan'] as $n) {
            $id_n = $n['id_nilai'];
            $data['detail'] = $this->nilai_model->detail($id_n);

            //Nilai A+
            if ($data['detail']['jenis'] == 'Benefit') {
                $data['aplus'] = $this->nilai_model->select_Max($id_n);
            } else {
                $data['aplus'] = $this->nilai_model->select_Min($id_n);
            }
            $data['A_plus'][$posisi] = $data['aplus'];


            //Nilai A-
            if ($data['detail']['jenis'] == 'Benefit') {
                $data['amin'] = $this->nilai_model->select_Min($id_n);
            } else {
                $data['amin'] = $this->nilai_model->select_Max($id_n);
            }
            $data['A_min'][$posisi] = $data['amin'];

            $posisi = $posisi + 1;
        }

        $x = 0;
        foreach ($data['alternatif'] as $a) {
            $id_a = $a['id_alternatif'];
            $y = 0;
            $dplus = 0;
            $dmin = 0;
            foreach ($data['nilai_karyawan'] as $n) {
                $id_n = $n['id_nilai'];
                $data['terbobot'] = $this->nilai_model->get_Nilai2($id_n, $id_a);
                $n_terbobot = $data['terbobot']['terbobot'];
                $aplus = $data['A_plus'][$y]['nilai_a'];
                $amin = $data['A_min'][$y]['nilai_a'];

                //Nilai D+
                $n_dplus = number_format(pow($aplus - $n_terbobot, 2), 3);
                $dplus = $dplus + $n_dplus;

                //Nilai D-
                $n_dmin = number_format(pow($n_terbobot - $amin, 2), 3);
                $dmin = $dmin + $n_dmin;

                $y = $y + 1;
            }
            $data['hasil'][$x]['0'] =  number_format(sqrt($dplus), 3);
            $data['hasil'][$x]['1'] =  number_format(sqrt($dmin), 3);

            //Nilai Preferensi
            if ($data['hasil'][$x]['0'] and $data['hasil'][$x]['1'] != 0) {
                $preferensi = number_format($data['hasil'][$x]['1'] / ($data['hasil'][$x]['1'] + $data['hasil'][$x]['0']), 3);
            } else {
                $preferensi = 0;
            }
            $data['hasil'][$x]['2'] =  $preferensi;

            //Cek sudah dihitung
            $data['isi'] = $this->nilai_model->select_nilai($id, $tahun, $id_a);
            if ($data['isi']['nilai_akhir'] == "0") {
                foreach ($data['nilai_karyawan'] as $n) {
                    $id_n = $n['id_nilai'];
                    $this->nilai_model->update_preferensi($preferensi, $id_n, $id_a);
                }
            }

            $x = $x + 1;
        }

        $data['nilai_akhir'] = $this->nilai_model->get_hasil($id, $tahun);
        $rank = $data['nilai_akhir']['id_alternatif'];
        $this->nilai_model->update_Rank($rank, $id, $tahun);
        $data['kinerja'] = $this->nilai_model->get_hasil($id, $tahun);

        $this->load->view('template/header', $data);
        $this->load->view('nilai/detail', $data);
        $this->load->view('template/footer');
    }

    public function hitung($id)
    {
        $data['periode'] = $this->nilai_model->tahun_Active();
        $tahun = $data['periode']['id_periode'];
        $data['kriteria'] = $this->nilai_model->get_AllKriteria();
        $data['alternatif'] = $this->nilai_model->get_Alternatif();

        // Cek apakah data kosong
        $data['nilai'] = $this->nilai_model->get_NilaiKaryawan($id, $tahun);

        foreach ($data['nilai'] as $n) {
            $nilai = $n['nilai_karyawan'];
            if ($nilai == "0") {   
                $this->session->set_flashdata('kosong', 'Isi data yang masih kosong');
                redirect('nilai/ubah/' . $id);
            }
        }

        // Cek apakah sudah dihitung
        $data['nilai'] = $this->nilai_model->get_AllNilai($id, $tahun);
        if ($data['nilai'] != null) {
            $this->session->set_flashdata('done', 'Data Sudah dihitung');
            redirect('nilai/detail/' . $id);
        }

        foreach ($data['alternatif'] as $a) {
            $id_a = $a['id_alternatif'];
            $data['nilai'] = $this->nilai_model->get_NilaiKaryawan($id, $tahun);

            foreach ($data['nilai'] as $n) {
                $id_n = $n['id_nilai'];
                $nilai = $n['nilai_karyawan'];
                if ($nilai == "4") {
                    $konversi = $a['nilai4'];
                } elseif ($nilai == "3") {
                    $konversi = $a['nilai3'];
                } elseif ($nilai == "2") {
                    $konversi = $a['nilai2'];
                } elseif ($nilai == "1") {
                    $konversi = $a['nilai1'];
                } else {
                    $this->session->set_flashdata('kosong', 'Isi data yang masih kosong');
                    redirect('nilai/ubah/' . $id);
                }
                $this->nilai_model->konversi($konversi, $id_n, $id_a);
            }
        }

        $data['nilai'] = $this->nilai_model->get_AllNilai($id, $tahun);
        foreach ($data['nilai'] as $n) {
            $id_n = $n['id_nilai'];
            // Nilai Pembagi
            $data['nilai'] = $this->nilai_model->get_Nilai($id_n);
            $pembagi = 0;
            foreach ($data['alternatif'] as $a) {
                $id_a = $a['id_alternatif'];
                $data['nilai2'] = $this->nilai_model->get_Nilai2($id_n, $id_a);
                $nilai = number_format(pow($data['nilai2']['nilai'], 2), 3);
                $pembagi = $pembagi + $nilai;
            }
            $pembagi = number_format(sqrt($pembagi), 6);

            //Nilai Normalisasi
            foreach ($data['alternatif'] as $a) {
                $id_a = $a['id_alternatif'];
                $data['nilai2'] = $this->nilai_model->get_Nilai2($id_n, $id_a);

                $nilai = $data['nilai2']['nilai'];
                $normalisasi = number_format($nilai / $pembagi, 3);
                $this->nilai_model->update_Normalisasi($normalisasi, $id_n, $id_a);
            }

            //Nilai Terbobot
            foreach ($data['alternatif'] as $a) {
                $id_a = $a['id_alternatif'];
                $data['nilai2'] = $this->nilai_model->get_Nilai2($id_n, $id_a);
                $n_normalisasi = $data['nilai2']['normalisasi'];
                $data['detail'] = $this->nilai_model->detail($id_n);
                $bobot = $data['detail']['bobot'];
                $terbobot = number_format($n_normalisasi * $bobot, 3);
                $this->nilai_model->update_Terbobot($terbobot, $id_n, $id_a);
            }
        }

        $this->session->set_flashdata('done', 'Data Berhasil dihitung');
        redirect('nilai/detail/' . $id);
    }
}
