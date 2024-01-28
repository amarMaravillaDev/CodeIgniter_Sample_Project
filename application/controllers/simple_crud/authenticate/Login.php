<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
        }

        public function index() {
            $this->load->view('simple_crud/components/Header');
            $this->load->view('simple_crud/authenticate/Login');
            $this->load->view('simple_crud/components/Footer');
        }

        public function login() {
            
        }
    }