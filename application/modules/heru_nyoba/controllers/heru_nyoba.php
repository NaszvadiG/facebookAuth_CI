<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class heru_nyoba extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('userData'))) {
			redirect(site_url());
			exit();
		}
	}

	public function index()
	{
		$data = $this->attribute();
		$data['content']	= 'content';
		$this->load->view('templates/index', $data);
	}

	public function attribute()
	{
		$data['userData']	= $this->session->userdata('userData');
		$data['attr']		= array(
								'nav_dashboard' => true,
								'breadcumb'		=> 'Dashboard');
		return $data;
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */