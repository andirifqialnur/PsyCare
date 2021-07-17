<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct(){ 
		parent::__construct();

		$this->load->model('M_home');
		
	}
// HOME SECTION
// Navbar
	public function index(){
		$this->load->view('Template/Header');
		$this->load->view('V_home');
		$this->load->view('Template/Footer');
	}
	public function about(){
		$this->load->view('Template/Header');
		$this->load->view('V_about');
		$this->load->view('Template/Footer');
	}
	public function article(){
		$this->load->view('Template/Header');
		$this->load->view('V_artikel');
		$this->load->view('Template/Footer');
	}
	public function faq(){
		$this->load->view('Template/Header');
		$this->load->view('V_faq');
		$this->load->view('Template/Footer');
	}
	public function contact(){
		$this->load->view('Template/Header');
		$this->load->view('V_contact');
		$this->load->view('Template/Footer');
	}
	public function sembarang(){
		$this->load->view('Template/Header');
		$this->load->view('V_sembarang');
		$this->load->view('Template/Footer');
	}
// End Navbar	

// Content
	public function chat(){
		$this->load->view('Template/Header');
		$this->load->view('V_chat');
		$this->load->view('Template/Footer');
	}
	public function test(){
		$this->load->view('Template/Header');
		$this->load->view('V_psytest');
		$this->load->view('Template/Footer');
	}
	public function event(){
		$this->load->view('Template/Header');
		$this->load->view('V_event');
		$this->load->view('Template/Footer');
	}
	public function discuss(){
		$this->load->view('Template/Header');
		$this->load->view('V_discuss');
		$this->load->view('Template/Footer');
	}
//End Content
// END HOME SECTION

// --------------------------------------------------------------------------

// USER SECTION
// Navbar
	public function userhome(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_home', $data);
		$this->load->view('Template/Footer_user', $data);
	}

	public function userabout(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_about', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	public function userarticle(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_artikel', $data);
		$this->load->view('Template/Footer_user', $data);
	}

	public function userarticledetail(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_artikel_detail', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	public function userfaq(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_faq', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	public function usercontact(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_contact', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	// End Navbar

	// Content
	public function userchat(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_chat', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	public function usertest(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_psytest', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	public function userevent(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_event', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	public function userdiscuss(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_discuss', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	
	
	public function editprofile(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_editprofile', $data);
		$this->load->view('Template/Footer_user', $data);
	}


	public function userEdited( $id ) {
        $this->M_home->updateUserProfile();
        redirect('Home/editprofile');         
    }

//End Content
// END USER SECTION

}
