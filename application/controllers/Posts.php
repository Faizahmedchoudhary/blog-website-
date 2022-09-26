<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function create()
	{
        $this->form_validation->set_rules('blog_title' , 'Title' , 'required');
        $this->form_validation->set_rules('blog_image' , 'Image' , 'required');
        $this->form_validation->set_rules('blog_paragraph' , 'Paragraph' , 'required');


        if ($this->form_validation->run() === FALSE) {

            $this->load->view('templates/header');
            $this->load->view('posts/create');
            $this->load->view('templates/footer');
            
        }

        else{
            $this->posts_model->create_post();
            $this->session->set_flashdata('form_sucess' , 'Form Submitted Successfully');
        }
	}

     
	public function view($slug = NULL)
	{
        $data['post'] = $this->showpost_model->view_post($slug) ;

        

        $this->load->view('templates/header');
        $this->load->view('posts/view' , $data);
        $this->load->view('templates/footer');
	

	}

  
    
}
