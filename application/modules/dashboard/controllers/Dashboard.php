<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends MY_Controller {
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_userData');
    }

// Admin section

    // index
    function index(){
        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['title'] = 'Admin Dashboard';

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $dataadmin);

        $data['patient_total'] = $this->M_userData->calculatePatients();
        $data['doctor_total'] = $this->M_userData->calculateDoctors();
        $data['admin_total'] = $this->M_userData->calculateAdmins();
        $data['event_total'] = $this->M_userData->calculateEvents();
        $data['test_total'] = $this->M_userData->calculateTests();
        $data['article_total'] = $this->M_userData->calculateArticles();
        $this->load->view('V_dashboard', $data);
        $this->load->view('Template/dash_footer');
    }

    // adminData
    public function adminData(){
        $data['title'] = 'Admin Data';
        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['admin'] = $this->M_userData->getAllAdmin();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $dataadmin);
        $this->load->view('V_adminData', $data);
        $this->load->view('Template/dash_footer');
    }
    // adminDataById
    public function adminDataById( $id ){
        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $jsonArray = $this->M_userData->getAdminById( $id );
        $json = json_encode($jsonArray);

        echo $json;
    }

    // patientData
    public function patientData(){
        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['user'] = $this->M_userData->getAllUser();
        $data['title'] = 'Patient Data';

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $dataadmin);
        $this->load->view('V_patientData', $data);
        $this->load->view('Template/dash_footer');
    }
    // patientDataById
    public function patientDataById( $id ){
        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $jsonArray = $this->M_userData->getUserById( $id );
        $json = json_encode($jsonArray);

        echo $json;
    }
    
    //doctorData
    public function doctorData(){
        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['doctor'] = $this->M_userData->getAllDoctor();
        $data['title'] = 'Doctor Data';

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $dataadmin);
        $this->load->view('V_doctorData', $data);
        $this->load->view('Template/dash_footer');
    }
    // doctorDataById
    public function doctorDataById( $id ){
        $datauser['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();
        $jsonArray = $this->M_userData->getDoctorById( $id );
        $json = json_encode($jsonArray);

        echo $json;
    }
    
    // updateTest
    public function updatedTest(){
        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['title'] = 'Doctor Data';

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $dataadmin);
        $this->load->view('V_updatedTest');
        $this->load->view('Template/dash_footer');
    }
    // profile
    public function profile(){

        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['title'] = 'Edit Profile';

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $dataadmin);
        $this->load->view('V_profile', $dataadmin);
        $this->load->view('Template/dash_footer');

    }
    // Adding admin data
    public function addData(){
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]');
        $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required|trim');
        $this->form_validation->set_rules('job', 'Job', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]', 
                                            ['matches' => 'Password not match!', 'min_length' => 'Password is short']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('keyy', 'Key', 'required|trim');
                                         
        if ( $this->form_validation->run() == false ) {

            $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
            $data['title'] = 'Adding Data';

            $this->load->view('Template/dash_header', $data);
            $this->load->view('Template/dash_bar', $data);
            $this->load->view('V_addData');
            $this->load->view('Template/dash_footer');
            
        } else {

            $data = [
                'name' =>  htmlspecialchars($this->input->post('name', true)),
                'phonenumber' => $this->input->post('phonenumber', true),
                'email' =>  htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'job' =>  htmlspecialchars($this->input->post('job', true)),
                'address' =>  htmlspecialchars($this->input->post('address', true)),
                'keyy' =>  htmlspecialchars($this->input->post('keyy', true)),
                'date_time' => date('Y-m-d h:m:s'),
                'is_active' => 1
            ];
                
            $this->db->insert('admin', $data);
            redirect('Dashboard/adminData');
        }
    }


    // form edit for user
    public function formEdit( $id ) {
        $data['user'] = $this->M_userData->getUserById( $id );
                                    
        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar');
        $this->load->view('V_editUser');
        $this->load->view('Template/dash_footer');
    }
    public function editedUser() {
        $this->M_userData->Update();
        redirect('Dashboard/adminData');         
    }
    // form delete for user
    public function deletedUser( $id ){
        $this->M_userData->Delete($id);
        redirect('Dashboard/adminData');  
    }

    // form edit for doctor
    public function formDoctorEdit( $id ) {
        $data['doctor'] = $this->M_userData->getDoctorById( $id );
                                    
        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar');
        $this->load->view('V_editUser');
        $this->load->view('Template/dash_footer');
    }
    public function editedDoctor() {
        $this->M_userData->Update();
        redirect('Dashboard/adminData');         
    }
    // form delete for doctor             
    public function deletedDoctor( $id ){
        $this->M_userData->Delete($id);
        redirect('Dashboard/adminData');  
    }


    // form delete for admin
    public function deletedAdmin( $id ){
        $this->M_userData->Delete($id);
        redirect('Dashboard/adminData');  
    }
    // -------------------------------------------------------------------------------------------------------------------------------------------------
    
