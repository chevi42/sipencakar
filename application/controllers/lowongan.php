<?php
defined('BASEPATH') or exit('No direct script access allowed');

class lowongan extends CI_Controller
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
        $this->load->model('lowongan_model');
    }

    public function index()
    {
        $data['admin'] = $this->lowongan_model->admin_Active();
        $data['title'] = 'SISPENCAKAR - Lowongan';
        $data['position'] = 'Lowongan';
        $data['lowongan'] = $this->lowongan_model->get_AllLowongan();
        $data['status'] = array('0', '1');

        $this->form_validation->set_rules('lowongan', 'Lowongan', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('lowongan/index', $data);
            $this->load->view('template/footer');
        } else {
            $this->lowongan_model->add();
            $this->session->set_flashdata('done', 'Data berhasil ditambah');
            redirect('lowongan');
        }
    }

    public function ubah($id)
    {
        $data['admin'] = $this->lowongan_model->admin_Active();
        $data['title'] = 'SISPENCAKAR - Lowongan';
        $data['position'] = 'Lowongan';
        $data['lowongan'] = $this->lowongan_model->get_ById($id);
        $data['status'] = array('0', '1');

        $this->form_validation->set_rules('lowongan', 'Lowongan', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('lowongan/ubah', $data);
            $this->load->view('template/footer');
        } else {
            $this->lowongan_model->edit($id);
            $this->session->set_flashdata('done', 'Data berhasil diubah');
            redirect('lowongan');
        }
    }

     public function hapus($id)
    {
        $this->lowongan_model->delete($id);
        $this->session->set_flashdata('done', 'Data berhasil dihapus');
        redirect('lowongan');
    }
}