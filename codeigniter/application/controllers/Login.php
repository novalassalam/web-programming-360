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
		$a = $this->M_login->cek_login($user,$pass);
		// echo $this->db->last_query();
		// var_dump($a);
		// die();
		if($a = 'valid'){
			
			redirect('Welcome','refresh');
		} else {

			$this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal login</div>');
			redirect('Login','refresh');
		
		}
	}

	function logout(){
		$this->session->sess_destroy($this->session->userdata('data_login'));
		redirect('Login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

