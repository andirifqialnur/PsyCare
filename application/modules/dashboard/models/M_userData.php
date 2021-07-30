<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_userData extends CI_Model {
    public function __construct(){
		parent::__construct();  
		// $this->db = $this->load->database('db', TRUE);
	}
// Admin Session get all id
    // admin data
    public function getAllAdmin() {

        return $this->db->get('admin')->result_array();
    }
    public function getAdminById( $id ) {

        return $this->db->get_where('admin', ['id' => $id])->row_array();
    }

    // patient data
    public function getAllUser() {

        return $this->db->get('user')->result_array();
    }
    public function getUserById( $id ) {

        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    
    // doctor data
    public function getAllDoctor() {

        return $this->db->get('doctor')->result_array();
    }
    public function getDoctorById( $id ) {

        return $this->db->get_where('doctor', ['id' => $id])->row_array();
    }


    // event data
    public function getAllEvent() {
        return $this->db->get('event')->result_array();
    }
    public function geteventById( $id ) {
        return $this->db->get_where('event', ['id' => $id])->row_array();
    }

// Admin session edit
    public function updateUser() {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]', 
                                            ['matches' => 'password dont match!', 
                                             'min_length' => 'password is short']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

        $data = [

            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "date_time" => time(),
            "is_active" => 1

            // 'true' can protected our data from XSS
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);

    }

    public function updateDoctor() {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]', 
                                            ['matches' => 'password dont match!', 
                                             'min_length' => 'password is short']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

        $data = [

            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "date_time" => time(),
            "is_active" => 1

            // 'true' can protected our data from XSS
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('doctor', $data);

    }

// Admin session delete
    //delete user
    public function deleteUser($id) {
        $this->db->delete('user', ['id' => $id]);
    }
    //delete doctor
    public function deleteDoctor($id) {
        $this->db->delete('doctor', ['id' => $id]);
    }
    //delete admin
    public function deleteAdmin($id) {
        $this->db->delete('admin', ['id' => $id]);
    }


// Admin Calculate
    //patient
    public function calculatePatients() {

        $query = $this->db->get('user');

        if ( $query->num_rows() > 0 ) {

            return $query->num_rows();

        } else {

            return 0;
        }
    }
    //doctor
    public function calculateDoctors() {

        $query = $this->db->get('doctor');

        if ( $query->num_rows() > 0 ) {

            return $query->num_rows();

        } else {

            return 0;
        }
    }
    // admin
    public function calculateAdmins() {

        $query = $this->db->get('admin');

        if ( $query->num_rows() > 0 ) {

            return $query->num_rows();

        } else {

            return 0;
        }
    }
    // event
    public function calculateEvents() {

        $query = $this->db->get('event');

        if ( $query->num_rows() > 0 ) {

            return $query->num_rows();

        } else {

            return 0;
        }
    }
    // test
    public function calculateTests() {

        $query = $this->db->get('test');

        if ( $query->num_rows() > 0 ) {

            return $query->num_rows();

        } else {

            return 0;
        }
    }
    // article
    public function calculateArticles() {

        $query = $this->db->get('article');

        if ( $query->num_rows() > 0 ) {

            return $query->num_rows();

        } else {    

            return 0;
        }
    }

// join table
    
}


