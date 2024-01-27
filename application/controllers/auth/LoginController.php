<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');

    class LoginController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            if($this->session->has_userdata('userType')) {
                $this->session->set_flashdata('loginAccess', 'You are Already Logged In.');

                redirect(base_url('users'));
            }

            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->load->model('UsersModel');
        }

        public function index() {
            $this->load->view('template/Header');
            $this->load->view('auth/LoginView');
            $this->load->view('template/Footer');
        }

        public function login() {
            $this->session->set_flashdata('login', 'login');
            
            $this->form_validation->set_rules('loginEmailAddress', 'Email Address', 'trim|required|valid_email');
            $this->form_validation->set_rules('loginPassword', 'Password', 'trim|required');

            if($this->form_validation->run() == FALSE) {
                $this->index();
            }
            else {
                $usersData = array(
                    'EMAIL_ADDRESS' => $this->input->post('loginEmailAddress'),
                    'PASSWORD' => $this->input->post('loginPassword')
                );

                $loginUser = new UsersModel;

                $response = $loginUser->loginUser($usersData);

                if($response != FALSE) {
                    $usersDetails = array(
                        "FIRST_NAME" => $response->FIRST_NAME,
                        "LAST_NAME" => $response->LAST_NAME,  
                        "EMAIL_ADDRESS" => $response->EMAIL_ADDRESS
                    );

                    // echo json_encode($usersDetails, JSON_PRETTY_PRINT);

                    $this->session->set_userdata('userType', $response->USER_TYPE);
                    $this->session->set_userdata('usersDetails', $usersDetails);

                    $this->session->set_flashdata('loginSuccess', 'You are Logged In Successfully.');

                    redirect(base_url('users'));
                }
                else {
                    $this->session->set_flashdata('loginFailed', 'Invalid Email or Password.');

                    redirect(base_url('login'));
                }
            }
        }
    }