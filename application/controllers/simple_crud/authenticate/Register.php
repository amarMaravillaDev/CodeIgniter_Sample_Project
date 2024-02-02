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
            $this->session->set_flashdata('register', 'register');

            // Form Validations
            $this->form_validation->set_rules('regFirstName', 'First Name', 'trim|required|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regMiddleName', 'Middle Name', 'trim|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regLastName', 'Last Name', 'trim|required|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regSuffix', 'Suffix', 'trim|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regGender', 'Gender', 'trim|required');
            $this->form_validation->set_rules('regBirthDate', 'Birth Date', 'trim|required|callback_validateBirthDate');
            $this->form_validation->set_rules('regAge', 'Age', 'trim|required|less_than[100]|greater_than[18]');

            if($this->form_validation->run() == FALSE) {
                $this->index();
            }
            else {
                redirect(base_url('register'));
            }
        }

        public function validateBirthDate($regBirthDate = "") {
            if($regBirthDate) {
                if (strtotime($regBirthDate) === FALSE) {
                    echo '<script> console.log(`BDate: ' . json_encode($regBirthDate) . '`); </script>';
                    $this->form_validation->set_message('validateBirthDate', 'The {field} field must be a valid date.');
                    
                    return FALSE;
                }
            }
        
            return TRUE;
        }
    }