<?php
class M_register extends CI_Model {
    function input(){
        $this->db->insert('user');
    }
}