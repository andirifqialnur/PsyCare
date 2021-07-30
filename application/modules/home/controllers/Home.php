<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct(){ 
		parent::__construct();

		$this->load->model('M_home');
		$this->load->model('Event/M_event');
		$this->load->model('Test/M_test');
		$this->load->model('Dashboard/M_userData');
		
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
		$this->load->view('Template/Footer_user');
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

		$data['doctor'] = $this->M_userData->getAllDoctor();
		$this->load->view('V_user_chat', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	public function userchatpayment( $id ){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
		$this->load->view('Template/Header_user', $data);

		$data['doctor'] = $this->M_userData->getDoctorById( $id );
		$this->load->view('V_user_chat_payment', $data);
		$this->load->view('Template/Footer_user', $data);
	}

	// test
	public function usertest(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
		$this->load->view('Template/Header_user', $data);

		$data['test'] = $this->M_test->getAllTest();
		$this->load->view('V_user_psytest', $data);
		$this->load->view('Template/Footer_user', $data);
	}

	// event
	public function userevent(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
		$this->load->view('Template/Header_user', $data);

		$data['event'] = $this->M_event->getAllEvent();
		$this->load->view('V_user_event', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	public function eventregister( $id ){
		// $data['info'] = $this->M_home->getRegisteredData();
		
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
		$data['tickets'] = $this->input->post('quantity');
		$data['event'] = $this->M_event->getEventById( $id );

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_event_register', $data);
		$this->load->view('Template/Footer_user', $data);
	}
	public function eventregistered( $id ) {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
		$this->load->view('Template/Header_user', $data);

		$data['event'] = $this->M_event->getEventById( $id );
		$event = $this->M_event->find( $id );

		$data = array(
			'id' => $event['id'],
			'qty' => 1,
			'price' => $event['price'],
			'topic' => $event['topic'],
		);
		
		$this->load->view('V_event_registered', $data);
		$this->load->view('Template/Footer_user', $data);
	}

	public function userdiscuss(){
		$data['user'] = $this->db->get_where('user', ['id' => $this->session->userData('id')])->row_array();

		$this->load->view('Template/Header_user', $data);
		$this->load->view('V_user_discuss', $data);
		$this->load->view('Template/Footer_user', $data);
	}
// end content
	
	// profile
	public function editProfile( $id ){

		$this->form_validation->set_rules('age', 'Age', 'required|trim');
		$this->form_validation->set_rules('phonenumber', 'phonenumber', 'required|trim');
		$this->form_validation->set_rules('address', 'address', 'required|trim');
		$this->form_validation->set_rules('job', 'job', 'required|trim');

		if ( $this->form_validation->run() == false ) {

			$data['title']= 'Edit Event';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
			$this->load->view('Template/Header_user', $data);
	
			$data['user'] = $this->M_home->getUserById( $id );
			$this->load->view('V_user_editProfile', $data);
			$this->load->view('Template/Footer_user', $data);

		} else {

			$config['upload_path']		= './assets/photo/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']         = 100000000;
			$config['max_width']        = 100000000;
			$config['max_height']       = 100000000;	

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('photo') ) {

				$error = array('error' => $this->upload->display_errors());
				echo "Wroonggg Come On Man I'm Tiredd";
				$this->load->view('Auth/register', $error);

			} else {

				$foto = $this->upload->data();
				$foto = $foto['file_name'];

				$data = array(

					'job' => $this->input->post('job', true),
					'age' => $this->input->post('age', true),
					'phonenumber' => $this->input->post('phonenumber', true),
					'address' => $this->input->post('address', true),
					'image' => $foto,
				);

				$where = array('id' => $id);
			}
			
			$this->db->where($where);
        	$this->db->update($data, 'user');
			redirect('Home/userhome');
		}
	}
	
	// User Edit Data
	public function updateUserData() {	

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'min_length[8]|matches[password2]', 
                                            ['matches' => 'password dont match!', 
                                             'min_length' => 'password is short']);
        $this->form_validation->set_rules('password2', 'Password 2', 'matches[password]');
		$this->form_validation->set_rules('age', 'Age', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
		$this->form_validation->set_rules('phonenumber', 'Phone Number', 'required|trim');
        $this->form_validation->set_rules('job', 'Job', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('desc', 'Description', 'required|trim');

        $data = [

            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'password' => password_hash( $this->input->post('password'), PASSWORD_DEFAULT ),
			'age'         => $this->input->post('age', true),
            'gender'      => $this->input->post('gender', true),
            'phonenumber' => $this->input->post('phonenumber', true),
            'job'         => $this->input->post('job', true),
            'address'     => $this->input->post('address', true),
            'desc'        => $this->input->post('desc', true)
            // 'true' can protected our data from XSS
        ];

		// $this->db->get_where('user', ['id' => $id])->row_array();
        $this->db->update('user', $data);
		redirect('Home/editProfile');
    }

//End Content
// END USER SECTION

}
