<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_home extends CI_Model {

    // public function getAllUser() {
    //     return $this->db->get('user')->result_array();
    // }

    public function getUserById( $id ) {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    // User session edit profile data
    public function updateUserProfile() {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required|trim');
        $this->form_validation->set_rules('job', 'Job', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]', 
                                            ['matches' => 'password dont match!', 
                                             'min_length' => 'password is short']);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password]');
        $this->form_validation->set_rules('age', 'Age', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');

        $data = [

            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'username' => $this->input->post('username', true),
            'phonenumber' => $this->input->post('phonenumber', true),
            'job' => $this->input->post('job', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender', true),
            'address' => $this->input->post('address'),
            'date_time' => time(),
            'is_active' => 1

            // 'true' can protected our data from XSS
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
// --------------------------------------------------------------------------------------------
    }

    public function imgProfile() {
        
    }
}
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