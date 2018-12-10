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

	public function user(){
		$this->load->model('M_user','user');
		$data['isi']=$this->user->get();
		$data['page'] = 'backend/user';
		$this->load->view('Dashboard', $data, FALSE);
	}


	public function aksi($aksi){
		$this->load->model('M_user','user');
		if($aksi == 'delete'){
			$id= $this->input->get('id'); 
			$hasil = $this->user->delete($id);
			if($hasil){
				$this->session->set_flashdata('notif', '<div class="alert alert-success">sukses delete</div>');
				redirect('Welcome/user','refresh');
			} else{
				$this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal delete</div>');
				redirect('Welcome/user','refresh');
			}
		} else if($aksi == 'edit'){
			echo 'edit';
		} else if($aksi == 'view'){
			$id= $this->input->get('id'); 
			$data['isi'] = $this->user->get_satu_data($id);
			$data['page'] = 'backend/user_view';
			$this->load->view('Dashboard', $data, FALSE);
		} else {
			echo 'tambah';
		}
		
	}


	public function coba()
	{
		if ($this->uri->segment(3)=='tes') {
			echo 'test';
		} elseif($this->uri->segment(3)=='mie') {
			echo 'die';
		} else {
			echo 'wit';
		}
		
	}


	
}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */