<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showpost extends CI_Controller {
     public function cricket(){
      
      $data['title'] = 'Cricket';
      $data['posts']  = $this->showpost_model->cricket_post();

         $this->load->view('templates/header');
         $this->load->view('showpost/cricket' , $data);
         $this->load->view('templates/footer');
     }

     public function finance(){
        
      $data['title'] = 'Finance';
      $data['posts']  = $this->showpost_model->finance_post();

        $this->load->view('templates/header');
        $this->load->view('showpost/finance' , $data);
        $this->load->view('templates/footer');
     }

     public function sports(){
        
      $data['title'] = 'Sports';
      $data['posts']  = $this->showpost_model->sports_post();

        $this->load->view('templates/header');
        $this->load->view('showpost/sports' , $data);
        $this->load->view('templates/footer');
     }

     public function ipo(){
        
      $data['title'] = 'Ipo';
      $data['posts']  = $this->showpost_model->ipo_post();

        $this->load->view('templates/header');
        $this->load->view('showpost/ipo' , $data);
        $this->load->view('templates/footer');
     }

     public function football(){
        
      $data['title'] = 'FootBall';
      $data['posts']  = $this->showpost_model->football_post();

           
        $this->load->view('templates/header');
        $this->load->view('showpost/football', $data);
        $this->load->view('templates/footer');
     }

     public function politics(){
        
      $data['title'] = 'Politics';
      $data['posts']  = $this->showpost_model->politics_post();

        $this->load->view('templates/header');
        $this->load->view('showpost/politics' , $data);
        $this->load->view('templates/footer');
     }
}

?>