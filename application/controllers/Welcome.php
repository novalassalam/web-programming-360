<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{



	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('data_login'))) {
			redirect('Login', 'refresh');
		}
	}



	public function index()
	{
		$this->load->model('M_dashboard'); //load dulu modelnya
		$data['jml_user'] = $this->M_dashboard->total_user();
		$data['jml_kota'] = $this->M_dashboard->total_kota();
		$data['jml_pria'] = $this->M_dashboard->total_pria();
		$data['jml_wanita'] = $this->M_dashboard->total_wanita();
		$data['page'] = 'Home';
		$this->load->view('Dashboard', $data, FALSE);
	}

	public function user()
	{
		$this->load->model('M_user', 'user');
		$data['isi'] = $this->user->get();
		$data['page'] = 'backend/user';
		$this->load->view('Dashboard', $data, FALSE);
	}


	public function aksi($aksi)
	{
		$this->load->model('M_user', 'user');
		if ($aksi == 'delete') {
			$id = $this->input->get('id');
			$hasil = $this->user->delete($id);
			if ($hasil) {
				$this->session->set_flashdata('notif', '<div class="alert alert-success">sukses delete</div>');
				redirect('Welcome/user', 'refresh');
			} else {
				$this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal delete</div>');
				redirect('Welcome/user', 'refresh');
			}
		} else if ($aksi == 'edit') {
			$id = $this->input->get('id');
			if ($this->uri->segment(4) == 'proses') {
				$data = array(
					'email_user' => $this->input->post('email'),
					'nama_user' => $this->input->post('nama'),
					'id_kota' => $this->input->post('kota'),
					'password_user' => md5('welcome')
				);
				$this->db->where('id_user', $id);
				$hasil = $this->db->update('user', $data);
				if ($hasil) {
					$this->session->set_flashdata('notif', '<div class="alert alert-success">sukses update</div>');
					redirect('Welcome/user', 'refresh');
				} else {
					$this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal update</div>');
					redirect('Welcome/user', 'refresh');
				}
			} else {
				$this->load->model('M_user', 'user');
				$data['isi'] = $this->user->get_satu_data($id);
				$data['kota'] = $this->user->get_kota();
				$data['page'] = 'backend/add_user';
				$this->load->view('Dashboard', $data, FALSE);
			}
		} else if ($aksi == 'view') {
			$id = $this->input->get('id');
			$data['isi'] = $this->user->get_satu_data($id);
			$data['page'] = 'backend/user_view';
			$this->load->view('Dashboard', $data, FALSE);
		} else if ($aksi == 'tambah') {
			if ($this->uri->segment(4) == 'proses') {
				$data = array(
					'email_user' => $this->input->post('email'),
					'nama_user' => $this->input->post('nama'),
					'id_kota' => $this->input->post('kota'),
					'password_user' => md5('welcome')
				);
				$hasil = $this->db->insert('user', $data);
				if ($hasil) {
					$this->session->set_flashdata('notif', '<div class="alert alert-success">sukses add</div>');
					redirect('Welcome/user', 'refresh');
				} else {
					$this->session->set_flashdata('notif', '<div class="alert alert-danger">gagal add</div>');
					redirect('Welcome/user', 'refresh');
				}
			} else {
				$this->load->model('M_user', 'user');
				$data['kota'] = $this->user->get_kota();
				$data['page'] = 'backend/add_user';
				$this->load->view('Dashboard', $data, FALSE);
			}
		}
	}

	public function ajax_link($link)
	{
		if ($link == 1) {
			echo 'ubah konten dengan link 1 ';
		} else {
			echo 'kontent link 2 ';
		}
	}

	public function ajax()
	{
		$data['page'] = 'backend/ajax_page';
		$this->load->view('Dashboard', $data, false);
	}

	public function coba()
	{
		if ($this->uri->segment(3) == 'tes') {
			echo 'test';
		} elseif ($this->uri->segment(3) == 'mie') {
			echo 'die';
		} else {
			echo 'wit';
		}
	}



	function grafik()
	{
		$this->load->model('M_user', 'user');
		$array_kategori = array('Lokasi User');
		$array_series = array(array('name' => 'persentase', 'data' => array()));
		$array_datas = array();
		$data_user = $this->user->get_chart();
		// lakukan perulangan untuk melihat index hasil
		for ($i = 0; $i < count($data_user); $i++) {
			$array_datas[$data_user[$i]['nama_kota']] = intval($data_user[$i]['total']);
		}

		// set value per data grafik
		foreach ($array_datas as $key => $val) {
			array_push($array_series[0]['data'], array((string)$key, $val));
		}

		$data['array_kategori'] = json_encode($array_kategori);
		$data['array_series'] = json_encode($array_series);
		$data['page'] = 'backend/chart';
		$this->load->view('Dashboard', $data, false);
	}





	function crul()
	{
		$ch = curl_init();
		// $url = "https://alumniphb.net/Welcome/link";
		$url = base_url('Tes/api');
		// set url o
		curl_setopt($ch, CURLOPT_URL, $url);

		// return the transfer as a string 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		// $output contains the output string 
		$output = curl_exec($ch);

		// tutup curl 
		curl_close($ch);

		// menampilkan hasil curl
		$data['crul'] =  json_decode($output);
		$data['page'] = 'backend/user';
		$this->load->view('Dashboard', $data, false);
	}
}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */