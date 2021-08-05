<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sensor extends CI_Controller
{

    // function __construct()
    // {
    //     //pengecekan jika level != super maka redirect ke login
    //     if ($this->session->userdata('data_login')['log_level'] != '1') {
    //         redirect(base_url());
    //     }
    // }

    public function index()
    {
        $lpg_gas = $this->input->get('lpg_gas');
        $co_gas = $this->input->get('co_gas');
        $smoke_gas = $this->input->get('smoke_gas');
        $data = [
            'lpg_gas' => $lpg_gas,
            'co_gas' => $co_gas,
            'smoke_gas' => $smoke_gas
        ];
        $this->db->insert('sensor', $data);
    }
}

/* End of file Sensor.php */
