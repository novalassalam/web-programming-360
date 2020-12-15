<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_coba extends CI_Model
{

    function get_kota()
    {
        return $this->db->get('kota')->result();
    }

}

/* End of file ModelName.php */
