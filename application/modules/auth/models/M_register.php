<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_register extends CI_Model {
    public function input($data, $table){
        $this->db->insert( $table, $data );
    }
}