<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends MY_Controller {

    public function __construct(){ 

        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('M_test');
    }

    // eventData
    public function index(){
        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['title'] = 'Test Data';
        
        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $dataadmin);

        $data['test'] = $this->M_test->getAllTest();
        $this->load->view('V_testData', $data);
        $this->load->view('Template/dash_footer');
    }

    public function addTest() {

        $testname        = $this->input->post('testname', true);
        $descript        = $this->input->post('descript', true);
        $link            = $this->input->post('link', true);
        $thumbnail       = $_FILES['thumb'];

        if ( $thumbnail = '' ) { } else {

            $config ['upload_path'] = './assets/test';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if ( !$this->upload->do_upload('thumb')){

                echo "Gagal upload thumbnail";

            } else {

                $thumbnail = $this->upload->data('file_name');
            }
        }

        $data = array(

            'testname'   => $testname,
            'descript'   => $descript,
            'thumbnail'  => $thumbnail,
            'link'       => $link,
            'date'       => date('Y-m-d h:m:s')
        );

        $this->M_test->addTest($data, 'test');
        redirect('Test');
    }

    // editEvent
    public function editedTest() {
        $this->M_test->editTest();
        redirect('Test');
    }
}