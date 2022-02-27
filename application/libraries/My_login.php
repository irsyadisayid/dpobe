<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_login
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        //Load model user
        $this->CI->load->model('pengguna_model');
    }


    private function decRSA($E)
    {

        $data[0] = 1;
        for ($i = 0; $i <= 11; $i++) {
            $rest[$i] = pow($E, 1) % 119;
            if ($data[$i] > 119) {
                $data[$i + 1] = $data[$i] * $rest[$i] % 119;
            } else {
                $data[$i + 1] = $data[$i] * $rest[$i];
            }
        }
        $get = $data[11] % 119;
        return $get;
    }


    //Fungsi untuk login 
    public function login($email, $password)
    {
        //Check username dan password ke model
        // $check = $this->CI->pengguna_model->login($email, $password);
        $pengguna = $this->CI->pengguna_model->checkEmail($email);
        //Jika ada data check, maka login berhasil
        if ($pengguna) {
            $dec = "";
            for ($i = 0; $i < strlen($pengguna->password); $i++) {
                $m = ord($pengguna->password[$i]);
                if ($m < 119) {
                    $dec = $dec . chr($this->decRSA($m));
                } else {
                    $dec = $dec . $pengguna->password[$i];
                }
            }
            if ($dec == $password) {
                $id         =   $pengguna->id;
                $nama       =   $pengguna->nama;
                $email      =   $pengguna->email;
                //Proses create session untuk login
                $this->CI->session->set_userdata('id', $id);
                $this->CI->session->set_userdata('nama', $nama);
                $this->CI->session->set_userdata('email', $email);
                //end proses create session untuk login 
                //redirect ke halaman dashboard
                $this->CI->session->set_flashdata('success', '
                you have successfully logged in');
                redirect(base_url('dashboard'));
            } else {
                $this->CI->session->set_flashdata('failed', '
                Username or Password invalid');
                redirect(base_url('login'));
            }
        } else {
            //Jika data user gak ada , maka login lagi
            $this->CI->session->set_flashdata('failed', '
            Username or Password invalid');
            redirect(base_url('login'));
        }
    }

    //Fungsi cek login : untuk mengecek status login user 
    public function check_login()
    {
        if (
            $this->CI->session->userdata('email') == ""
        ) {
            //kalau username atau role_id kosong maka login lagi 
            $this->CI->session->set_flashdata('warning', '
            your arent  login yet');
            redirect(base_url('login'));
        }
    }

    //Fungsi untuk logout 
    public function logout()
    {
        //Proses UNSET session untuk login
        $this->CI->session->unset_userdata('id');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('email');
        //end proses create session untuk login 
        //redirect ke halaman dashboard
        $this->CI->session->set_flashdata('success', '
         you have successfully logout');
        redirect(base_url('login'));
    }
}
