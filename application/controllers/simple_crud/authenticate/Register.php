<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Register extends CI_Controller {
        public function __construct() {
            parent::__construct();

            // Helpers
            $this->load->helper('form');

            // Libraries
            $this->load->library('form_validation');

            // Models
            $this->load->model('simple_crud/UsersModel', 'Users');
        }

        public function index() {
            // Views
            $this->load->view('simple_crud/components/Header');
            $this->load->view('simple_crud/authenticate/Register');
            $this->load->view('simple_crud/components/Footer');
        }

        public function register() {
            // Form Validations
            $this->form_validation->set_rules('regFirstName', 'First Name', 'trim|required|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regMiddleName', 'First Name', 'trim|required|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regLastName', 'First Name', 'trim|required|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regSuffix', 'First Name', 'trim|alpha|min_length[2]|max_length[30]');

            if($this->form_validation->run() == FALSE) {
                $this->index();
            }
            else {
                redirect(base_url('register'));
            }
        }
    }