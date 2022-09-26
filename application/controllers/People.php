<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

	public function divya()
	{
        $this->load->model('categories_model');
        $data['categories']  = $this->categories_model->view_categories();
        $data['title'] = 'Categories';


        $data['recent'] = 'Recent Post';
        $data['recentpost']  = $this->categories_model->recentpost();
        


        $this->load->view('templates/header');
        $this->load->view('people/divya', $data);
        $this->load->view('templates/footer');
    }
	public function aditya()
	{
        $this->load->model('categories_model');
        $data['categories']  = $this->categories_model->view_categories();
        $data['title'] = 'Categories';


        $data['recent'] = 'Recent Post';
        $data['recentpost']  = $this->categories_model->recentpost();
        
        $this->load->view('templates/header');
        $this->load->view('people/aditya', $data);
        $this->load->view('templates/footer');
    }

}