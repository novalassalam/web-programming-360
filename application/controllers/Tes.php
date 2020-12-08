<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

	function api(){
		     //get data dari model
		$this->load->model('M_user','user');
		$isi = $this->user->get();
        //masukkan data kedalam variabel
		$data['data'] = $isi;
        //deklarasi variabel array
		$response = array();
		$posts = array();
        //lopping data dari database
		foreach ($isi as $hasil)
		{
			$posts[] = array(
				"id"                 =>  $hasil->id_user,
				"nama"            =>  $hasil->nama_user,
				"email"      =>  $hasil->email_user,
				"kota"   =>  $hasil->nama_kota
				
			);
		}
		$response = $posts;
		header('Content-Type: application/json');
		echo json_encode($response,TRUE);

	}

}

/* End of file Tes.php */
/* Location: ./application/controllers/Tes.php */