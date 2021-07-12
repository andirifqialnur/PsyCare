<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct(){ 

		parent::__construct();

        $this->load->library('form_validation');
	}

// default patient
    public function index(){

        $data['title'] = 'Login Page';

        $this->load->view('Template/Header_user', $data);
        $this->load->view('V_home_user');
        $this->load->view('Template/Footer_user', $data);
    }
}