// doctor section
    //doctordash
    function doctordash(){

        $datadoctor['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();
        $data['title'] = 'Doctor Dashboard';

        $data['patient_total'] = $this->M_userData->calculatePatients();
        $data['doctor_total'] = $this->M_userData->calculateDoctors();
        $data['event_total'] = $this->M_userData->calculateEvents();
        $data['test_total'] = $this->M_userData->calculateTests();
        $data['article_total'] = $this->M_userData->calculateArticles();
        $data['chat_total'] = $this->M_userData->calculateChatted();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_barDoctor', $datadoctor);
        $this->load->view('V_dashDoctor', $data);
        $this->load->view('Template/dash_footer');
    }
    // chatted
    public function chatted() {
        
        $datadoctor['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();
        $data['chatted'] = $this->M_userData->getAllChatted();
        $data['title'] = 'Patient Chatted';

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_barDoctor', $datadoctor);
        $this->load->view('V_chatted', $datadoctor);
        $this->load->view('Template/dash_footer');
    }

    // profile Doctor
    public function profileDoctor(){

		$data['title']= 'Edit Profile Doctor';
		$data['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userdata('email')])->row_array();

        // exist data
		$this->form_validation->set_rules('name', 'name', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim');
		$this->form_validation->set_rules('phonenumber', 'phonenumber', 'required|trim');
		$this->form_validation->set_rules('experience', 'experience', 'required|trim'); 

        // additional data
		$this->form_validation->set_rules('age', 'Age', 'required|trim');
		$this->form_validation->set_rules('address', 'Address', 'required|trim');
		$this->form_validation->set_rules('quotes', 'Quotes', 'required|trim');
		$this->form_validation->set_rules('dayset', 'Dayset', 'required|trim');
		$this->form_validation->set_rules('timeset', 'Timeset', 'required|trim');
		$this->form_validation->set_rules('price', 'Price', 'required|trim');

		if ( $this->form_validation->run() == false ) {

			$this->load->view('Template/dash_header', $data);
            $this->load->view('Template/dash_barDoctor', $data);
            $this->load->view('V_profileDoctor', $data);
            $this->load->view('Template/dash_footer');  

		} else {

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phonenumber = $this->input->post('phonenumber');
			$experience = $this->input->post('experience');

			$age = $this->input->post('age');
			$address = $this->input->post('address');
			$quotes = $this->input->post('quotes');
			$dayset = $this->input->post('dayset');
			$timeset = $this->input->post('timeset');
			$price = $this->input->post('price');


			$upload_image = $_FILES ['photo'] ['name'];

			if ($upload_image) {

				$config['upload_path']		= './assets/doctor/';
				$config['allowed_types']	= 'gif|jpg|png|jpeg';
				$config['max_size']         = 100000000;
				$config['max_width']        = 100000000;
				$config['max_height']       = 100000000;

				$this->load->library('upload', $config);

				if ( $this->upload->do_upload('photo') ) { 

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);

				} else {

					$error = array('error' => $this->upload->display_errors());
					echo "Wroonggg Come On Man I'm Tiredd";
					$this->load->view('Auth/regisDoctor', $error);

				}
			}

			$this->db->set('name', $name);
			$this->db->set('age', $age);
			$this->db->set('phonenumber', $phonenumber);
			$this->db->set('experience', $experience);

			$this->db->set('dayset', $dayset);
			$this->db->set('timeset', $timeset);
			$this->db->set('price', $price);
			$this->db->set('quotes', $quotes);
			$this->db->set('address', $address);

			$this->db->where('email', $email);
			$this->db->update('doctor');

			$this->session->set_flashdata('message', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <strong>Success!</strong> Your Account has been created
                    </div>');
            redirect('Dashboard/profileDoctor');
		}
	}
}