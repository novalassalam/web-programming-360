<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

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

/* End of file Tes.php */
/* Location: ./application/controllers/Tes.php */