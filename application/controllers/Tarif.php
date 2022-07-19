<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tarif extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		isnt_login(function () {
			redirect(base_url('auth/login'));
		});
		
	}

	public function index()
	{
		$data = generate_page('Tarif', 'Tarif/index', 'Pegawai');

		$data_content['title_page'] = 'Tarif';
		$data['content'] = $this->load->view('partial/Tarif/Pegawai', $data_content, true);
		$this->load->view('V_Tarif', $data);
	}
}

	

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */