<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
#    Simple Code By Pradana Industries By.bri_pebri     |
#=======================================================|
class Data_peserta extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_Data_peserta');
	}

	public function index()
	{
		$data = array(
			'title' 		=> "Data Peserta",
			'tampilData'    => $this->M_Data_peserta->tampilData(),
		);
		$this->load->view('_theme/atas', $data);
		$this->load->view('v_data_peserta', $data);
		$this->load->view('_theme/bawah', $data);
	}

	public function edit()
	{
		$this->M_Data_peserta->edit();
		$this->session->set_flashdata('notifikasi', '<div class="alert alert-success fade show" role="alert">
			<strong>Berhasil!</strong> Data berhasil di ubah!.
		</div>');

		redirect('data_peserta');
	}

	public function hapus()
	{
		$this->M_Data_peserta->hapus();
		$this->session->set_flashdata('notifikasi', '<div class="alert alert-success fade show" role="alert">
			<strong>Berhasil!</strong> Data berhasil di hapus!.
		</div>');

		redirect('data_peserta');
	}
}
