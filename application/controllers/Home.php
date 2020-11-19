<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_karyawan');
        $data['title'] = "Halaman Frontend";
        $data['isi'] = $this->M_karyawan->get_karyawan()->result();
        $data['page'] = 'frontend/home';
        $this->load->view('frontend/template', $data);
    }
}
/* End of file Home.php */
