<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthRegister extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('authentication/auth-register');

    }
}

/* End of file AuthRegister.php and path \application\controllers\AuthRegister.php */
