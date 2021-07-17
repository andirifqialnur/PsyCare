<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct(){ 

		parent::__construct();

        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('key', 'Key', 'trim|required');

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
        
        $email= $this->input->post('email');
        $password= $this->input->post('password');

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
                        'role' => $admin['role']
                    ];

                    $this->session->set_userdata( $data );
                    redirect('Dashboard');

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

// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // register user
	public function register() {

        // form validation
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This Email Already Registered!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]', ['matches' => 'Password not Match!', 'min_length' => 'Password is Short']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('image', 'Image', 'required|trim');
        //end form validation

        if ( $this->form_validation->run() == false ) {
            
            $data['title'] = 'Registration';
            
            $this->load->view('Template/auth_header', $data);
            $this->load->view('V_register');
            $this->load->view('Template/auth_footer', $data);
            
        } else {
            
            $config['upload_path']      = './assets/photo/';
            $config['allowed_types']    = 'jpg|jpeg|png|gif';
            $config['max-size']         = 10000;
            $config['max_width']        = 10000;
            $config['max_height']       = 10000;
            
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('image')) {
                
                $error = array('error' => $this->upload->display_errors());
                echo "<b>Galat!</b> Can't Upload your photo";
                $this->load->view('auth/register', $error);
                
            } else {
                
                $image = $this->upload->data();
                $image = $image['file_name'];
                
                $data = [
                    
                    'name'      => $this->input->post('name', true),
                    'email'     => htmlspecialchars($this->input->post('email', true)),
                    'image'     => $image,
                    'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'date_time' => time(),
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
    }

// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // public function register(){
    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
    //     $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]', ['matches' => 'password dont match!', 'min_length' => 'password is short']);
    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    //     if ( $this->form_validation->run() == false ){

    //         $data['title'] = 'Registration';

    //         $this->load->view('Template/auth_header', $data);
    //         $this->load->view('V_register');
    //         $this->load->view('Template/auth_footer', $data);
            
    //     } else {

    //         $config['upload_path']          = './assets/photo/';
    //         $config['allowed_types']        = 'gif|jpg|png|jpeg';
    //         $config['max_size']             = 100000000;
    //         $config['max_width']            = 100000000;
    //         $config['max_height']           = 100000000;

    //         $this->load->library('upload', $config);

    //         if ( !$this->upload->do_upload('userfile') ) { 

    //             $error = array('error' => $this->upload->display_errors());
    //             echo "Wroonggg Come On Man I'm Tiredd";
    //             $this->load->view('Auth/register', $error);

    //         } else {

    //             $foto = $this->upload->data();
    //             $foto = $foto['file_name'];

    //             $data = [

    //                 'name' => $this->input->post('name', true),
    //                 'email' => $this->input->post('email', true),
    //                 'image' => $foto,
    //                 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //                 'date' => time(),
    //                 'is_active' => 1

    //             ];

    //             $this->db->insert('user', $data);
    //             $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    //             <strong>Sukses!</strong> akun anda telah dibuat.
    //                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //             </div>');

    //             redirect('Auth');
    //         }
    //     }
    // }

    // $name        = $this->input->post('name');
    // $email       = $this->input->post('email');
    // $password    = $this->input->post('password');
    // $image       = 'image';
    
    // 'name' => $name,
    // 'email' => $email,
    // 'password' => $password,
    // 'image' => $image,
    // 'date_time' => time(),
    // 'is_active' => 1,

// ----------------------------------------------------------------------------------------------------------------------------------

    //     if ( $this->form_validation->run() == false ) {
            
    //         $data['title'] = 'Registration';
            
    //         $this->load->view('Template/auth_header', $data);
    //         $this->load->view('V_register');
    //         $this->load->view('Template/auth_footer', $data);
            
    //     } else {

    //         $config['upload_path']      = './assets/photo';
    //         $config['allowed_types']    = 'jpg|png|gif|jpeg';
    //         $config['max-size']         = 100000000;
    //         $config['max_width']        = 100000000;
    //         $config['max_height']       = 100000000;
            
    //         $this->load->library('upload', $config);
            
    //         if ( !$this->upload->do_upload('photo') ) {
                
    //             $error = array('error' => $this->upload->display_errors());
    //             echo "Wrong Inputation";
    //             $this->load->view('home', $error);
                
    //         } else {

    //             $photo = $this->upload->data();
    //             $photo = $photo['file_name'];
                
    //             $data = array(
                    
    //                 'name' => htmlspecialchars($this->input->post('name', true)),
    //                 'email' => htmlspecialchars($this->input->post('email', true)),
    //                 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //                 'image' => $photo,
    //                 'date_time' => time(),
    //                 'is_active' => 1
                    
    //             );

    //             $this->db->insert('user', $data);
        
    //             $this->session->set_flashdata('message', 
    //                 '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
    //                     <strong>Success!</strong> Your Account has been created
    //                 </div>');
        
    //             redirect('Auth');
    //         }
    //     }
    // }

// ----------------------------------------------------------------------------------------------------------------------------------

        // if ( $this->form_validation->run() == false ) {

        //     $data['title'] = 'Registration';

        //     $this->load->view('Template/auth_header', $data);
        //     $this->load->view('V_register');
        //     $this->load->view('Template/auth_footer', $data);

        // } else {

        //     $config['upload_path']      = './assets/photo/';
        //     $config['allowed_types']    = 'jpg|gif|png|jpeg';
        //     $config['max-size']         = 100000000;
        //     $config['max_width']        = 100000000;
        //     $config['max_height']       = 100000000;

        //     $this->load->library('upload', $config);

        //     if ( $this->upload->do_upload('image') ) {

        //         $error = array('error' => $this->upload->display_errors());
        //         echo "Wrong Inputation";
        //         $this->load->view('auth/register', $error);

        //     } else {
                
        //         $image = $this->upload->data();
        //         $image = $image['file_name'];
                
        //         $data = [
                    
        //             'name' => htmlspecialchars($this->input->post('name', true)),
        //             'email' => htmlspecialchars($this->input->post('email', true)),
        //             'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        //             'image' => $image,
        //             'date_time' => time(),
        //             'is_active' => 1
                    
        //         ];
                
        //         $this->db->insert('user', $data);
                
        //         $this->session->set_flashdata('message', 
        //             '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
        //             <strong>Success!</strong> Your Account has been created
        //             </div>');
        //         redirect('Auth');

        //     }

        // }

// ----------------------------------------------------------------------------------------------------------------------------------

    //     public function tambah_aksi() {
    //     $nama_barang        = $this->input->post('nama_barang');
    //     $keterangan         = $this->input->post('keterangan');
    //     $kategori           = $this->input->post('kategori');
    //     $harga              = $this->input->post('harga');
    //     $stok               = $this->input->post('stok');
    //     $gambar             = $_FILES['gambar']['nama'];
    //     if ($gambar=''){}else{
    //         $config ['upload_path'] = './upload';
    //         $config ['allowed_types'] = 'jpg|jpeg|png|gif';

    //         $this->load->library('upload', $config);
    //         if(!$this->upload->do_upload('gambar')){
    //             echo "gambar gagal diupload!";
    //         } else {
    //             $gambar=$this->upload->data('file_name');
    //         }
    //     }
    //     $data = array(
    //         'nama_barang'           => $nama_barang,
    //         'keterangan'            => $keterangan,
    //         'kategori'              => $kategori,
    //         'harga'                 => $harga,
    //         'stok'                  => $stok,
    //         'gambar'                => $gambar,

    //     );

    //     $this->model_barang->tambah_barang($data, 'tb_barang');
    //     redirect('saller/data_barang/index');

    // }

// ----------------------------------------------------------------------------------------------------------------------------------
	

	// public function registerDoctor(){
		
    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
        
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[doctor.email]',
    //         ['is_unique' => 'This Email Already Registered!']);

    //     $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]',
    //         ['matches' => 'Password not Match!',
    //          'min_length' => 'Password is Short']);

    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

    //     if ( $this->form_validation->run() == false ) {

    //         $data['title'] = 'Doctor Registration';

    //         $this->load->view('Template/auth_header', $data);
    //         $this->load->view('V_regisDoctor');
    //         $this->load->view('Template/auth_footer');

    //     } else {

    //         $data = [
    //             'name' => htmlspecialchars($this->input->post('name', true)),
    //             'email' => htmlspecialchars($this->input->post('email', true)),
    //             'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //             'date_time' => time(),
    //             'is_active' => 1
    //         ];

    //         $this->db->insert('doctor', $data);

    //         $this->session->set_flashdata('message', 
    //             '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
    //                 <strong>Success!</strong> Your Account has been created
    //             </div>');
    //         redirect('Auth/doctor');
    //     }
	// }

// ----------------------------------------------------------------------------------------------------------------------------------

    // logout
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        redirect('Auth');
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