<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('data_login'))) {
            redirect('Login', 'refresh');
        }
        $this->load->model('M_karyawan');
    }
    public function index()
    {
        $data['isi'] = $this->M_karyawan->get_karyawan()->result();
        $data['page'] = 'backend/karyawan';
        $this->load->view('Dashboard', $data, FALSE);
    }

    public function aksi($aksi)
    {
        if ($aksi == 'delete') {
            $id = $this->input->get('id');
            $hasil = $this->M_karyawan->delete($id);
            if ($hasil) {
                $this->session->set_flashdata('notif', '<div class="alert alert-success">sukses delete</div>');
                redirect('karyawan', 'refresh');
            } else {
                $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal delete</div>');
                redirect('karyawan', 'refresh');
            }
        } else if ($aksi == 'edit') {
            $id = $this->input->get('id');
            $this->form_validation->set_rules('name_karyawan', 'nama_karyawan', 'trim|required');
            $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
            if ($this->form_validation->run() == true) {
                if ($this->uri->segment(4) == 'proses') {
                    $data = array(
                        'name_karyawan' => $this->input->post('name_karyawan'),
                        'id_jabatan' => $this->input->post('jabatan'),
                    );
                    $this->db->where('id_karyawan', $id);
                    $hasil = $this->db->update('tbl_karyawan', $data);
                    if ($hasil) {
                        $this->session->set_flashdata('notif', '<div class="alert alert-success">sukses update</div>');
                        redirect('karyawan', 'refresh');
                    } else {
                        $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal update</div>');
                        redirect('karyawan', 'refresh');
                    }
                } else {
                    $data['isi'] = $this->M_karyawan->get_karyawan($id)->row();
                    $data['jabatan'] =  $this->M_karyawan->get_jabatan();
                    $data['page'] = 'backend/add_karyawan';
                    $this->load->view('Dashboard', $data, FALSE);
                }
            } else {
                $data['isi'] = $this->M_karyawan->get_karyawan($id)->row();
                $data['jabatan'] =  $this->M_karyawan->get_jabatan();
                $data['page'] = 'backend/add_karyawan';
                $this->load->view('Dashboard', $data, FALSE);
            }
        } else if ($aksi == 'view') {
            $id = $this->input->get('id');
            $data['isi'] = $this->M_karyawan->get_karyawan($id)->row();
            $data['page'] = 'backend/karyawan_lihat';
            $this->load->view('Dashboard', $data, FALSE);
        } else if ($aksi == 'tambah') {
            $this->form_validation->set_rules('name_karyawan', 'nama_karyawan', 'trim|required');
            $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
            if ($this->form_validation->run() == true) {
                if ($this->uri->segment(4) == 'proses') {
                    $data = array(
                        'name_karyawan' => $this->input->post('name_karyawan'),
                        'id_jabatan' => $this->input->post('jabatan'),
                    );
                    $hasil = $this->db->insert('tbl_karyawan', $data);
                    if ($hasil) {
                        $this->session->set_flashdata('notif', '<div class="alert alert-success">sukses add</div>');
                        redirect('karyawan', 'refresh');
                    } else {
                        $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal add</div>');
                        redirect('karyawan', 'refresh');
                    }
                } else {
                    $data['jabatan'] = $this->M_karyawan->get_jabatan();
                    $data['page'] = 'backend/add_karyawan';
                    $this->load->view('Dashboard', $data, FALSE);
                }
            } else {
                $data['jabatan'] = $this->M_karyawan->get_jabatan();
                $data['page'] = 'backend/add_karyawan';
                $this->load->view('Dashboard', $data, FALSE);
            }
        }
    }
}

/* End of file Karyawan.php */
