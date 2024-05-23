<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('authentication/auth-login');
    }

    public function login()
    {
        $this->form_validation->set_rules('email_username', 'Email atau Username', 'required');
        $this->form_validation->set_rules('password', 'Kata Sandi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth-login');
        } else {
            $email_username = $this->input->post('email_username');
            $password = $this->input->post('password');

            if ($email_username == 'zanzan' || $email_username == 'zan@gmail.com') {
                if ($password == 'zan123') {
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Kata sandi salah');
                    redirect('welcome');
                }
            } else {
                $this->session->set_flashdata('error', 'Username tidak diketahui');
                redirect('welcome');
            }
        }
    }
}
