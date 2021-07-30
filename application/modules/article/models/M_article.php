<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_article extends CI_Model {

    public function getAllArticle() {

        return $this->db->get('article')->result_array();
    }
    public function getArticleById( $id ) {

        return $this->db->get_where('article', ['id' => $id])->row();
    }

    public function addArticle( $data ) {

        return $this->db->insert('article', $data);
    }
        
}