<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_jabatan extends CI_Model
{
    public function get_jabatan($id_jabatan = null)
    {
        $this->db->select('*');
        if (!empty($id_jabatan)) {
            $this->db->where('id_jabatan', $id_jabatan);
        }
        return $this->db->get('tbl_jabatan');
    }
    public function delete($id_jabatan)
    {
        $this->db->where('id_jabatan', $id_jabatan);
        $this->db->delete('tbl_jabatan');
        return ($this->db->affected_rows()) ? true : false;
    }
}

/* End of file M_jabatan.php */
