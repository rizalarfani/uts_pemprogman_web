<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Absen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('data_login'))) {
            redirect('Login', 'refresh');
        }
        $this->load->model('M_absen');
    }
    public function index()
    {
        $data['isi'] = $this->M_absen->getDataAbsen()->result();
        $data['page'] = 'backend/absen';
        $this->load->view('Dashboard', $data, FALSE);
    }
    public function absen()
    {
        system('D:/Kuliah/Semester 4/Computer Vesion/UAS_COMVIS_KELOMPOK1/Face Detection haar/faces.py');
        // redirect('absen');
    }
}

/* End of file Controllername.php */
