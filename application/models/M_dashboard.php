<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    // function __construct()
    // {
    //     //pengecekan jika level != super maka redirect ke login
    //     if ($this->session->userdata('data_login')['log_level'] != '1') {
    //         redirect(base_url());
    //     }
    // }

    function total_user()
    {
        // num_rows = menjumlah jumlah baris dari result sql
        return   $this->db->get('user')->num_rows();
    }

    function total_kota()
    {
        // num_rows = menjumlah jumlah baris dari result sql

        return   $this->db->get('kota')->num_rows();
    }

    function total_pria()
    {
        // sum = menjumlah spesifik data dari sql

        $this->db->select('sum(pria) as pria');

        return   $this->db->get('datas')->row();
    }
    function total_wanita()
    {
        // sum = menjumlah spesifik data dari sql
        $this->db->select('sum(wanita) as wanita');

        return   $this->db->get('datas')->row();
    }
}

/* End of file ModelName.php */
