<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
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
        $this->load->model('soal_model');
    }

    public function index()
    {
        $data['admin'] = $this->soal_model->admin_Active();
        $data['title'] = 'SISPENCAKAR - Soal';
        $data['position'] = 'Soal';
        $data['soal'] = $this->soal_model->get_AllSoal();

        $this->form_validation->set_rules('soal', 'Soal', 'required|trim');
        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim');
        $this->form_validation->set_rules('jawaban', 'Jawaban', 'required|trim');
        $this->form_validation->set_rules('option1', 'Option A', 'required|trim');
        $this->form_validation->set_rules('option2', 'Option B', 'required|trim');
        $this->form_validation->set_rules('option3', 'Option C', 'required|trim');
        $this->form_validation->set_rules('option4', 'Option D', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('soal/index', $data);
            $this->load->view('template/footer');
        } else {
            $this->soal_model->add();
            $this->session->set_flashdata('done', 'Data berhasil ditambah');
            redirect('soal');
        }
    }

    public function ubah($id)
    {
        $data['admin'] = $this->soal_model->admin_Active();
        $data['title'] = 'SISPENCAKAR - soal';
        $data['position'] = 'soal';
        $data['soal'] = $this->soal_model->get_ById($id);

        $this->form_validation->set_rules('soal', 'soal', 'required|trim');
        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim');
        $this->form_validation->set_rules('jawaban', 'Jawaban', 'required|trim');
        $this->form_validation->set_rules('option1', 'Option A', 'required|trim');
        $this->form_validation->set_rules('option2', 'Option B', 'required|trim');
        $this->form_validation->set_rules('option3', 'Option C', 'required|trim');
        $this->form_validation->set_rules('option4', 'Option D', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('soal/ubah', $data);
            $this->load->view('template/footer');
        } else {
            $this->soal_model->edit($id);
            $this->session->set_flashdata('done', 'Data berhasil diubah');
            redirect('soal');
        }
    }

     public function hapus($id)
    {
        $this->soal_model->delete($id);
        $this->session->set_flashdata('done', 'Data berhasil dihapus');
        redirect('soal');
    }
}
?>