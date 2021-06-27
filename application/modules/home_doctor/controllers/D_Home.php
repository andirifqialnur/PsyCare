<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_Home extends MY_Controller {

	public function __construct(){ 
		parent::__construct();
		
	}
	
	public function index(){
		$this->load->view('Template/doctor_header');
		$this->load->view('V_home');
		$this->load->view('Template/Footer');
	}

	public function about(){
		$this->load->view('Template/doctor_header');
		$this->load->view('V_about');
		$this->load->view('Template/Footer');
	}

	public function test(){
		$this->load->view('Template/doctor_header');
		$this->load->view('V_test');
		$this->load->view('Template/Footer');
	}

	public function event(){
		$this->load->view('Template/doctor_header');
		$this->load->view('V_event');
		$this->load->view('Template/Footer');
	}

	public function discussForm(){
		$this->load->view('Template/doctor_header');
		$this->load->view('V_discussForm');
		$this->load->view('Template/Footer');
	}

	public function contact(){
		$this->load->view('Template/doctor_header');
		$this->load->view('V_contact');
		$this->load->view('Template/Footer');
	}
}
