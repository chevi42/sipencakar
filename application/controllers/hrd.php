<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hrd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        if ($this->session->userdata('akses') != 'Administrator') {
            redirect('auth/blok');
        }
        $this->load->model('hrd_model');
    }


    public function index()
    {
        $data['admin'] = $this->hrd_model->admin_Active();
        $admin = $data['admin']['id_admin'];
        $data['title'] = 'Penilaian Kinerja Karyawan - HRD';
        $data['position'] = 'HRD';
        $data['hrd'] = $this->hrd_model->get_AllHRD();

        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama HRD', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('hrd/index', $data);
            $this->load->view('template/footer');
        } else {
            $this->hrd_model->add();
            $this->session->set_flashdata('done', 'Data berhasil ditambah');
            redirect('hrd');
        }
    }

     public function ubah($id)
    {
        $data['admin'] = $this->hrd_model->admin_Active();
        $data['title'] = 'Penilaian Kinerja Karyawan - HRD';
        $data['position'] = 'HRD';
        $data['hrd'] = $this->hrd_model->get_ById($id);

        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama HRD', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('hrd/ubah', $data);
            $this->load->view('template/footer');
        } else {
            $this->hrd_model->edit($id);
            $this->session->set_flashdata('done', 'Data berhasil diubah');
            redirect('hrd');
        }
    }

    public function hapus($id)
    {
        $this->hrd_model->delete($id);
        $this->session->set_flashdata('done', 'Data berhasil dihapus');
        redirect('hrd');
    }

}