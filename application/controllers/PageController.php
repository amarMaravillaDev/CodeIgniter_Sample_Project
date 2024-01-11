<?php 
// Added by Amar Maravilla
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
    public function __construct()
    {
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

    public function demo() {
        echo "This is About Us Page.";

        $this->load->model('StudentModel', 'Student');
        
        $title = $this->Student->demo();

        $data['title'] = $title;

        // $data['title'] = "Demo Page";
        $data['body'] = "Welcome to Demo Page";

        $this->load->view('demo', $data);
    }
}