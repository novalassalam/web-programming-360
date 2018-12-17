<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	function get(){
		// $this->db->select('kota.id_kota,user.nama_user');
		$this->db->join('kota', 'kota.id_kota = user.id_kota', 'inner');
		return $this->db->get('user')->result();
	}

	function get_kota(){
		return $this->db->get('kota')->result();
	}

	function delete($idnya){
		$this->db->where('id_user', $idnya);
		$this->db->delete('user');
		return ($this->db->affected_rows()) ? true : false ;
		
	}

	function get_satu_data($id){

		$this->db->join('kota', 'kota.id_kota = user.id_kota', 'inner');
		$this->db->where('user.id_user', $id);
		return $this->db->get('user')->row();
	}

} 

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */