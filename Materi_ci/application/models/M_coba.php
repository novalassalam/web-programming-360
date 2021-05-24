<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_coba extends CI_Model
{

    function result_objek()
    {
        $this->db->select('nama_user,email_user,id_user');
        return  $this->db->get('user')->result();
    }

    function result_array()
    {
        $this->db->select('nama_user,email_user');
        return  $this->db->get('user')->result_array();
    }
    function row_objek()
    {
        $this->db->select('nama_user,email_user');
        $this->db->where('id_user', 100);
        return  $this->db->get('user')->row();
    }

    function row_array()
    {
        $this->db->select('nama_user,email_user');
        $this->db->where('id_user', 1);
        return  $this->db->get('user')->row_array();
    }

    function jumlah()
    {
        $this->db->select('id_user');
        return  $this->db->get('user')->num_rows();
    }

    function join()
    {
        $this->db->select('user.id_kota,nama_user,nama_kota');
        $this->db->join('kota', 'kota.id_kota = user.id_kota', 'inner');
        return $this->db->get('user')->result();
    }

    function panggil()
    {
        return 'hallo ini model coba fungsi panggil';
    }

    function tambah($object)
    {
        return $this->db->insert('kota', $object);
    }

    function hapus($id)
    {
        $this->db->where('id_user', $id);
        return  $this->db->delete('user');
    }

    function detail($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('user')->row();
    }

    function edit($object, $id)
    {
        $this->db->where('id_user', $id);
        return $this->db->update('user', $object);
    }
}

/* End of file ModelName.php */
