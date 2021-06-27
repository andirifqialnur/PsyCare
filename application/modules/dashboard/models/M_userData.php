<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_userData extends CI_Model {

    public function getAllUser() {

        return $this->db->get('user')->result_array();

    }

    public function getUserById($id) {

        return $this->db->get_where('user', ['id' => $id])->row_array();

    }

    public function Update() {

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
            "role_id" => $this->input->post('as', true),
            "is_active" => 1

            // 'true' can protected our data from XSS
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);

    }

    public function Delete($id) {

        $this->db->delete('user', ['id' => $id]);

    }
}