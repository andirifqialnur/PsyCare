<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {

	public function __construct(){ 

		parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('M_event');
	}

    // eventData
    public function index(){
        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['title'] = 'Event Data';

        $data['event'] = $this->M_event->getAllEvent();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $dataadmin);
        $this->load->view('V_eventData', $data);
        $this->load->view('Template/dash_footer');
    }
    public function addEvent() {

        $topic            = $this->input->post('topic', true);
        $speaker          = $this->input->post('speaker', true);
        $date             = $this->input->post('date', true);
        $time             = $this->input->post('time', true);
        $via              = $this->input->post('via', true);
        $price            = $this->input->post('price', true);
        $descript         = $this->input->post('descript', true);
        $speakerProfile   = $_FILES['speakpro'];
        $thumbnail        = $_FILES['thumb'];

        if ( $speakerProfile = '' ){ } else {

            $config ['upload_path'] = './assets/event/speakerProfile';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if ( !$this->upload->do_upload('speakpro')){

                echo "Gagal upload speaker profile";

            } else {

                $speakerProfile = $this->upload->data('file_name');
            }
        }

        if ( $thumbnail = '' ) { } else {

            $config ['upload_path'] = './assets/event/thumbnail';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if ( !$this->upload->do_upload('thumb')){

                echo "Gagal upload thumbnail";

            } else {

                $thumbnail = $this->upload->data('file_name');
            }
        }

        $data = array(

            'topic'           => $topic,
            'speaker'         => $speaker,
            'date'            => $date,
            'time'            => $time,
            'via'             => $via,
            'price'           => $price,
            'speakerProfile'  => $speakerProfile,
            'thumbnail'       => $thumbnail,
            'descript'        => $descript
        );

        $this->M_event->addEvent($data, 'event');
        redirect('Event');
    }

    // editEvent
    public function editEvent( $id ) {
        
        $data['title']= 'Edit Event';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_bar', $data);
        
        $data['event'] = $this->M_event->getEventById( $id );
        $this->load->view('V_editEvent', $data);
        $this->load->view('Template/dash_footer');
    }
    public function editedEvent() {

        $topic            = $this->input->post('topic', true);
        $speaker          = $this->input->post('speaker', true);
        $date             = $this->input->post('date', true);
        $time             = $this->input->post('time', true);
        $via              = $this->input->post('via', true);
        $price            = $this->input->post('price', true);
        $descript         = $this->input->post('descript', true);
        $speakerProfile   = $_FILES['speakpro'];
        $thumbnail        = $_FILES['thumb'];

        if ( $speakerProfile = '' ){ } else {

            $config ['upload_path'] = './assets/event/eventedited';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if ( !$this->upload->do_upload('speakpro')){

                echo "Gagal upload speaker profile";

            } else {

                $speakerProfile = $this->upload->data();
                $speakerProfile = $speakerProfile['file_name'];
            }
        }

        if ( $thumbnail = '' ) { } else {

            $config ['upload_path'] = './assets/event/eventedited';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if ( !$this->upload->do_upload('thumb')){

                echo "Gagal upload thumbnail";

            } else {

                $thumbnail = $this->upload->data();
                $thumbnail = $thumbnail['file_name'];
            }
        }

        $data = array(

            'topic'           => $topic,
            'speaker'         => $speaker,
            'date'            => $date,
            'time'            => $time,
            'via'             => $via,
            'price'           => $price,
            'speakerProfile'  => $speakerProfile,
            'thumbnail'       => $thumbnail,
            'descript'        => $descript
        );

        $this->db->update('event', $data);
        redirect('Event');
    }

    public function deletedEvent($id){
       
        $this->db->delete('event', ['id' => $id]);
        redirect('Event');
    }

    public function register() {

        

    }
}