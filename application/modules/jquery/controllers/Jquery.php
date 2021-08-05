<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jquery extends CI_Controller
{

    public function validation()
    {
        $this->load->model('M_user', 'user');
        $data['kota'] = $this->user->get_kota();
        $data['page'] = 'form';
        $this->load->view('Dashboard', $data, FALSE);
    }

    public function tambah()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Emailnya', 'required|valid_email');
        $this->form_validation->set_rules(
            'nama',
            'namanya',
            'required|min_length[5]'
        );
        $this->form_validation->set_rules('kota', 'Kotanya', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger">' . var_dump(validation_errors()) . '</div>');
            redirect('Welcome/user', 'refresh');
        } else {
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
        }
    }
}

/* End of file Controllername.php */
