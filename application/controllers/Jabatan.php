<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('data_login'))) {
            redirect('Login', 'refresh');
        }
        $this->load->model('M_jabatan');
    }
    public function index()
    {
        $data['isi'] = $this->M_jabatan->get_jabatan()->result();
        $data['page'] = 'backend/jabatan';
        $this->load->view('Dashboard', $data, FALSE);
    }

    public function aksi($aksi)
    {
        if ($aksi == 'delete') {
            $id = $this->input->get('id');
            $hasil = $this->M_jabatan->delete($id);
            if ($hasil) {
                $this->session->set_flashdata('notif', '<div class="alert alert-success">sukses delete</div>');
                redirect('jabatan', 'refresh');
            } else {
                $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal delete</div>');
                redirect('jabatan', 'refresh');
            }
        } else if ($aksi == 'edit') {
            $id = $this->input->get('id');
            if ($this->uri->segment(4) == 'proses') {
                $data = array(
                    'nama' => $this->input->post('nama_jabatan'),
                    'id_jabatan' => $this->input->post('jabatan'),
                );
                $this->db->where('id_jabatan', $id);
                $hasil = $this->db->update('tbl_jabatan', $data);
                if ($hasil) {
                    $this->session->set_flashdata('notif', '<div class="alert alert-success">sukses update</div>');
                    redirect('jabatan', 'refresh');
                } else {
                    $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal update</div>');
                    redirect('jabatan', 'refresh');
                }
            } else {
                $data['isi'] = $this->M_jabatan->get_jabatan($id)->row();
                $data['page'] = 'backend/add_jabatan';
                $this->load->view('Dashboard', $data, FALSE);
            }
        } else if ($aksi == 'view') {
            $id = $this->input->get('id');
            $data['jabatan'] = $this->M_jabatan->get_jabatan($id)->row();
            $data['page'] = 'backend/jabatan_lihat';
            $this->load->view('Dashboard', $data, FALSE);
        } else if ($aksi == 'tambah') {
            if ($this->uri->segment(4) == 'proses') {
                $this->form_validation->set_rules('nama_jabatan', "nama", "required|trim");
                if ($this->form_validation->run() == TRUE) {
                    $data = array(
                        'id_jabatan' => $this->input->post('id_jabatan'),
                        'nama' => $this->input->post('nama_jabatan'),
                    );
                    $hasil = $this->db->insert('tbl_jabatan', $data);
                    if ($hasil) {
                        $this->session->set_flashdata('notif', '<div class="alert alert-success">sukses add</div>');
                        redirect('jabatan', 'refresh');
                    } else {
                        $this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal add</div>');
                        redirect('jabatan', 'refresh');
                    }
                } else {
                    $this->session->set_flashdata('notif', '<div class="alert alert-success">' . validation_errors() . '</div>');
                    redirect('jabatan', 'refresh');
                }
            } else {
                $data['jabatan'] = $this->M_jabatan->get_jabatan();
                $data['page'] = 'backend/add_jabatan';
                $this->load->view('Dashboard', $data, FALSE);
            }
        }
    }
}

/* End of file Karyawan.php */
