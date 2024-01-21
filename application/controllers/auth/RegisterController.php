<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');

    class RegisterController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->load->model('UsersModel');
        }

        public function index(){
            $this->load->view('template/Header');
            $this->load->view('auth/RegisterView');
            $this->load->view('template/Footer');
        }

        public function register(){
            $this->form_validation->set_rules('regFirstName', 'First Name', 'trim|required|alpha');
            $this->form_validation->set_rules('regLastName', 'Last Name', 'trim|required|alpha');
            $this->form_validation->set_rules('regEmailAddress', 'Email Address', 'trim|required|valid_email|is_unique[USERS.EMAIL_ADDRESS]');
            $this->form_validation->set_rules('regPassword', 'Password', 'trim|required');
            $this->form_validation->set_rules('regConfirmPassword', 'Confirm Password', 'trim|required|matches[regPassword]');
        
            if($this->form_validation->run() == FALSE) {
                $this->index();
            }
            else {
                $usersData = array(
                    'FIRST_NAME' => $this->input->post('regFirstName'),
                    'LAST_NAME' => $this->input->post('regLastName'),
                    'EMAIL_ADDRESS' => $this->input->post('regEmailAddress'),
                    'PASSWORD' => $this->input->post('regPassword')
                );

                $regUser = new UsersModel;
                $checkRegister = $regUser->registerUser($usersData);

                if($checkRegister) {
                    $this->session->set_flashdata('status','User Registered Successfully.');

                    redirect(base_url('login'));
                }
                else {
                    $this->session->set_flashdata('status','User Registration Failed, Something Went Wrong.');

                    redirect(base_url('register'));
                }
            }
        }
    }
