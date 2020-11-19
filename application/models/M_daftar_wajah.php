<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_daftar_wajah extends CI_Model
{
    public function get_daftar_wajah($id_wajah = null)
    {
        $this->db->select('daftarwajah.*,ruang.*');
        $this->db->join('ruang', 'daftarwajah.id_ruang=ruang.id_ruang', 'inner');
        if (!empty($id_wajah)) {
            $this->db->where('id_wajah', $id_wajah);
        }
        return $this->db->get('daftarwajah');
    }
    public function get_satu_data($id)
    {
        $this->db->select('*');
        $this->db->join('ruang', 'daftarwajah.id_ruang=ruang.id_ruang', 'inner');
        $this->db->where(['id_wajah' => $id]);
        return $this->db->get('daftarwajah')->row();
    }

    public function delete($id_wajah)
    {
        $this->db->where('id_wajah', $id_wajah);
        $this->db->delete('daftarwajah');
        return ($this->db->affected_rows()) ? true : false;
    }

    public function get_ruang()
    {
        return $this->db->get('ruang')->result();
    }
}
/* End of file M_daftar_wajah.php */
