<?php

class Dashboard extends MY_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->load->view('Template/dash_header');
        $this->load->view('Template/dash_bar');
        $this->load->view('V_dashboard');
        $this->load->view('Template/dash_footer');
    }
}