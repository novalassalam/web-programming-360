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
			$id= $this->input->get('id');
			if ($this->uri->segment(4) == 'proses') {
				$data = array('email_user' => $this->input->post('email'), 
					'nama_user' => $this->input->post('nama'),
					'id_kota' => $this->input->post('kota'),
					'password_user'=>md5('welcome')
				);
				$this->db->where('id_user', $id);
				$hasil = $this->db->update('user', $data);
				if($hasil){
					$this->session->set_flashdata('notif', '<div class="alert alert-success">sukses update</div>');
					redirect('Welcome/user','refresh');
				} else{
					$this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal update</div>');
					redirect('Welcome/user','refresh');
				}
			} else {
				$this->load->model('M_user','user');
				$data['isi'] = $this->user->get_satu_data($id);
				$data['kota'] = $this->user->get_kota();
				$data['page'] = 'backend/add_user';
				$this->load->view('Dashboard', $data, FALSE);
			}
			
		} else if($aksi == 'view'){
			$id= $this->input->get('id'); 
			$data['isi'] = $this->user->get_satu_data($id);
			$data['page'] = 'backend/user_view';
			$this->load->view('Dashboard', $data, FALSE);
		} else if($aksi =='tambah') {
			if ($this->uri->segment(4) == 'proses') {
				$data = array('email_user' => $this->input->post('email'), 
					'nama_user' => $this->input->post('nama'),
					'id_kota' => $this->input->post('kota'),
					'password_user'=>md5('welcome')
				);
				$hasil = $this->db->insert('user', $data);
				if($hasil){
					$this->session->set_flashdata('notif', '<div class="alert alert-success">sukses add</div>');
					redirect('Welcome/user','refresh');
				} else{
					$this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal add</div>');
					redirect('Welcome/user','refresh');
				}
			} else {
				$this->load->model('M_user','user');
				$data['kota'] = $this->user->get_kota();
				$data['page'] = 'backend/add_user';
				$this->load->view('Dashboard', $data, FALSE);
			}
			
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