<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
#    Simple Code By Pradana Industries By.bri_pebri     |
#=======================================================|
class Pendaftaran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_Pendaftaran');
		$this->load->library('form_validation');
		$this->load->helper('security');
	}

	public function index()
	{
		$data = array(
			'title' 		=> "Formulir Pendaftaran",
		);

		$this->load->view('_theme/atas', $data);
		$this->load->view('v_pendaftaran', $data);
		$this->load->view('_theme/bawah', $data);
	}

	public function simpan()
	{
		//Cek Nomor HP Apakah Sudah Terdaftar Apa Belum
		$ceknohp = $this->input->post('no_hp');
		$sql = $this->db->query("SELECT no_hp FROM tbl_peserta where no_hp='$ceknohp'");
		$ceknohp = $sql->num_rows();

		if ($ceknohp > 0) {
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-danger fade show" role="alert">
					<strong>Gagal!</strong> Nomor handphone sudah terdaftar!.
				</div>');
			redirect('pendaftaran');
		} else {
			$this->M_Pendaftaran->simpan();
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success fade show" role="alert">
					<strong>Berhasil!</strong> Data pendaftaran di simpan.
				</div>');
			redirect('pendaftaran');
		}
	}
}
