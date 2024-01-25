<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');

    class UsersController extends CI_Controller { 
        public function __construct() {
            parent::__construct();

            $this->load->model('AuthenticationModel', 'Authenticate');
        }

        public function index() {
            $this->load->view('template/Header');
            $this->load->view('users/UsersView');
            $this->load->view('template/Footer');
        }
    }