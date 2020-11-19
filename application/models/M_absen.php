<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_absen extends CI_Model
{
    public function getDataAbsen()
    {
        $this->db->select('*');
        $this->db->join('tbl_karyawan', 'tbl_karyawan.id_karyawan=tbl_absensi.id_karyawan', 'inner');
        $this->db->join('tbl_jabatan', 'tbl_jabatan.id_jabatan=tbl_karyawan.id_jabatan', 'inner');
        return $this->db->get('tbl_absensi');
    }
}

/* End of file ModelName.php */
