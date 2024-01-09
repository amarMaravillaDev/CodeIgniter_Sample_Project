<?php
// Added by Amar Maravilla
defined('BASEPATH') or exit('No direct script access allowed');

class PageController extends CI_Controller {  
  public function __construct() {
    parent::__construct();
  }

  public function index() {
    echo "This is Home Page.";
  }

  public function aboutus() {
    echo "This is About Us Page.";
  }

  public function blog($blogID = '') {
    echo $blogID;
    
    $this->load->view('blog');
  }
}