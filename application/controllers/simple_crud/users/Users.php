<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Users extends CI_Controller {
        public function __construct() {
            parent::__construct();
        }

        public function index() {
            // Parameters
            $viewsData = array(
                "document" => array(
                    "title" => "| Register",
                    "css"=> "Register",
                    "script"=> "Register"
                )
            );

            // Views
            $this->load->view('simple_crud/components/Header', $viewsData);
            $this->load->view('simple_crud/users/Users', $viewsData);
            $this->load->view('simple_crud/components/Footer', $viewsData);
        }
    }