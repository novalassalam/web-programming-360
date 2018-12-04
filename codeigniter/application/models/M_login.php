<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function cek_login($u,$p){
		$data		= $this->db->get_where('user',array('email_user' => $u,'password_user' => MD5($p)))->result();
		if (count($data) === 1) {
			$login		=	array(
				'is_logged_in'	=> 	true,
				'log_username'	=>	$u,
				'log_id'		=>	$data[0]->id_user,
				'log_nama'		=>	$data[0]->nama_user
			);
			$this->session->set_userdata( 'data_login' , $login );
			redirect('Welcome','refresh');
		}
		else {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal login</div>');
			redirect('Login','refresh');
		}
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */