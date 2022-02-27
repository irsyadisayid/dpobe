<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	//Load model
	public function __construct()
	{
		parent::__construct();
		//load model user
		$this->my_login->check_login();
		$this->load->model("Dashboard_model");
	}
	public function index()
	{
		$pengguna = $this->Dashboard_model->countAllPengguna() ;
		$laporan  = $this->Dashboard_model->countAllLaporan();	
		$data = array(
			'title'       => 'Halaman Dashboard',
			'pengguna'	  => $pengguna->total,
			'laporan'	  => $laporan->total,
			'content'     => 'dashboard/index'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}
