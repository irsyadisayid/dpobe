<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require_once dirname(__FILE__).'/vendor/autoload.php';
// require_once(dirname( __FILE__ ).'/vendor/spipu/html2pdf/html2pdf.class.php');

// use Spipu\Html2Pdf\HTML2PDF;
// use Dompdf\Dompdf;

class Laporan extends CI_Controller
{
    //Load model
    public function __construct()
    {
        parent::__construct();
        //load model user
        $this->load->model('laporan_model');
        // $this->my_login->check_login();
    }

    public function index()
    {
        $laporan   = $this->laporan_model->getAllLaporan();
        //Validasi input 
        $valid  = $this->form_validation;
        $valid->set_rules(
            'nama',
            'Nama',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'ttl',
            'Tanggal Lahir',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'jekel',
            'Jenis Kelamin',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'tb',
            'Tinggi Badan',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'rambut',
            'Rambut',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'kulit',
            'Kulit',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'mata',
            'Mata',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'cirik',
            'Ciri Khusus',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'tglhilang',
            'Tanggal Hilang',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'infot',
            'Info Terakhir',
            'required',
            array('required'    => '$s must be filled')
        );

        //Jika sudah dicek, dan error
        if ($valid->run() == FALSE) {
            //End validasi 
            $data = array(
                'title'       => 'Halaman Laporan',
                'content'     => 'laporan/index',
                'laporan'    =>  $laporan
            );
            $this->load->view('layout/wrapper', $data, False);
            //Jika validasi oke, maka masuk database
        } else {
            $new_name                       = time() . $_FILES["photo"]['name'];
            $config['file_name']            = $new_name;
            $inp                            = $this->input;
            $photo                          = $new_name;
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 4000;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('photo')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('laporan', $error);
            } else {
                $tglH = explode("-",$inp->post('tglhilang'));
                $new = $tglH[2]."/".$tglH[1]."/".$tglH[0];
                // return print_r($new);
                $data   = array(
                    'nama'        => $inp->post('nama'),
                    'ttl'        => $inp->post('ttl'),
                    'jekel'        => $inp->post('jekel'),
                    'tb'       => $inp->post('tb'),
                    'rambut'       => $inp->post('rambut'),
                    'kulit'       => $inp->post('kulit'),
                    'mata'       => $inp->post('mata'),
                    'cirik'       => $inp->post('cirik'),
                    'tglhilang'   => $new,
                    'infot'   => $inp->post('infot'),
                    'photo'       => $photo
                );
                //proses oleh model
                $this->laporan_model->add($data);
                //Notifikas dan redirect 
                $this->session->set_flashdata('flash', 'data has been add');
                redirect(base_url('laporan'), 'refresh');
            }
        }
    }

    //Function untuk mengedit pengguna
    public function edit($id)
    {
        //Panggil data user yang akan diedit
        $laporan   = $this->laporan_model->detail($id);

        //Validasi input 
        $valid  = $this->form_validation;
        $valid->set_rules(
            'nama',
            'Nama',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'ttl',
            'Tanggal Lahir',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'jekel',
            'Jenis Kelamin',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'tb',
            'Tinggi Badan',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'rambut',
            'Rambut',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'kulit',
            'Kulit',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'mata',
            'Mata',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'cirik',
            'Ciri Khusus',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'tglhilang',
            'Tanggal Hilang',
            'required',
            array('required'    => '$s must be filled')
        );

        $valid->set_rules(
            'infot',
            'Info Terakhir',
            'required',
            array('required'    => '$s must be filled')
        );

        //Jika sudah dicek, dan error
        if ($valid->run() == FALSE) {
            //End validasi 
            $data = array(
                'title'       => 'Halaman Laporan',
                'content'     => 'laporan/edit',
                'laporan'    =>  $laporan
            );
            $this->load->view('layout/wrapper', $data, False);
            //Jika validasi oke, maka masuk database
        } else {
            $inp    = $this->input;
            $data   = array('id'   => $id);
            $filename   = $this->laporan_model->getfilename($id);
            $path       = './file/' . $filename['photo'];
            delete_files($path);
            $new_name                       = time() . $_FILES['photo']['name'];
            $config['file_name']            = $new_name;
            $inp                            = $this->input;
            $photo                          = $new_name;
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 4000;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('photo')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('laporan', $error);
            } else {
                $tglH = explode("-",$inp->post('tglhilang'));
                $new = $tglH[2]."/".$tglH[1]."/".$tglH[0];
                $data   = array(
                    'id'            => $id,
                    'nama'        => $inp->post('nama'),
                    'ttl'        => $inp->post('ttl'),
                    'jekel'        => $inp->post('jekel'),
                    'tb'       => $inp->post('tb'),
                    'rambut'       => $inp->post('rambut'),
                    'kulit'       => $inp->post('kulit'),
                    'mata'       => $inp->post('mata'),
                    'cirik'       => $inp->post('cirik'),
                    'tglhilang'   => $new,
                    'infot'   => $inp->post('infot'),
                    'photo'       => $photo
                );
                //proses oleh model
                $this->laporan_model->edit($data);

                //Notifikas dan redirect 
                $this->session->set_flashdata('flash', 'data has been add');
                redirect(base_url('laporan'), 'refresh');
            }
        }
    }

    //Hapus user
    public function delete($id)
    {
        $data   = array('id'   => $id);
        //proses hapus
        $this->laporan_model->delete($data);
        $filename   = $this->laporan_model->getfilename($id);
        $photo      = isset($filename['photo']) ? $filename['photo'] : '';
        $path       = './file/' . $photo;
        delete_files($path);
        //Notifikas dan redirect
        $this->session->set_flashdata('flash', 'data has been delete');
        redirect(base_url('laporan'), 'refresh');
    }


    public function detail($id)
    {
        $laporan   = $this->laporan_model->detail($id);
        $data = array(
            'title'       => 'Halaman Pengguna',
            'content'     => 'laporan/detail',
            'laporan'    =>   $laporan
        );
        $this->load->view('layout/wrapper', $data, False);
    }

    public function cetaklaporan($id)
    {
        
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        // $this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';
        $this->data_print['title_pdf'] = 'Laporan Print';
        $this->data_print['laporan'] = $this->laporan_model->getLaporan($id);
        
        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_daftar_pencarian_orang_'.$this->data_print['laporan']['dnama'];
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('laporan/cetaksurat', $this->data_print, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

    public function cetakposter($id)
    {
        
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        // $this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';
        $this->data_print['title_pdf'] = 'Print Poster';
       $data = $this->data_print['laporan'] = $this->laporan_model->getLaporan($id);
        // return var_dump($data);
        // filename dari pdf ketika didownload
        $file_pdf = 'poster_daftar_pencarian_orang_'.$this->data_print['laporan']['dnama'];
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('laporan/cetakposter', $this->data_print, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
}
