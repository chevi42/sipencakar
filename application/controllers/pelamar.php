<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pelamar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('pelamar_model');
        $this->load->model('lowongan_model');
    }

    public function index()
    {
        $data['admin'] = $this->pelamar_model->admin_Active();
        $admin = $data['admin']['id_admin'];
        $data['title'] = 'SIPENCAKAR - Pelamar';
        $data['position'] = 'Pelamar';
        $data['pelamar'] = $this->pelamar_model->get_AllPelamar();
        $data['lowongan'] = $this->pelamar_model->get_lowongan();
        $data['pendidikan'] = ['S1', 'S2', 'S3'];

        $this->form_validation->set_rules('nama', 'Nama pelamar', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('lowongan', 'Lowongan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('pelamar/index', $data);
            $this->load->view('template/footer');
        } else {
            $this->pelamar_model->add();
            $this->session->set_flashdata('done', 'Data berhasil ditambah');
            redirect('pelamar');
        }
    }

    public function detail($id)
    {
        $data['admin'] = $this->pelamar_model->admin_Active();
        $data['title'] = 'SIPENCAKAR';
        $data['position'] = 'Pelamar';
        $data['pelamar'] = $this->pelamar_model->get_ById($id);
        $this->load->view('template/header', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id)
    {
        $data['admin'] = $this->pelamar_model->admin_Active();
        $data['title'] = 'SIPENCAKAR - Pelamar';
        $data['position'] = 'Pelamar';
        $data['pelamar'] = $this->pelamar_model->get_ById($id);
        $data['pendidikan'] = ['S1', 'S2', 'S3'];
        $data['penilai'] = $this->pelamar_model->get_Penilai();
        $data['lowongan'] = $this->pelamar_model->get_lowongan();

        $this->form_validation->set_rules('nama_pelamar', 'Nama Pelamar', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('id_lowongan', 'Lowongan', 'required|trim');
        //$this->form_validation->set_rules('departement', 'Departement', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('pelamar/ubah', $data);
            $this->load->view('template/footer');
        } else {
            $this->pelamar_model->edit($id);
            $this->session->set_flashdata('done', 'Data berhasil diubah');
            redirect('pelamar');
        }
    }

    public function hapus($id)
    {
        $this->pelamar_model->delete($id);
        $this->session->set_flashdata('done', 'Data berhasil dihapus');
        redirect('pelamar');
    }
}
