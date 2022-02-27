<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Ambil data daftar pencarian orang
    public function getAllLaporan()
    {
        $this->db->select('*');
        $this->db->from('daftarpo');
        $query = $this->db->get();
        return $query->result();
    }

    //Ambil detail data laporan
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('daftarpo');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }


    //Hapus data laporan
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('daftarpo', $data);
    }

    //Tambah data laporan
    public function add($data)
    {
        $this->db->insert('daftarpo', $data);
    }

    //Edit data laporan
    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('daftarpo', $data);
    }

    //Mengambil filename 
    public function getfilename($data)
    {
        $this->db->select('photo');
        $this->db->from('daftarpo');
        $this->db->where('id', $data);
        $query  = $this->db->get();
        return $query->row_array();
    }

        //Print laporan
    public function getLaporan($id)
    {
        $this->db->select('p.nama, p.ttl, p.agama, p.kewarganegaraan, p.alamat, p.nohp,
                d.nama as dnama, d.ttl as dttl, d.jekel as djekel, d.tb as dtb, d.rambut as drambut, d.kulit as dkulit, d.mata as dmata, d.cirik as dcirik, d.infot as dinfot,d.photo as dphoto');
        $this->db->from('daftarpo d'); 
        $this->db->join('pengguna p', 'd.id_user=p.id');
        $this->db->where('d.id',$id);   
        $query = $this->db->get();
        return $query->row_array();
    }
}
