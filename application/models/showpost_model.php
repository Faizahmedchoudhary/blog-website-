<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class showpost_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

  
    
    public function view_post($slug = 'False')
    {	
     if ($slug == 'False') {
         
     }
     else{

         // return $this->db->select('*')
         // ->from('blogs')
         // ->where('slug' , $slug)
         // ->get()
         // ->result();
         
         $query = $this->db->get_where('blogs', array('slug' => $slug));
         return $query->row_array();
        }
    }

  

    public function cricket_post()
    {	
     
        return $this->db->select('*')
        ->from('blogs')
        ->where('category','Cricket')
        ->get()
        ->result();
    }
    
    public function finance_post()
    {	
     
        return $this->db->select('*')
        ->from('blogs')
        ->where('category','Finance')
        ->get()
        ->result();
    }

    public function football_post()
    {	
     
        return $this->db->select('*')
        ->from('blogs')
        ->where('category','FootBall')
        ->get()
        ->result();
    }
    
    public function sports_post()
    {	
     
        return $this->db->select('*')
        ->from('blogs')
        ->where('category','Sports')
        ->get()
        ->result();
    }
    public function ipo_post()
    {	
     
        return $this->db->select('*')
        ->from('blogs')
        ->where('category','Ipo')
        ->get()
        ->result();
    }

    public function politics_post()
    {	
     
        return $this->db->select('*')
        ->from('blogs')
        ->where('category','Politics')
        ->get()
        ->result();
    }

  
}