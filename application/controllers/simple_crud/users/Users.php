<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Users extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->model('simple_crud/AuthenticationModel', 'Authenticate');
            $this->load->model('simple_crud/UsersModel', 'Users');

            $this->Authenticate->users();
        }

        public function index() {
            $usersList = $this->Users->usersList();

            // Parameters
            $viewsData = array(
                "document" => array(
                    "title" => "| ",
                    "css"=> "Users",
                    "script"=> "Users"
                ),
                "usersList" => $usersList
            );

            // echo '<script> console.log(`Views Data: `, ' . json_encode($viewsData) . '); </script>';

            // Views
            $this->load->view('simple_crud/components/Header', $viewsData);
            $this->load->view('simple_crud/users/Users', $viewsData);
            $this->load->view('simple_crud/components/Footer', $viewsData);
        }
    }