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

            // Form Validations |callback_validateAge
            $this->form_validation->set_rules('regFirstName', 'First Name', 'trim|required|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regMiddleName', 'Middle Name', 'trim|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regLastName', 'Last Name', 'trim|required|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regSuffix', 'Suffix', 'trim|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regGender', 'Gender', 'trim|required');
            $this->form_validation->set_rules('regBirthDate', 'Birth Date', 'trim|required|callback_validateBirthDate');
            $this->form_validation->set_rules('regAge', 'Age', 'trim|required|callback_validateAge');

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
                    $this->form_validation->set_message('validateBirthDate', 'The {field} field must be a valid date.');
                    
                    return FALSE;
                }
            }

            // echo '<script> console.log(`Birth Date: ' . json_encode($regBirthDate) . '`); </script>';
        
            return TRUE;
        }

        public function validateAge($regAge) {
            $today = new DateTime();
            $birthDate = new DateTime($this->input->post('regBirthDate'));
            $age = "";

            $age = $today->diff($birthDate)->y;

            // echo '<script> console.log(`Age: ' . json_encode($age) . '`); </script>';

            if($this->input->post('regBirthDate')) {
                if($age < 18) {
                    $this->form_validation->set_message('validateAge', 'The {field} must contain a number greater than 18.');
    
                    return FALSE;
                }
                else if($age > 100) {
                    $this->form_validation->set_message('validateAge', 'The {field} must contain a number less than 100.');
    
                    return FALSE;
                }
                else {
                    $this->form_validation->set_message('validateAge', '');

                    return FALSE;
                }
            }
            
            return TRUE;
        }
    }