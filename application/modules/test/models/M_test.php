<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_test extends CI_Model {
    function __construct() {

        parent::__construct();
    }

    public function getAllTest() {

        return $this->db->get('test')->result_array();
    }
    public function getTestById( $id ) {

        return $this->db->get_where('test', ['id' => $id])->row_array();
    }

    public function editTest() {

        $this->form_validation->set_rules('testname', 'Test Name', 'required|trim');
        $this->form_validation->set_rules('descript', 'Description', 'required|trim');
        $this->form_validation->set_rules('thumbnail', 'Thumbnail', 'required|trim');
        $this->form_validation->set_rules('link', 'Link', 'required|trim');
        $this->form_validation->set_rules('date', 'Date Time', 'required|trim');

        $data = [

            'testname'  => $this->input->post('testname', true),
            'descript'  => $this->input->post('descript', true),
            'thumbnail' => $this->input->post('thumbnail', true),
            'link'      => $this->input->post('link', true),
            'date'      => date('Y-m-d h:m:s')
            // 'true' can protected our data from XSS
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('test', $data);
    }

    public function addTest( $data, $table ){

        $this->db->insert( $table, $data );
    }

}