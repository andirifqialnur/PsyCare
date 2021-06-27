<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends MY_Controller {
    function __construct()
    {
        parent::__construct();

        $this->load->model('M_userData');
    }

    function index(){

        $this->load->view('Template/dash_header');
        $this->load->view('Template/dash_bar');
        $this->load->view('V_dashboard');
        $this->load->view('Template/dash_footer');

    }

    public function userData(){

        $data['user'] = $this->M_userData->getAllUser();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar');
        $this->load->view('V_userData', $data);
        $this->load->view('Template/dash_footer');

    }

    public function formEdit($id) {

        $data['user'] = $this->M_userData->getUserById($id);
        $data['title'] = 'Edit Data';

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar');
        $this->load->view('V_edit', $data);
        $this->load->view('Template/dash_footer');

    }

    public function Edited() {

        $this->M_userData->Update();
        redirect('Dashboard/userData');

    }

    public function Deleted($id) {

        $this->M_userData->Delete($id);
        redirect('Dashboard/userData');

    }
}