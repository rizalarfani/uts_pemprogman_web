<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_profile extends CI_Model
{
    public function detail_profile($id_user)
    {
        $this->db->select('user.*,kota.*');
        $this->db->join('kota', 'kota.id_kota=user.id_kota', 'inner');
        $this->db->where(['id_user' => $id_user]);
        return $this->db->get('user')->row();
    }
    public function get_kota()
    {
        return $this->db->get('kota')->result();
    }

    public function update_user($where, $data)
    {
        $this->db->where($where);
        $this->db->update('user', $data);
    }
}

/* End of file M_profile.php */
