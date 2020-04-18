<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('templates/header'); 
    $this->load->view('about/index'); 
    $this->load->view('templates/footer'); 
  }

}


/* End of file About.php */
/* Location: ./application/controllers/About.php */