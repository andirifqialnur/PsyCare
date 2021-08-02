<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct(){ 

		parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('M_register');
	}


    // login
    public function index(){

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ( $this->form_validation->run() == false ){

            $data['title'] = 'Login Page';

            $this->load->view('Template/auth_header', $data);
            $this->load->view('V_login');
            $this->load->view('Template/auth_footer', $data);

        } else {

            $this->check_login();
        }
    }
    
    public function doctor(){

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ( $this->form_validation->run() == false ){

            $data['title'] = 'Doctor Login';

            $this->load->view('Template/auth_header', $data);
            $this->load->view('V_loginDoctor');
            $this->load->view('Template/auth_footer', $data);

        } else {

            $this->check_login_doctor();
        }
    }

    public function admin(){

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('keyy', 'Key', 'trim|required');

        if ( $this->form_validation->run() == false ){

            $data['title'] = 'Admin Login';

            $this->load->view('Template/auth_header', $data);
            $this->load->view('V_loginAdmin');
            $this->load->view('Template/auth_footer', $data);

        } else {

            $this->check_login_admin();
        }
    }
    

    // login checking
    private function check_login(){
        
        $email    = $this->input->post('email');
        $password = $this->input->post('password');
        
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ( $user ) {
            
            if ( $user['is_active'] == 1 ) {
                
                if ( password_verify( $password, $user['password']) ) {
                    
                    $data = [
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'email' => $user['email'],
                    ];

                    $this->session->set_userdata( $data );
                    redirect('Home/userhome');

                } else {
                    
                    $this->session->set_flashdata('message', 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                    <strong>Galat!</strong> Wrong Password.
                    </div>');
                    
                    redirect('Auth');
                }
                
            } else {
                $this->session->set_flashdata('message', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                <strong>Galat!</strong> Your Account Unactive.
                </div>');
                redirect('Auth');
            }
            
        } else {
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
            <strong>Galat!</strong> Email Unregistered.
            </div>');
            redirect('Auth');
        }
    }

    private function check_login_doctor(){
        
        $email= $this->input->post('email');
        $password= $this->input->post('password');

        $doctor = $this->db->get_where('doctor', ['email' => $email])->row_array();

        if ( $doctor ) {
            
            if ( $doctor['is_active'] == 1 ) {
                
                if ( password_verify( $password, $doctor['password'] ) ) {
                    
                    $data = [
                        'id' => $doctor['id'],
                        'name' => $doctor['name'],
                        'email' => $doctor['email'],
                    ];

                    $this->session->set_userdata( $data );
                    redirect('Dashboard/doctordash');

                } else {
                    
                    $this->session->set_flashdata('message', 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                    <strong>Galat!</strong> Wrong Password.
                    </div>');
                    
                    redirect('Auth/doctor');
                }
                
            } else {
                $this->session->set_flashdata('message', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                <strong>Galat!</strong> Your Account Unactive.
                </div>');
                redirect('Auth/doctor');
            }
            
        } else {
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
            <strong>Galat!</strong> Email Unregistered.
            </div>');
            redirect('Auth/doctor');
        }
    }

    private function check_login_admin(){
        
        $email= $this->input->post('email');
        $password= $this->input->post('password');

        $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

        if ( $admin ) {
            
            if ( $admin['is_active'] == 1 ) {
                
                if ( password_verify( $password, $admin['password']) ) {
                    
                    $data = [
                        'id' => $admin['id'],
                        'name' => $admin['name'],
                        'email' => $admin['email'],
                        'keyy' => $admin['keyy'],
                    ];

                    $this->session->set_userdata( $data );
                    redirect('Dashboard');

                } else {
                    
                    $this->session->set_flashdata('message', 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                    <strong>Galat!</strong> Wrong Password.
                    </div>');
                    
                    redirect('Auth/admin');
                }
                
            } else {
                $this->session->set_flashdata('message', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                <strong>Galat!</strong> Your Account Unactive.
                </div>');
                redirect('Auth/admin');
            }
            
        } else {
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
            <strong>Galat!</strong> Email Unregistered.
            </div>');
            redirect('Auth/admin');
        }
    }

// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    // register user
	public function register(){
		
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
            ['is_unique' => 'This Email Already Registered!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]',
            ['matches' => 'Password not Match!',
             'min_length' => 'Password is Short']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

// --------------
        if ( $this->form_validation->run() == false ) {

            $data['title'] = 'Patient Registration';

            $this->load->view('Template/auth_header', $data);
            $this->load->view('V_register');
            $this->load->view('Template/auth_footer');

        } else {

            $config['upload_path']          = './assets/photo/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100000000;
            $config['max_width']            = 100000000;
            $config['max_height']           = 100000000;

            $this->load->library('upload', $config);

            if ( !$this->upload->do_upload('photo') ) { 

                $error = array('error' => $this->upload->display_errors());
                echo "Wroonggg Come On Man I'm Tiredd";
                $this->load->view('Auth/register', $error);
            
            } else {
            
                $foto = $this->upload->data();
                $foto = $foto['file_name'];
            

                $data = [
                    'name' => htmlspecialchars($this->input->post('name', true)),
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'is_active' => 1,
                    'date_time' => date('Y-m-d h:m:s'),
                    'image' => $foto
                ];

                $this->db->insert('user', $data);

                $this->session->set_flashdata('message', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <strong>Success!</strong> Your Account has been created
                    </div>');
                redirect('Auth');
            }
        }
	}

// ----------------------------------------------------------------------------------------------------------------------------------
	

	public function regisDoctor(){
		
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
            ['is_unique' => 'This Email Already Registered!']);
        $this->form_validation->set_rules('experience', 'Experience', 'required|trim');
        $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]',
            ['matches' => 'Password not Match!',
            'min_length' => 'Password is Short']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

        if ( $this->form_validation->run() == false ) {

            $data['title'] = 'Doctor Registration';

            $this->load->view('Template/auth_header', $data);
            $this->load->view('V_regisDoctor');
            $this->load->view('Template/auth_footer');

        } else {

            $config['upload_path']          = './assets/doctor/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100000000;
            $config['max_width']            = 100000000;
            $config['max_height']           = 100000000;

            $this->load->library('upload', $config);

            if ( !$this->upload->do_upload('photo') ) { 

                $error = array('error' => $this->upload->display_errors());
                echo "Wroonggg Come On Man I'm Tiredd";
                $this->load->view('Auth/regisDoctor', $error);
            
            } else {
            
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];

                $data = [
                    'name'         => htmlspecialchars($this->input->post('name', true)),
                    'email'        => htmlspecialchars($this->input->post('email', true)),
                    'phonenumber'  => $this->input->post('phonenumber', true),
                    'experience'   => $this->input->post('experience', true),
                    'image'        => $gambar,
                    'password'     => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'is_active'    => 1,
                    'date_time'    => date('Y-m-d h:m:s')
                ];

                $this->db->insert('doctor', $data);

                $this->session->set_flashdata('message', 
                    '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <strong>Success!</strong> Your Account has been created
                    </div>');
                redirect('Auth/doctor');
            }
        }
	}

// ----------------------------------------------------------------------------------------------------------------------------------

// logout
    public function logout(){
        $this->session->unset_userdata('email');
        redirect('Auth');
    }
    public function logoutdDoctor(){
        $this->session->unset_userdata('email');
        redirect('Auth/doctor');
    }
    public function logoutAdmin(){
        $this->session->unset_userdata('email');
        redirect('Auth/admin');
    }


// forgot password
    public function forgot_pass(){

        $data['title'] = 'Forgot Password';

        $this->load->view('Template/auth_header', $data);
        $this->load->view('V_forgot_pass');
        $this->load->view('Template/auth_footer');
    }
    public function forgotDoctor(){

        $data['title'] = 'Forgot Password';

        $this->load->view('Template/auth_header', $data);
        $this->load->view('V_forgot_pass');
        $this->load->view('Template/auth_footer');
    }
    public function forgotAdmin(){

        $data['title'] = 'Forgot Password';

        $this->load->view('Template/auth_header', $data);
        $this->load->view('V_forgot_pass');
        $this->load->view('Template/auth_footer');
    }

}