<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Article extends MY_Controller {
    public function __construct(){

		parent::__construct();  

        $this->load->model('M_article');
	}



// Doctor Session get all id
    // article data

    public function index(){
        $datadoctor['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();
        $data['title'] = 'Article Data';

        $data['article'] = $this->M_article->getAllArticle();
        // $data['article'] = $this->M_article->get_join();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_barDoctor', $datadoctor);
        $this->load->view('V_articleData', $data);
        $this->load->view('Template/dash_footer');
    }

    public function addingArticle(){

        $datadoctor['doctor'] = $this->db->get_where('doctor', ['email' => $this->session->userData('email')])->row_array();
        $data['title'] = 'Article Data';

        $data['article'] = $this->M_article->getAllArticle();
        // $data['article'] = $this->M_article->get_join();

        $this->load->view('Template/dash_header', $data);
        $this->load->view('Template/dash_barDoctor', $datadoctor);
        $this->load->view('V_addArticle', $data);
        $this->load->view('Template/dash_footer');

    }
// add article   
    public function addArticle() {

        //upload
		$title            = $this->input->post('title', true);
        $creator          = $this->input->post('creator', true);
        $slug             = str_replace(' ', '-', $this->input->post('slug', true));
        $fill             = $this->input->post('fill', true);
        $description      = $this->input->post('description', true);
        $creatorProfile   = $_FILES['createpro'];
        $thumbnail        = $_FILES['thumb'];

        if ( $creatorProfile = '' ){ } else {

            $config ['upload_path'] = './assets/article';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if ( !$this->upload->do_upload('createpro') ){

                echo "Gagal upload speaker profile";

            } else {

                $creatorProfile = $this->upload->data();
                $creatorProfile = $creatorProfile['file_name'];
            }
        }

        if ( $thumbnail = '' ) { } else {

            $config ['upload_path'] = './assets/article';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if ( !$this->upload->do_upload('thumb') ){

                echo "Gagal upload thumbnail";

            } else {

                $thumbnail = $this->upload->data();
                $thumbnail = $thumbnail['file_name'];
            }
            
            $data = array(
    
                'title'           => $title,
                'creator'         => $creator,
                'description'     => $description,
                'fill'            => $fill,
                'slug'            => $slug,
                'creatorProfile'  => $creatorProfile,
                'thumbnail'       => $thumbnail,
                'date'            => date('Y-m-d h:m:s'),
            );
        }


        $this->M_article->addArticle( $data );
        redirect('Article');
    }

// end add

// edit article
    public function editArticle( $id ){

        $data['title']= 'Edit Event';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Template/dash_headerDoctor', $data);
        $this->load->view('Template/dash_barDoctor', $data);
        
        $data['event'] = $this->M_article->getArticleById( $id );
        $this->load->view('V_articleEdit', $data);
        $this->load->view('Template/dash_footer');
    }
// end edit

// detail article
    public function detailArticle() {

        $dataadmin['admin'] = $this->db->get_where('admin', ['email' => $this->session->userData('email')])->row_array();
        $data['title'] = 'Article Data';

        $data['article'] = $this->M_event->getAllArticle();

        $this->load->view('Template/dash_headerDoctor', $data);
        $this->load->view('Template/dash_barDoctor', $dataadmin);
        $this->load->view('V_articleDetail', $data);
        $this->load->view('Template/dash_footer');

    }
// end detail

// delete article
    public function deletedArticle() {

    }
// end delete
}