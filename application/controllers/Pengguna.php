<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    //Load model
    public function __construct()
    {
        parent::__construct();
        //load model user
        $this->load->model('pengguna_model');
        $this->my_login->check_login();
    }

    private function encRSA($M)
    {
        $data[0] = 1;
        for ($i = 0; $i <= 35; $i++) {
            $rest[$i] = pow($M, 1) % 119;
            if ($data[$i] > 119) {
                $data[$i + 1] = $data[$i] * $rest[$i] % 119;
            } else {
                $data[$i + 1] = $data[$i] * $rest[$i];
            }
        }
        $get = $data[35] % 119;
        return $get;
    }

    public function index()
    {
        $pengguna   = $this->pengguna_model->getAllPengguna();
        //Validasi input 
        $valid  = $this->form_validation;

        //Check nama
        $valid->set_rules(
            'nama',
            'Nama',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check tempat/tanggal lahir
        $valid->set_rules(
            'ttl',
            'Tempat/Tanggal Lahir',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check agama
        $valid->set_rules(
            'agama',
            'Agama',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check pekerjaan
        $valid->set_rules(
            'pekerjaan',
            'Pekerjaan',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check alamat
        $valid->set_rules(
            'alamat',
            'Alamat',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check No HP
        $valid->set_rules(
            'nohp',
            'No HP',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check email
        $valid->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required'    => '$s must be filled',
                'valid_email' => '$s not valid,enter the correct username'
            )
        );

        //Check password
        $valid->set_rules(
            'password',
            'Password ',
            'required',
            array(
                'required'      => '$s must be filled'
            )
        );

        //Jika sudah dicek, dan error
        if ($valid->run() == FALSE) {
            //End validasi 
            $data = array(
                'title'       => 'Halaman Pengguna',
                'content'     => 'pengguna/index',
                'pengguna'    => $pengguna
            );
            $this->load->view('layout/wrapper', $data, False);
            //Jika validasi oke, maka masuk database
        } else {
            $inp    = $this->input;
            $enc = "";
            for ($i = 0; $i < strlen($inp->post('password')); $i++) {
                $m = ord($inp->post('password')[$i]);
                if ($m < 119) {
                    $enc = $enc . chr($this->encRSA($m));
                } else {
                    $enc = $enc . $inp->post('password')[$i];
                }
            }
            $data   = array(
                'nama'              => $inp->post('nama'),
                'ttl'               => $inp->post('ttl'),
                'agama'             => $inp->post('agama'),
                'pekerjaan'         => $inp->post('pekerjaan'),
                'kewarganegaraan'   => $inp->post('kewarganegaraan'),
                'alamat'            => $inp->post('alamat'),
                'nohp'              => $inp->post('nohp'),
                'email'             => $inp->post('email'),
                'password'          => $enc
            );
            //proses oleh model
            $this->pengguna_model->add($data);
            //Notifikas dan redirect 
            $this->session->set_flashdata('flash', 'data has been add');
            redirect(base_url('pengguna'), 'refresh');
        }
    }

    //Function untuk mengedit pengguna
    public function edit($id)
    {
        //Panggil data user yang akan diedit
        $pengguna   = $this->pengguna_model->detail($id);

        //Validasi input 
        $valid  = $this->form_validation;

        //Check nama
        $valid->set_rules(
            'nama',
            'Nama',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check tempat/tanggal lahir
        $valid->set_rules(
            'ttl',
            'Tempat/Tanggal Lahir',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check agama
        $valid->set_rules(
            'agama',
            'Agama',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check pekerjaan
        $valid->set_rules(
            'pekerjaan',
            'Pekerjaan',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check alamat
        $valid->set_rules(
            'alamat',
            'Alamat',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check No HP
        $valid->set_rules(
            'nohp',
            'No HP',
            'required',
            array('required'    => '$s must be filled')
        );

        //Check email
        $valid->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required'    => '$s must be filled',
                'valid_email' => '$s not valid,enter the correct username'
            )
        );

        //Check email
        $valid->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required'    => '$s must be filled',
                'valid_email' => '$s not valid,enter the correct username'
            )
        );

        //Jika sudah dicek, dan error
        if ($valid->run() == FALSE) {
            //End validasi 
            $data = array(
                'title'       => 'Halaman Pengguna',
                'content'     => 'pengguna/edit',
                'pengguna'    => $pengguna
            );
            $this->load->view('layout/wrapper', $data, False);
            //Jika validasi oke, maka masuk database
        } else {
            $inp    = $this->input;
            //Check panjang password, jika password lebih dari 6 karakter maka password diganti
            //Jika password lebih dari 32 karakter password juga diganti
            if (strlen($inp->post('password')) >= 6 || strlen($inp->post('password')) <= 32) {
                // $inp    = $this->input;
                $enc = "";
                for ($i = 0; $i < strlen($inp->post('password')); $i++) {
                    $m = ord($inp->post('password')[$i]);
                    if ($m < 119) {
                        $enc = $enc . chr($this->encRSA($m));
                    } else {
                        $enc = $enc . $inp->post('password')[$i];
                    }
                }
                $data   = array(
                    'id'           => $id,
                    'nama'              => $inp->post('nama'),
                    'ttl'               => $inp->post('ttl'),
                    'agama'             => $inp->post('agama'),
                    'pekerjaan'         => $inp->post('pekerjaan'),
                    'kewarganegaraan'   => $inp->post('kewarganegaraan'),
                    'alamat'            => $inp->post('alamat'),
                    'nohp'              => $inp->post('nohp'),
                    'email'             => $inp->post('email'),
                    'password'          => $enc,
                );
            } else {
                $data   = array(
                    'id'           => $id,
                    'nama'              => $inp->post('nama'),
                    'ttl'               => $inp->post('ttl'),
                    'agama'             => $inp->post('agama'),
                    'pekerjaan'         => $inp->post('pekerjaan'),
                    'kewarganegaraan'   => $inp->post('kewarganegaraan'),
                    'alamat'            => $inp->post('alamat'),
                    'nohp'              => $inp->post('nohp'),
                    'email'             => $inp->post('email'),
                );
            }
            //proses oleh model
            $this->pengguna_model->edit($data);
            //Notifikas dan redirect 
            $this->session->set_flashdata('flash', 'data has been edited');
            redirect(base_url('pengguna'), 'refresh');
        }
    }

    //Hapus user
    public function delete($id)
    {
        $data   = array('id'   => $id);
        //proses hapus
        $this->pengguna_model->delete($data);
        //Notifikas dan redirect
        $this->session->set_flashdata('flash', 'data has been delete');
        redirect(base_url('pengguna'), 'refresh');
    }

    //Untuk menampilkan detail data user
    public function detail($id)
    {
        $pengguna         = $this->pengguna_model->detail($id);
        $data = array(
            'title'       => 'Halaman Pengguna',
            'content'     => 'pengguna/detail',
            'pengguna'    => $pengguna
        );
        $this->load->view('layout/wrapper', $data, False);
    }
}
