<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_wajah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('data_login'))) {
            redirect('Login', 'refresh');
        }
        $this->load->model('M_daftar_wajah');
    }

    public function index()
    {
        $data['isi'] = $this->M_daftar_wajah->get_daftar_wajah()->result();
        $data['page'] = 'backend/daftar_wajah';
        $this->load->view('Dashboard', $data, FALSE);
    }

    public function absen()
    {
        system('D:\Kuliah\Semester 5\Website\coba-pyton\python.py');
        redirect('daftar_wajah');
    }

    public function coba_cmd()
    {
        system("d:/Kuliah/Semester 5/Website/coba-pyton/python.py");
        redirect('daftar_wajah');
    }

    public function aksi($aksi)
    {
        if ($aksi == 'delete') {
            $id = $this->input->get('id');
            $hasil = $this->M_daftar_wajah->delete($id);
            if ($hasil) {
                $this->session->set_flashdata('notif', '<div class="alert alert-success">sukses delete</div>');
                redirect('daftar_wajah', 'refresh');
            } else {
                $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal delete</div>');
                redirect('daftar_wajah', 'refresh');
            }
        } else if ($aksi == 'edit') {
            $id = $this->input->get('id');
            if ($this->uri->segment(4) == 'proses') {
                $data = array(
                    'email_user' => $this->input->post('email'),
                    'nama_user' => $this->input->post('nama'),
                    'id_ruang' => $this->input->post('ruang'),
                );
                $this->db->where('id_user', $id);
                $hasil = $this->db->update('daftarwajah', $data);
                if ($hasil) {
                    $this->session->set_flashdata('notif', '<div class="alert alert-success">sukses update</div>');
                    redirect('Welcome/user', 'refresh');
                } else {
                    $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal update</div>');
                    redirect('Welcome/user', 'refresh');
                }
            } else {
                $data['isi'] = $this->user->get_satu_data($id);
                $data['ruang'] = $this->M_daftar_wajah->get_ruang();
                $data['page'] = 'backend/add_daftar_wajah';
                $this->load->view('Dashboard', $data, FALSE);
            }
        } else if ($aksi == 'view') {
            $id = $this->input->get('id');
            $data['isi'] = $this->M_daftar_wajah->get_satu_data($id);
            $data['page'] = 'backend/add_daftar_wajah';
            $this->load->view('Dashboard', $data, FALSE);
        } else if ($aksi == 'tambah') {
            if ($this->uri->segment(4) == 'proses') {
                $data = array(
                    'email_user' => $this->input->post('email'),
                    'nama_user' => $this->input->post('nama'),
                    'id_ruang' => $this->input->post('ruang'),
                );
                $hasil = $this->db->insert('daftarwajah', $data);
                if ($hasil) {
                    $this->session->set_flashdata('notif', '<div class="alert alert-success">sukses add</div>');
                    redirect('daftarwajah', 'refresh');
                } else {
                    $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal add</div>');
                    redirect('daftarwajah', 'refresh');
                }
            } else {
                $data['ruang'] = $this->M_daftar_wajah->get_ruang();
                $data['page'] = 'backend/add_daftar_wajah';
                $this->load->view('Dashboard', $data, FALSE);
            }
        }
    }
}

/* End of file Daftar_wajah.php */
