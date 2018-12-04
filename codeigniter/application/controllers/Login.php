<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('Login');
	}

	public function proses()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->load->model('M_login');
		$this->M_login->cek_login($user,$pass);
	}

	function logout(){
		$this->session->sess_destroy($this->session->userdata('data_login'));
		redirect('Login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

