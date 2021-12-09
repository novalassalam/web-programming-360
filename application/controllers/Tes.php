<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes extends CI_Controller
{

	function api()
	{ //API GET
		//get data dari model
		$this->load->model('M_user', 'user');
		$isi = $this->user->get();
		//masukkan data kedalam variabel
		$data['data'] = $isi;
		//deklarasi variabel array
		$response = array();
		$posts = array();
		//lopping data dari database
		foreach ($isi as $hasil) {
			$posts[] = array(
				"id"                 =>  $hasil->id_user,
				"nama"            =>  $hasil->nama_user,
				"email"      =>  $hasil->email_user,
				"kota"   =>  $hasil->nama_kota

			);
		}
		$response = $posts;
		header('Content-Type: application/json');
		echo json_encode($response, TRUE);
	}

	function api_post()
	{
		//api digunakan untuk post data api adalah jembatannya

		$varnama = $this->input->post('nama'); //variabel yg diperoleh dari hasil curl name harus sama
		$data = array('nama_kota' => $varnama); //lakukan seperti kode insert biasa
		$in = $this->db->insert('kota', $data);
		if ($in) {
			$response = array('status' => 'sukses'); //ketika status sukses bikin array
		} else {
			$response = array('status' => 'gagal');
		}
		header('Content-Type: application/json'); // output berformat json
		echo json_encode($response, TRUE);
	}

	function crul_post()
	{
		//crul digunakan untuk mengirim data dari luar aplikasi 
		$ch = curl_init();
		$postdata = array('nama' => $this->input->post('isian')); //diperoleh dari isian form name isian
		$url = base_url('Tes/api_post'); //var tujuan crul nya
		curl_setopt($ch, CURLOPT_URL, $url); //setting url tujuan dapet dari var
		curl_setopt($ch, CURLOPT_POST, 1); //kalo post diset 1 menandakan itu post
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata)); //masukan isian post tadi build dalam build query http header
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //kembalikan hasil 
		$response = curl_exec($ch); //eksekusi curl
		curl_close($ch);
		var_dump(json_decode($response, TRUE)); //tampilkan hasilnya
	}

	function eksekusi_post()
	{
		$data['page'] = 'api/api_post';
		$this->load->view('Dashboard', $data, FALSE);
	}

	public function api_delete()
	{

		$varid = $this->input->get('id'); //hasilnya dari get yg diperoleh cek url curl_delete
		$this->db->where('id_kota', (int)$varid);
		$del = $this->db->delete('kota');
		if ($del) {
			$response = array(
				'status' => 'sukses'
			);
		} else {
			$response = array('status' => 'gagal');
		}
		header('Content-Type: application/json');
		echo json_encode($response, TRUE);
	}

	public function curl_delete()
	{
		$url = base_url('Tes/api_delete?id=' . $this->input->post('idnya')); //delete gunakan metode get
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		var_dump(json_decode($result));
	}

	function eksekusi_delete()
	{
		$data['page'] = 'api/api_delete';
		$this->load->view('Dashboard', $data, FALSE);
	}

	public function api_put()
	{

		$varid = $this->input->post('id');
		$varnama = $this->input->post('nama');
		$data = array('nama_kota' => $varnama);
		$this->db->where('id_kota', $varid);
		$del = $this->db->update('kota', $data);
		if ($del) {
			$response = array('status' => 'sukses');
		} else {
			$response = array('status' => 'gagal');
		}
		header('Content-Type: application/json');
		echo json_encode($response, TRUE);
	}

	public function curl_put()
	{
		$url = base_url('Tes/api_put');
		$ch = curl_init();
		$postdata = array(
			'id' => $this->input->post('idnya'),
			'nama' => $this->input->post('namanya')
		);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-HTTP-Method-Override: PUT', 'Content-Type: application/x-www-form-urlencoded')); //heder untuk put berbeda dengan post 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata));
		$result = curl_exec($ch);
		curl_close($ch);
		var_dump(json_decode($result));
	}

	function eksekusi_put()
	{
		$data['page'] = 'api/api_put';
		$this->load->view('Dashboard', $data, FALSE);
	}

	function comvis_post()
	{
		date_default_timezone_set('Asia/Jakarta');
		//api digunakan untuk post data api adalah jembatannya
		$now = date('Y-m-d');
		$jam = date('H');
		$varnama = $this->input->post('nama'); //variabel yg diperoleh dari hasil curl name harus sama
		$varacc = $this->input->post('akurasi');
		$data = array('nama' => $varnama, 'akurasi' => $varacc); //lakukan seperti kode insert biasa
		$this->db->where('date(time)', $now);
		$this->db->where('hour(time)', $jam);

		$cek = $this->db->get('comvis')->row();
		$cek2 = $this->db->last_query();
		$in = false;
		if ($cek == false) {
			$in = $this->db->insert('comvis', $data);
		}
		if ($in) {
			$response = array(
				'status' => 'sukses'
			); //ketika status sukses bikin array
		} else {
			$response = array('status' => 'sudah ada data');
		}
		header('Content-Type: application/json'); // output berformat json
		echo json_encode($response, TRUE);
	}
}

/* End of file Tes.php */
/* Location: ./application/controllers/Tes.php */