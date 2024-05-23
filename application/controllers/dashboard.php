<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/topbar');
        $this->load->view('admin/dashboard');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/footer');
    }
}

/* End of file AuthRegister.php and path \application\controllers\AuthRegister.php */
