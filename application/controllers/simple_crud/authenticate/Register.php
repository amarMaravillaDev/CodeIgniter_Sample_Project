<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Register extends CI_Controller {
        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $this->load->view('simple_crud/components/Header');
            $this->load->view('simple_crud/authenticate/Register');
            $this->load->view('simple_crud/components/Footer');
        }

        public function register() {

        }
    }