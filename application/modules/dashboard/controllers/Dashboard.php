<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends MY_Controller {
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_userData');
    }

// Admin section
    function index(){
        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['admin'] = $this->M_userData->getAllAdmin();
        $data['title'] = 'Admin Dashboard';

        $this->load->view('Template/dash_header', $dataadmin);
        $this->load->view('Template/dash_bar', $dataadmin);
        $this->load->view('V_dashboard', $data);
        $this->load->view('Template/dash_footer');
    }

    public function adminData(){
        $datauser['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['admin'] = $this->M_userData->getAllAdmin();

        $this->load->view('Template/dash_header', $datauser);
        $this->load->view('Template/dash_bar', $datauser);
        $this->load->view('V_adminData', $data);
        $this->load->view('Template/dash_footer');
    }
    public function adminDataById( $id ){
        $datauser['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $jsonArray = $this->M_userData->getAdminById( $id );
        $json = json_encode($jsonArray);

        echo $json;
    }

    public function patientData(){
        $datauser['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
        $data['user'] = $this->M_userData->getAllUser();

        $this->load->view('Template/dash_header', $datauser);
        $this->load->view('Template/dash_bar', $datauser);
        $this->load->view('V_patientData', $data);
        $this->load->view('Template/dash_footer');
    }
    public function patientDataById( $id ){
        $datauser['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
        $jsonArray = $this->M_userData->getUserById( $id );
        $json = json_encode($jsonArray);

        echo $json;
    }
    
    public function doctorData(){
        $datadoctor['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();
        $data['doctor'] = $this->M_userData->getAllDoctor();

        $this->load->view('Template/dash_header', $datadoctor);
        $this->load->view('Template/dash_bar', $datadoctor);
        $this->load->view('V_doctorData', $data);
        $this->load->view('Template/dash_footerDoctor');
    }
    public function doctorDataById( $id ){
        $datauser['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();
        $jsonArray = $this->M_userData->getUserById( $id );
        $json = json_encode($jsonArray);

        echo $json;
    }

    public function addEvent(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

        $this->load->view('Template/dash_header',$data);
        $this->load->view('Template/dash_bar', $data);
        $this->load->view('V_addEvent');
        $this->load->view('Template/dash_footer');
    }

    public function article(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $data);
        $this->load->view('V_updatedInfo');
        $this->load->view('Template/dash_footer');
    }
    
    public function updatedTest(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $data);
        $this->load->view('V_updatedTest');
        $this->load->view('Template/dash_footer');
    }

    public function profile(){

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $data);
        $this->load->view('V_profile', $data);
        $this->load->view('Template/dash_footer');

    }

    
    // doctor section
    function doctordash(){

        $data['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();

        $data['title'] = 'Doctor Dashboard';

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_barDoctor', $data);
        $this->load->view('V_dashboard', $data);
        $this->load->view('Template/dash_footer');
    }

    public function schedule() {
        
        $data['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_barDoctor', $data);
        $this->load->view('V_schedule', $data);
        $this->load->view('Template/dash_footer');
    }

    public function profileDoctor(){
        
        $data['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_barDoctor', $data);
        $this->load->view('V_profileDoctor', $data);
        $this->load->view('Template/dash_footer');
    }
    
    public function articleDoctor(){
        
        $data['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();
        
        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_barDoctor', $data);
        $this->load->view('V_article', $data);
        $this->load->view('Template/dash_footer');
    }


    // Adding Data
    public function addData(){
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]', 
                                         ['matches' => 'Password not match!', 'min_length' => 'Password is short']);
                                         $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
                                         
        if ( $this->form_validation->run() == false ) {

            $data['title'] = 'Adding Data';
            $this->load->view('Template/dash_header', $data);

            $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
            
            $this->load->view('Template/dash_bar', $data);
            $this->load->view('V_addData');
            $this->load->view('Template/dash_footer', $data);
            
        } else {
            
            $config['upload_path']          = './assets/img_upload/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;
            
            $this->load->library('upload', $config);
            
            if ( !$this->upload->do_upload('img_upload') ) { 
                
                $error = array('error' => $this->upload->display_errors());
                echo "Wrong";

                $this->load->view('Dashboard/addData', $error);

            } else {

                $img = $this->upload->data();
                $img = $img['file_name'];
                $data = [
                    'name' => $this->input->post('name', true),
                    'email' => $this->input->post('email', true),
                    'image' => $img,
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'is_active' => 1,
                    'date' => time()
                ];
                
                $this->db->insert('admin', $data);
                $this->session->set_flashdata('massage', ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> akun anda telah dibuat.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
                                                
                redirect('Dashboard');
            }
        }
    }

// Admin session
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
// End Session

}