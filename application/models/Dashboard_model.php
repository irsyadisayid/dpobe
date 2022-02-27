<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Ambil banyak data daftar pencarian orang
    public function countAllLaporan()
    {
        $this->db->select('count(*) as total');
        $this->db->from('daftarpo');
        $query = $this->db->get();
        return $query->row();
    }

     //Ambil banyak data daftar pengguna
     public function countAllPengguna()
     {
         $this->db->select('count(*) as total');
         $this->db->from('pengguna');
         $query = $this->db->get();
         return $query->row();
     }
 

    
}
