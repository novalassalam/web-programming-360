<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
{
	parent::__construct();
	if (empty($this->session->userdata('data_login'))) {
			redirect('Login','refresh');
		}
	}

	

	public function index()
	{
		$data['page'] = 'Home';
		$this->load->view('Dashboard', $data, FALSE);
	}

	

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */