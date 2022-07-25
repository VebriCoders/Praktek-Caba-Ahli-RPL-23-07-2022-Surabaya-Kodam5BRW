<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
#    Simple Code By Pradana Industries By.bri_pebri     |
#=======================================================|
class M_Pendaftaran extends CI_Model
{
    private $_table = "tbl_peserta";

    function simpan()
    {
        $data = [
            'no_hp' => $this->input->post('no_hp'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'agama' => $this->input->post('agama'),
            'created_on' => date('Y-m-d H:i:s'),
        ];
        $data = $this->security->xss_clean($data);
        $this->db->insert($this->_table, $data);
    }
}
