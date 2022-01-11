<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('admin_model');
        $this->load->model('psikotest_model');
        $this->load->model('pelamar_model');
    }

    public function index(){
        $data['aktif'] = $this->admin_model->count_Pelamar();
        $data['admin'] = $this->admin_model->admin_Active();
        $data['title'] = 'Penilaian Kinerja Karyawan';
        $data['position'] = 'Halaman Utama';
        $data['loker'] = $this->admin_model->count_Lowongan();
        $data['hrd'] = $this->admin_model->count_HRD();
        $data['pelamar'] = $this->pelamar_model->get_AllPelamar();
        $data['lowongan'] = $this->pelamar_model->get_lowongan();

        $nama = $data['admin']['nama'];
        $email = $data['admin']['email'];        
        $nama = "nama_pelamar = '$nama'";
        $email= "email='$email'";
        $data['soal'] = $this->psikotest_model->getSoalTest();
        $data['pengguna'] = $this->psikotest_model->getPengguna($nama);
        //$data['id_pelamar'] = $this->pelamar_model-> get_AllPelamar();
        
       //$id_pelamar= $data['pengguna']['id_pelamar'];
        //$where = "id_pelamar = '$id_pelamar'";
        //$hasil_test = $this->psikotest_model->getHasiTest($where);

       // if($data['admin']['akses'] == 'Pelamar') {
       //     $data['hasil_test'] = $hasil_test['jumlah'];
       // } else {
        //    $data['hasil_test'] = 0;
        //}

        //$data['karyawan'] = '1';
        //$data['departement'] = '';
        //$data['status'] = '0';

         $this->load->view('template/header', $data);
        $this->load->view('admin/index');
        $this->load->view('template/footer');
     }

    public function cetak()
    {
        $data['admin'] = $this->admin_model->admin_Active();
        $data['aktif'] = $this->admin_model->tahun_Active();
        $data['alternatif'] = $this->admin_model->get_Alternatif();
        $tahun = $data['aktif']['id_periode'];
        $this->load->library('dompdf_gen');

        $data['hasil'] = [];
        foreach ($data['alternatif'] as $a) {
            $id_a = $a['id_alternatif'];
            $data['list'] = $this->admin_model->get_Karyawan($id_a, $tahun);
            $data['hasil'] = array_merge($data['hasil'], $data['list']);
        }

        $this->load->view('admin/cetak_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_kinerja_karyawan_" . $data['aktif']['waktu'] . ".pdf", array('Attachment' => 0));
    }

    public function profil()
    {
        $data['admin'] = $this->admin_model->admin_Active();
        $data['title'] = 'Penilaian Kinerja Karyawan - Profil Admin';
        $data['position'] = 'Profil';
        $this->load->view('template/header', $data);
        $this->load->view('admin/profil', $data);
        $this->load->view('template/footer');
    }

    public function ubah_password()
    {
        $data['admin'] = $this->admin_model->admin_Active();
        $data['title'] = 'Penilaian Kinerja Karyawan - Profil Admin';
        $data['position'] = 'Profil';

        $this->form_validation->set_rules('oldpassword', 'Password', 'required|trim');
        $this->form_validation->set_rules('newpassword', 'Password', 'required|trim|min_length[3]|matches[confirmpassword]', [
            'matches' => 'Password dont match.',
            'min_length' => 'Password too short.'
        ]);
        $this->form_validation->set_rules('confirmpassword', 'Password', 'required|trim|matches[newpassword]');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/profil', $data);
            $this->load->view('template/footer');
        } else {
            $password = md5($this->input->post('oldpassword', true));
            $newpassword = md5($this->input->post('newpassword', true));
            $admin = $this->admin_model->admin_Active();
            if ($password == $admin['password']) {
                //password sesuai
                if ($password == $newpassword) {
                    $this->session->set_flashdata('fail', 'Password must different from current password');
                    redirect('admin/profil');
                } else {
                    $id = $admin['id_admin'];
                    $this->admin_model->edit_Password($id, $newpassword);
                    $this->session->set_flashdata('done', 'Password berhasil diubah');
                    redirect('admin/profil');
                }
            } else {
                $this->session->set_flashdata('fail', 'Wrong password');
                redirect('admin/profil');
            }
        }
    }

    public function ubah_data()
    {
        $data['admin'] = $this->admin_model->admin_Active();
        $data['title'] = 'Penilaian Kinerja Karyawan - Profil Admin';
        $data['position'] = 'Profil';

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/profil', $data);
            $this->load->view('template/footer');
        } else {
            //cek jika ada gambar
            $upload = $_FILES['image']['name'];

            if ($upload) {
                $config['upload_path'] = './assets/img/profil/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $old_image = $data['admin']['foto'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profil/' . $old_image);
                    }
                    $this->admin_model->image_Profile();
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->admin_model->edit_Data();
            $this->session->set_flashdata('done', 'Data berhasil diubah');
            redirect('admin/profil');
        }
    }


    //Pengguna

    public function pengguna()
    {
        if ($this->session->userdata('akses') == 'Administrator') {
            $data['admin'] = $this->admin_model->admin_Active();
            $data['title'] = 'Penilaian Kinerja Karyawan - Data Pengguna';
            $data['position'] = 'Pengguna';
            $data['pengguna'] = $this->admin_model->get_AllAdmin();
            $data['akses'] = ['Administrator', 'Pelamar', 'HRD'];

            $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]', [
                'is_unique' => 'This email already registered.'
            ]);
            $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[confirmpassword]', [
                'matches' => 'Password dont match.',
                'min_length' => 'Password too short.'
            ]);
            $this->form_validation->set_rules('confirmpassword', 'Password', 'required|trim|matches[password]');
            if ($this->form_validation->run() == false) {
                $this->load->view('template/header', $data);
                $this->load->view('admin/pengguna', $data);
                $this->load->view('template/footer');
            } else {
                $this->admin_model->insert_Pengguna();
                $this->session->set_flashdata('done', 'Data berhasil ditambah');
                redirect('admin/pengguna');
            }
        } else {
            redirect('auth/blok');
        }
    }

    public function hapus($id)
    {
        if ($this->session->userdata('akses') == 'Administrator') {
            $this->admin_model->delete_Pengguna($id);
            $this->session->set_flashdata('done', 'Data berhasil dihapus');
            redirect('admin/pengguna');
        } else {
            redirect('auth/blok');
        }
    }

    public function ubah($id)
    {
        if ($this->session->userdata('akses') == 'Administrator') {
            $this->admin_model->edit_Pengguna($id);
            $this->session->set_flashdata('done', 'Akses berhasil diubah');
            redirect('admin/pengguna');
        } else {
            redirect('auth/blok');
        }
    }

    public function reset($id)
    {
        if ($this->session->userdata('akses') == 'Administrator') {
            $data['admin'] = $this->admin_model->admin_Active();
            $data['title'] = 'SISPENCAKAR - Reset Password';
            $data['position'] = 'Reset Pasword';
            $data['pengguna'] = $this->admin_model->get_ById($id);

            $this->form_validation->set_rules('newpassword', 'Password', 'required|trim|min_length[3]|matches[confirmpassword]', [
                'matches' => 'Password dont match.',
                'min_length' => 'Password too short.'
            ]);
            $this->form_validation->set_rules('confirmpassword', 'Password', 'required|trim|matches[newpassword]');
            if ($this->form_validation->run() == false) {
                $this->load->view('template/header', $data);
                $this->load->view('admin/reset', $data);
                $this->load->view('template/footer');
            } else {
                $this->admin_model->reset();
                $this->session->set_flashdata('done', 'Password berhasil direset');
                redirect('admin/pengguna');
            }
        } else {
            redirect('auth/blok');
        }
    }
}
