<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pages extends CI_Controller {
  

    
	public function index()
	{
		$data['title'] = 'Latest Posts';

		$data['posts'] = $this->posts_model->fetch_data();

        $this->load->view('templates/header');
        $this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
		
	}
}
