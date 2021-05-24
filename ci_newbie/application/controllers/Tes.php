<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes extends CI_Controller
{
    public function index()
    {
        echo 'ini controller Tes fungsi index';
        // https://localhost/Materi_ci/index.php/Tes/index

        //  tes adalah nama controller
        // index nama fungsi
    }

    public function fungsi2()
    {
        echo 'ini fungsi 2';
        // https://localhost/Materi_ci/index.php/Tes/fungsi2
    }

    public function tampil_html_asli()
    {

        echo '<html>
        <body>
        isi
        </body>
        </html>';
    }

    function tampil_html_view_tanpa_data()
    {
        $this->load->view('view_pertama');
        //menampilkan view dalam folder view tanpa ekstensi .php
    }

    function tampil_html_view_data()
    {
        $data = [];
        $data['nim'] = 13090036;
        $data['nama'] = 'nopaal';
        $this->load->view('view_kedua', $data, FALSE);

        //menampilkan view dalam folder view tanpa ekstensi .php
    }
}

/* End of file Controllername.php */
