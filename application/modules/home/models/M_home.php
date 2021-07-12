<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_userData extends CI_Model {

    public function getAllUser() {

        return $this->db->get('user')->result_array();
    }

    public function getUserById( $id ) {

        return $this->db->get_where('user', ['id' => $id])->row_array();

    }
}