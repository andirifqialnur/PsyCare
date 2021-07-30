<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_event extends CI_Model {

    public function getAllEvent() {

        return $this->db->get('event')->result_array();
    }
    public function getEventById( $id ) {

        return $this->db->get_where('event', ['id' => $id])->row_array();
    }

    public function addEvent( $data, $table ){
        $this->db->insert( $table, $data );
    }
    public function updateEvent( $data, $table ){
        $this->db->update( $table, $data );
    }
}