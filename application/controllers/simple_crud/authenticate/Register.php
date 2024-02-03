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
            // Costume Error Message
            $costumeErrorMessage = array(
                "is_unique" => "The {field} \"" . $this->input->post('regEmailAddress') . "\" is already exists."
            );

            // Form Validations |callback_validateAge
            $this->form_validation->set_rules('regFirstName', 'First Name', 'trim|required|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regMiddleName', 'Middle Name', 'trim|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regLastName', 'Last Name', 'trim|required|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regSuffix', 'Suffix', 'trim|alpha|min_length[2]|max_length[30]');
            $this->form_validation->set_rules('regGender', 'Gender', 'trim|required');
            $this->form_validation->set_rules('regBirthDate', 'Birth Date', 'trim|required|callback_validateBirthDate');
            $this->form_validation->set_rules('regAge', 'Age', 'trim|callback_validateAge');
            $this->form_validation->set_rules('regContactNumber', 'Contact Number', 'trim|required|callback_validateContactNumber');
            $this->form_validation->set_rules('regEmailAddress', 'Email Address', 'trim|required|valid_email|is_unique[SIMPLE_CRUD_USERS.EMAIL_ADDRESS]', $costumeErrorMessage);
            $this->form_validation->set_rules('regPassword', 'Password', 'trim|required|min_length[8]|max_length[30]|callback_validatePassword');
            $this->form_validation->set_rules('regConfirmPassword', 'Confirm Password', 'trim|required|matches[regPassword]');

            if($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('register', 'register');

                $this->index();
            }
            else {
                $usersData = array(
                    'FIRST_NAME' => $this->input->post('regFirstName'),
                    'MIDDLE_NAME' => $this->input->post('regMiddleName'),
                    'LAST_NAME' => $this->input->post('regLastName'),
                    'SUFFIX' => $this->input->post('regSuffix'),
                    'GENDER' => $this->input->post('regGender'),
                    'BIRTH_DATE' => $this->input->post('regBirthDate'),
                    'AGE' => $this->input->post('regAge'),
                    'CONTACT_NUMBER' => $this->input->post('regContactNumber'),
                    'EMAIL_ADDRESS' => $this->input->post('regEmailAddress'),
                    'PASSWORD' => $this->input->post('regPassword')
                );

                $registerUser = new UsersModel;
                $register = $registerUser->register($usersData);

                if($register) {
                    $this->session->set_flashdata('registerSuccess','User Registered Successfully.');

                    redirect(base_url('simple_crud/register'));
                }
                else {
                    $this->session->set_flashdata('registerFailed','User Registration Failed, Something Went Wrong.');

                    redirect(base_url('simple_crud/register'));
                }
            }
        }

        public function validateBirthDate($regBirthDate = "") {
            if($regBirthDate) {
                if (strtotime($regBirthDate) === FALSE) {
                    $this->form_validation->set_message('validateBirthDate', 'The {field} field must contain a valid birth date.');
                    
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
                    return TRUE;
                }
            }
            else {
                $this->form_validation->set_message('validateAge', 'The {field} field is required.');

                return FALSE;
            }
            
            return TRUE;
        }

        public function validateContactNumber($regContactNumber) {
            if($regContactNumber) {
                if(preg_match('/^(\+63|\(?\+63\)?)([2-9]\d{2})\s?\d{7}$/', $regContactNumber)) {
                    return TRUE;
                } 
                else {
                    $this->form_validation->set_message('validateContactNumber', 'The {field} field must contain a valid contact number.');
    
                    return FALSE;
                }
            }

            return TRUE;
        }

        public function validatePassword($regPassword) {
            if($regPassword) {
                if(!preg_match('/^(?=.*[a-z]).*$/', $regPassword)) {
                    $this->form_validation->set_message('validatePassword', 'The {field} field must contain atleast 1 lower case letter.');
    
                    return FALSE;
                }
                else if(!preg_match('/^(?=.*[A-Z]).*$/', $regPassword)) {
                    $this->form_validation->set_message('validatePassword', 'The {field} field must contain atleast 1 upper case letter.');
    
                    return FALSE;
                }
                else if(!preg_match('/^(?=.*\d).*$/', $regPassword)) {
                    $this->form_validation->set_message('validatePassword', 'The {field} field must contain atleast 1 number.');
    
                    return FALSE;
                }
                else if(!preg_match('/^(?=.*\W).*$/', $regPassword)) {
                    $this->form_validation->set_message('validatePassword', 'The {field} field must contain atleast 1 special character.');
    
                    return FALSE;
                }
                else {
                    return TRUE;
                }
            }

            return TRUE;
        }
    }