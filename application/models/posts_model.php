<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class posts_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

	public function create_post(){
        $title = $this->input->post('blog_title');
        $slug = url_title($title, 'dash', true);
        $data = array(
            'blog_title' => $this->input->post('blog_title'),
            'slug' => $slug,
            'blog_image' => $this->input->post('blog_image'),
            'blog_paragraph' => $this->input->post('blog_paragraph'),
            'category' => $this->input->post('category')
        );
        

        return  $this->db->insert('blogs' , $data);
    }

    public function fetch_data(){
           $query = $this->db->get('blogs');  
           return $query->result(); 
    }
}



