<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //Fungsi untuk login 
    public function login($email, $password)
    {
        $this->db->select('*');
        $this->db->from('pengguna');

        //where
        $this->db->where(array(
            'email'  =>     $email,
            'password'  =>  $password
        ));
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->row();
    }

    //Ambil data user 
    public function getAllPengguna()
    {
        $this->db->select('*');
        $this->db->from('pengguna');
        $query = $this->db->get();
        return $query->result();
    }

    //Ambil detail data user 
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function checkEmail($email)
    {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->row();
    }


    //Hapus data user
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('pengguna', $data);
    }

    //Ambil role
    public function getRole()
    {
        $this->db->select('*');
        $this->db->from('role');
        $query = $this->db->get();
        return $query->result();
    }

    //Tambah data user
    public function add($data)
    {
        $this->db->insert('pengguna', $data);
    }

    //Edit data user
    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('pengguna', $data);
    }
}
