<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_home extends CI_Model {

    public function getAllUser() {
        return $this->db->get('user')->result_array();
    }

    public function getUserById( $id ) {

        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    // public function get_join( $table ){

    //     $this->db->join( $table, $table . ' . id = user . ' . $table );
    //     return $this->db->get('event');
    // }

    // public function getAllRegisteredData() {
    //     $this->db->select('*');
    //     $this->db->from('event');
    //     $this->db->join('user', 'user.id = event.id_user', 'left');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    // public function getRegisteredData( $id ) {
    //     $this->db->select('*');
    //     $this->db->from('event');
    //     $this->db->join('user', 'user.id = event.id_user', 'left');
    //     $this->db->where('id', $id);
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    // public function countPrice( $id ) {
    //     $sql = "select count(id_) as summary from review where id_product= $id ";
    // }

// User session edit profile data
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

            'name'        => $this->input->post('name', true),
            'email'       => $this->input->post('email', true),
            'password'    => password_hash( $this->input->post('password'), PASSWORD_DEFAULT ),
			'age'         => $this->input->post('age', true),
            'gender'      => $this->input->post('gender', true),
            'phonenumber' => $this->input->post('phonenumber', true),
            'job'         => $this->input->post('job', true),
            'address'     => $this->input->post('address', true),
            'desc'        => $this->input->post('desc', true)
            // 'true' can protected our data from XSS
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function edit($where, $table, $data){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

