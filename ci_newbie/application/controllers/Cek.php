<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cek extends CI_Controller
{
    public function index()
    {
        echo 'controller cek';
        //  https://localhost/Materi_ci/index.php/Cek/
    }
    public function view_controller()
    {
        echo '<html>
        <head>
        </head>
        <body>
        tes
        </body>
        </html>';
        //  https://localhost/Materi_ci/index.php/Cek/view_controller
    }

    public function view_html()
    {
        $this->load->view('view_4a_1');
        // https://localhost/Materi_ci/index.php/Cek/view_html
    }
    public function view_html_data()
    {
        $data = [];
        $data['nim'] = 13090036;
        $data['nama'] = 'nopaal';
        $this->load->view('view_4a_2', $data, FALSE);
        // https://localhost/Materi_ci/index.php/Cek/view_html_data
    }

    public function db_get_result_object()
    {
        $this->load->model('M_coba');
        $this->M_coba->result_objek();
        $data['isi'] = $this->M_coba->result_objek();
        $this->load->view('tabel_objek', $data);
    }

    public function db_get_result_array()
    {
        $this->load->model('M_coba');
        $data['judul'] = 'laman array';
        $data['isi'] = $this->M_coba->result_array();
        $this->load->view('tabel_array', $data);
    }

    public function  db_get_row_objek()
    {
        $this->load->model('M_coba');
        $data['judul'] = 'row objek';
        $data['isi'] = $this->M_coba->row_objek();
        $this->load->view('row_objek', $data);
    }

    public function  db_get_row_array()
    {
        $this->load->model('M_coba');
        $data['judul'] = 'row array';
        $data['isi'] = $this->M_coba->row_array();
        $this->load->view('row_array', $data);
    }

    public function db_get_num_rows()
    {
        $this->load->model('M_coba');
        echo $this->M_coba->jumlah();
    }

    public function join_tabel()
    {
        $this->load->model('M_coba');
        $data['judul'] = 'join tabel';
        $data['isi'] = $this->M_coba->join();
        $this->load->view('join_tabel', $data);
    }
    function panggil_model()
    {
        $this->load->model('M_coba');
        $hasil = $this->M_coba->panggil();
        echo $hasil;
    }

    function tambah()
    {
        $data['judul'] = 'tambah data';
        $this->load->view('form_tambah', $data);
    }

    function tambah_proses()
    {
        $this->load->model('M_coba');
        //nama_kota (kiri) diambil dari db 
        // kota (kanan) name dari form
        $data = array(
            'nama_kota' => $this->input->post('kota')
        );
        $res = $this->M_coba->tambah($data);
        echo ($res) ? 'sukses' : 'gagal';
        redirect(base_url('Cek/db_get_result_object'));
    }

    function hapus()
    {
        $idnya = $this->input->get('id');
        $this->load->model('M_coba');

        $res = $this->M_coba->hapus($idnya);
        echo ($res) ? 'sukses' : 'gagal';
        redirect(base_url('Cek/db_get_result_object'));
    }

    function detail()
    {
        $idnya = $this->input->get('id');
        $this->load->model('M_coba');
        $res = $this->M_coba->detail($idnya);
        var_dump($res);
    }

    function edit()
    {
        $idnya = $this->input->get('id');
        $this->load->model('M_coba');
        $data['isi'] = $this->M_coba->detail($idnya);
        $this->load->view('edit', $data, FALSE);
    }

    function edit_proses()
    {
        $this->load->model('M_coba');
        //nama_kota (kiri) diambil dari db 
        // kota (kanan) name dari form
        $idnya = $this->input->get('id');

        $data = array(
            'nama_user' => $this->input->post('nama')
        );
        $res = $this->M_coba->edit($data, $idnya);
        echo ($res) ? 'sukses' : 'gagal';
        redirect(base_url('Cek/db_get_result_object'));
    }
}

/* End of file Cek.php */
