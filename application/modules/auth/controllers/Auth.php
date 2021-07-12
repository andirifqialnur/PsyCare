<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct(){ 

		parent::__construct();

        // $this->load->model('M_login');
        // $this->load->model('M_register');
        $this->load->library('form_validation');
	}

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

    
    private function check_login(){
        
        $email= $this->input->post('email');
        $password= $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ( $user ) {
            
            if ( $user ) {
                
                if ( password_verify( $password, $user['password']) ) {
                    
                    if ( $user['role_id'] == 1 ) {
                        
                        $data = [
                            'email' => $user['email'],
                            // 'role_id' => $user['role_id']
                        ];
                        
                        $this->session->set_userdata($data);
                        redirect('Dashboard');

                    } else {
                        redirect('Home/userhome');
                    }

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

	public function register(){
        
		
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
            ['is_unique' => 'This Email Already Registered!']);

        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]',
            ['matches' => 'Password not Match!',
             'min_length' => 'Password is Short']);

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

        if ( $this->form_validation->run() == false ) {

            $data['title'] = 'Registration';

            $this->load->view('Template/auth_header', $data);
            $this->load->view('V_register');
            $this->load->view('Template/auth_footer');

        } else {

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'date_time' => time(),
                'role_id' => $this->input->post('as', true),
                'is_active' => 1
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', 
                '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                    <strong>Success!</strong> Your Account has been created
                </div>');
            redirect('Auth');
        }
	}

    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        redirect('Auth');
    }

    public function forgot_pass(){

        $data['title'] = 'Forgot Password';

        $this->load->view('Template/auth_header', $data);
        $this->load->view('V_forgot_pass');
        $this->load->view('Template/auth_footer');
    }
}