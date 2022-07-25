<?php
defined('BASEPATH') or exit('No direct script access allowed');
#=======================================================|
#    Simple Code By Pradana Industries By.bri_pebri     |
#=======================================================|
class Home extends CI_Controller
{
	public function index()
	{
		$data = array(
			'title' 		=> "Penerimaan Anggota TNI-AD",
		);

		$this->load->view('_theme/atas', $data);
		$this->load->view('v_home', $data);
		$this->load->view('_theme/bawah', $data);
	}
}
