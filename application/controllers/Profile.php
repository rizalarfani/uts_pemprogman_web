<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('data_login'))) {
            redirect('Login', 'refresh');
        }
        $this->load->model('M_profile', 'profile');
    }
    public function index()
    {
        $id_user = $this->input->get('id');
        $data['page'] = 'backend/v_profile';
        $data['isi'] = $this->profile->detail_profile($id_user);
        $this->load->view('Dashboard', $data, FALSE);
    }
    public function v_edit()
    {
        $id_user = $this->input->get('id_user');
        $data['page'] = 'backend/v_edit_profile';
        $data['isi'] = $this->profile->detail_profile($id_user);
        $data['kota'] = $this->profile->get_kota();
        $this->load->view('Dashboard', $data, FALSE);
    }
    public function edit_post()
    {
        $id_user = $this->input->get('id_user');
        $this->form_validation->set_rules('nama', "nama", "required|trim");
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        if ($this->form_validation->run() == TRUE) {
            if (empty($_POST['foto']['name'])) {
                $foto = $this->profile->detail_profile($id_user)->foto;
            } else {
                $get_detail = $this->profile->detail_profile($id_user);
                unlink('uploads/' . $get_detail->foto);
                $foto = $this->upload_foto();
            }
            $data = array(
                'email_user' => $this->input->post('email'),
                'nama_user' => $this->input->post('nama'),
                'id_kota' => $this->input->post('kota'),
                'foto' => $foto
            );
            $this->profile->update_user(['id_user' => $id_user], $data);
            $this->session->set_flashdata('notif', '<div class="alert alert-success">Berhasil edit user</div>');
            redirect('profile?id=' . $id_user);
        } else {
            $this->v_edit();
        }
    }

    public function edit_password()
    {
        if ($this->uri->segment(3) == "edit_password_post") {
            $id_user = $this->session->userdata('data_login')['log_id'];
            $this->form_validation->set_rules('password', 'password', 'trim|required');
            $this->form_validation->set_rules('konfirmasi_password', 'konfirmasi_password', 'trim|required|matches[password]');
            if ($this->form_validation->run() == true) {
                $data = [
                    'password_user' => md5($this->input->post('password'))
                ];
                $this->profile->update_user(['id_user' => $id_user], $data);
                $this->session->set_flashdata('notif', '<div class="alert alert-success">Berhasil Ganti Password </div>');
                redirect('profile?id=' . $id_user);
            } else {
                $data['page'] = 'backend/v_edit_password';
                $this->load->view('Dashboard', $data, FALSE);
            }
        } else {
            $data['page'] = 'backend/v_edit_password';
            $this->load->view('Dashboard', $data, FALSE);
        }
    }
    public function upload_foto()
    {
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size']  = '2042';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('upload_foto')) {
            $error = array('error' => $this->upload->display_errors());
        }
        return $this->upload->data('file_name');
    }
}

/* End of file Profile.php */
