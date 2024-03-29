<?php
// Amar
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Check the Session
        if ($this->session->has_userdata('userType')) {
            $this->session->set_flashdata(
                'usersToast',
                array(
                    'toastStatus' => 'primary',
                    'toastMessage' => 'You are Already Logged In.',
                    'toastIcon' => 'info',
                    'toastShow' => TRUE,
                )
            );

            redirect(base_url('simple_crud/users'));
        }

        // Helpers
        $this->load->helper('form');

        // Libraries
        $this->load->library('form_validation');

        // Models
        $this->load->model('simple_crud/UsersModel', 'Users');
    }

    public function index()
    {
        // Parameters
        $viewsData = array(
            "documentData" => array(
                "title" => "| Login",
                "css" => "Login",
                "script" => "Login"
            )
        );

        // Views
        $this->load->view('simple_crud/components/Header', $viewsData);
        $this->load->view('simple_crud/authenticate/Login', $viewsData);
        $this->load->view('simple_crud/components/Footer', $viewsData);
    }

    public function login()
    {
        $this->form_validation->set_rules(
            'loginEmailAddress',
            'Email Address',
            'trim|required|valid_email'
        );
        $this->form_validation->set_rules(
            'loginPassword',
            'Password',
            'trim|required'
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('login', 'login');

            $this->index();
        } else {
            $usersData = array(
                'EMAIL_ADDRESS' => $this->input->post('loginEmailAddress'),
                'PASSWORD' => $this->input->post('loginPassword')
            );

            $loginUser = new UsersModel;

            $response = $loginUser->login($usersData);

            if ($response != FALSE) {
                if (password_verify($this->input->post('loginPassword'), $response->PASSWORD)) {
                    $usersDetails = array(
                        "usersID" => $response->USERS_ID,
                        "firstName" => $response->FIRST_NAME,
                        "middleName" => $response->MIDDLE_NAME,
                        "lastName" => $response->LAST_NAME,
                        "suffix" => $response->SUFFIX,
                        "gender" => $response->GENDER,
                        "birthDate" => $response->BIRTH_DATE,
                        "age" => $response->AGE,
                        "contactNumber" => $response->CONTACT_NUMBER,
                        "emailAddress" => $response->EMAIL_ADDRESS,
                        // "PASSWORD" => $response->PASSWORD
                    );

                    $this->session->set_userdata('userType', $response->USER_TYPE);
                    $this->session->set_userdata('usersDetails', $usersDetails);

                    $this->session->set_flashdata(
                        'usersToast',
                        array(
                            'toastStatus' => 'success',
                            'toastMessage' => 'You are Logged In Successfully.',
                            'toastIcon' => 'check_circle',
                            'toastShow' => TRUE,
                        )
                    );

                    redirect(base_url('simple_crud/users'));
                } else {
                    $this->session->set_flashdata(
                        'loginToast',
                        array(
                            'toastStatus' => 'danger',
                            'toastMessage' => 'Invalid Email or Password.',
                            'toastIcon' => 'error',
                            'toastShow' => TRUE,
                        )
                    );

                    redirect(base_url('simple_crud/login'));
                }
            } else {
                $this->session->set_flashdata(
                    'loginToast',
                    array(
                        'toastStatus' => 'danger',
                        'toastMessage' => 'Invalid Email or Password.',
                        'toastIcon' => 'error',
                        'toastShow' => TRUE,
                    )
                );

                redirect(base_url('simple_crud/login'));
            }
        }
    }
}