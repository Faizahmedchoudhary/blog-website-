<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function  create(){
        $data['title'] = 'Add a Categories';
        $data['view'] = $this->categories_model->view_categories();
     


        $this->form_validation->set_rules('category_name' , 'Category Name', 'required');
        $this->form_validation->set_rules('category_description' , 'Category Desciption', 'required');
        $this->form_validation->set_rules('category_slug' , 'Category Slug', 'required');

    

        if ($this->form_validation->run() == False) 
        {           
            $this->load->view('templates/header');
            $this->load->view('categories/create_categories' , $data);
            $this->load->view('templates/footer');
        }

        else{
            $this->categories_model->create_categories();
        }
    }

   
}

?>