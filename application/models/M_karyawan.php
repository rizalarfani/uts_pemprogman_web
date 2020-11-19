<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_karyawan extends CI_Model
{
    public function get_karyawan($id_karyawan = null)
    {
        $this->db->select('*');
        $this->db->join('tbl_jabatan', 'tbl_karyawan.id_jabatan=tbl_jabatan.id_jabatan', 'inner');
        if (!empty($id_karyawan)) {
            $this->db->where('id_karyawan', $id_karyawan);
        }
        return $this->db->get('tbl_karyawan');
    }
    public function get_jabatan()
    {
        return $this->db->get('tbl_jabatan')->result();
    }
    public function delete($id_karyawan)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->delete('tbl_karyawan');
        return ($this->db->affected_rows()) ? true : false;
    }
}

/* End of file M_karyawan.php */
