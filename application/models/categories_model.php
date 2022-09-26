<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categories_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }


        public function create_categories()
        {

            $data = array(
                'category_name' => $this->input->post('category_name'),
                'category_slug' => $this->input->post('category_slug'),
                'category_description' => $this->input->post('category_description')

            );

            $this->db->insert('categories' , $data);
        }

  


        public function view_categories()
        {
             return $this->db->query(' SELECT * FROM categories LIMIT 3; ')
            ->result();
            
        }

        public function recentpost(){
            return  $this->db->query("SELECT * FROM blogs LIMIT 3;")
            ->result();

        }
}




?>