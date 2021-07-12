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

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $data);
        $this->load->view('V_dashboard', $data);
        $this->load->view('Template/dash_footer', $data);

    }

    public function doctorData(){
        $datauser['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
        $data['user'] = $this->M_userData->getAllUser();

        $this->load->view('Template/dash_header', $datauser);
        $this->load->view('Template/dash_bar', $datauser);
        $this->load->view('V_doctorData', $data);
        $this->load->view('Template/dash_footer');
    }

    public function patientData(){
        $datauser['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
        $data['user'] = $this->M_userData->getAllUser();

        $this->load->view('Template/dash_header', $datauser);
        $this->load->view('Template/dash_bar', $datauser);
        $this->load->view('V_patientData', $data);
        $this->load->view('Template/dash_footer');
    }

    public function profile(){

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $data);
        $this->load->view('V_profile', $data);
        $this->load->view('Template/dash_footer');

    }

    public function formEdit($id) {

        $data['user'] = $this->M_userData->getUserById($id);

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar');
        $this->load->view('V_editUser');
        $this->load->view('Template/dash_footer');

    }

    public function Edited() {

        $this->M_userData->Update();
        redirect('Dashboard/adminData');

    }

    public function Deleted( $id ) {

        $this->M_userData->Delete($id);
        redirect('Dashboard/adminData');

    }

// doctor section

    function doctordash(){

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $data);
        $this->load->view('V_dashboard', $data);
        $this->load->view('Template/dash_footer', $data);
    }
}