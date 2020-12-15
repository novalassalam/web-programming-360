<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cek_login();
        $this->load->model('M_coba', 'model');
    }


    public function index()
    {
        $data['isi'] = $this->model->get_kota();
        $data['page'] = 'coba_view';
        $this->load->view('Dashboard', $data, FALSE);
    }

    
}
