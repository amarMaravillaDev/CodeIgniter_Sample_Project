<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Users extends CI_Controller {
        public function __construct() {
            parent::__construct();

            // $this->load->model('AuthenticationModel', 'Authenticate');
        }

        public function index() {
            // Parameters
            $viewsData = array(
                "document" => array(
                    "title" => "| ",
                    "css"=> "Users",
                    "script"=> "Users"
                )
            );

            // Views
            $this->load->view('simple_crud/components/Header', $viewsData);
            $this->load->view('simple_crud/users/Users', $viewsData);
            $this->load->view('simple_crud/components/Footer', $viewsData);
        }
    }