<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
#    Simple Code By Pradana Industries By.bri_pebri     |
#=======================================================|
class M_Data_peserta extends CI_Model
{
    private $_table = "tbl_peserta";

    function tampilData()
    {
        $this->db->select('tbl_peserta.*,')
            ->from('tbl_peserta')
            ->order_by('tbl_peserta.id', 'DESC'); //ASC
        return $this->db->get();
    }

    function edit()
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
        $this->db->where('id', $this->input->post('query_id'))->update($this->_table, $data);
    }

    function hapus()
    {
        $this->db->where('id', $this->input->post('query_id'))->delete($this->_table);
    }
}
