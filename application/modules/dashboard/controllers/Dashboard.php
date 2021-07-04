<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends MY_Controller {
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_userData');
    }

    function index(){

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $data);
        $this->load->view('V_dashboard', $data);
        $this->load->view('Template/dash_footer');

    }

    public function adminData() {
        $datauser['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
        $data['user'] = $this->M_userData->getAllUser();

        $this->load->view('Template/dash_header', $datauser);
        $this->load->view('Template/dash_bar', $datauser);
        $this->load->view('V_adminData', $data);
        $this->load->view('Template/dash_footer');
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

    // public function userData(){

    //     $datauser['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
    //     $data['user'] = $this->M_userData->getAllUser();

    //     $this->load->view('Template/dash_header', $datauser);
    //     $this->load->view('Template/dash_bar', $datauser);
    //     $this->load->view('V_userData', $data);
    //     $this->load->view('Template/dash_footer');

    // }

    public function formEdit($id) {

        // $datauser['user'] = $this->db->get_where('user', ['email' => $this->session->userData('email')])->row_array();
        $data['user'] = $this->M_userData->getUserById($id);

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar');
        $this->load->view('V_edit');
        $this->load->view('Template/dash_footer');

    }

    public function Edited() {

        $this->M_userData->Update();
        redirect('Dashboard');

    }

    public function Deleted($id) {

        $this->M_userData->Delete($id);
        redirect('Dashboard');

    }
}