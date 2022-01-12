<?php
defined('BASEPATH') or exit('No direct script access allowed');

class psikotest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
       
        $this->load->model('psikotest_model');
        $this->load->model('pelamar_model');
        $this->load->model('nilai_model');
    }

    public function index()
    {
        $data['admin'] = $this->nilai_model->admin_Active();
        $admin = $data['admin']['id_admin'];
        $nama = $data['admin']['nama'];
        $email = $data['admin']['email'];
        $data['title'] = 'SIPENCAKAR - Psikotest';
        $data['position'] = 'Psikotest';

        $where = "nama_pelamar = '$nama'";
        
        $data['soal'] = $this->psikotest_model->getSoalTest();
        $data['pengguna'] = $this->psikotest_model->getPengguna($where);

        $this->load->view('template/header', $data);
        $this->load->view('psikotest/psikotest', $data);
        $this->load->view('template/footer');
    }

    public function simpan(){
        $soal= $this->psikotest_model->getSoalTest();
        
        $akumulasi = 0;
        $nilai_akumulasi = 0;
        for ($i = 0; $i < count($soal); $i++) {
            $jawaban_soal = $this->input->post($i + 1,TRUE);       
        
            if ($jawaban_soal == $soal[$i]['jawaban']) {
                $akumulasi = floatval($akumulasi) + 1;
                $nilai_akumulasi = floatval($nilai_akumulasi) + floatval($soal[$i]['bobot']);
            } else {
                $akumulasi = floatval($akumulasi);
                $nilai_akumulasi = floatval($nilai_akumulasi);
            }
        }

        $data = array(
            'id_pelamar'=> $this->input->post('id_pelamar',TRUE),
            'id_lowongan'=> $this->input->post('id_lowongan',TRUE),
            'jawab0'=> $this->input->post('1'),
            'jawab1'=> $this->input->post('2'),
            'jawab2'=> $this->input->post('3'),
            'jawab3'=> $this->input->post('4'),
            'jawab4'=> $this->input->post('5'),
            'jawab5'=> $this->input->post('6'),
            'jawab6'=> $this->input->post('7'),
            'jawab7'=> $this->input->post('8'),
            'jawab8'=> $this->input->post('9'),
            'jawab9'=> $this->input->post('10'),
            'nilai_akumulasi' => $nilai_akumulasi,
            'status' => 'SELESAI',
        );

        $insert = $this->psikotest_model->insertData($data);

        if ($insert) {
			$this->session->set_flashdata('done', 'Success, Save Psikotest');
			redirect('admin');
		} else {
			$this->session->set_flashdata('error', 'Success, Save Psikotest');
			redirect('psikotest');
		}
    
    }

    public function hasil()
    {
        $data['admin'] = $this->nilai_model->admin_Active();
        $admin = $data['admin']['id_admin'];
        $nama = $data['admin']['nama'];
        $email = $data['admin']['email'];
        $data['title'] = 'SIPENCAKAR - Hasil Psikotest';
        $data['position'] = 'Hasil Psikotest';
        

        $data['hasiltest'] = $this->psikotest_model->getHasilTest();

        $this->load->view('template/header', $data);
        $this->load->view('psikotest/hasil', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['admin'] = $this->nilai_model->admin_Active();
        $admin = $data['admin']['id_admin'];
        $nama = $data['admin']['nama'];
        $email = $data['admin']['email'];
        $data['title'] = 'SIPENCAKAR - Detail Psikotest';
        $data['position'] = 'Detail Psikotest';

        $where = "id_test = '$nama'";
        
        $data['hasiltest'] = $this->psikotest_model->getHasilTest();
        $data['soal'] = $this->psikotest_model->getSoalTest();
        $data['detailtest'] = $this->psikotest_model->getDetailTest($id);

        $this->load->view('template/header', $data);
        $this->load->view('psikotest/detail', $data);
        $this->load->view('template/footer');
    }
}