<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Logout extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->model('simple_crud/Authentication', 'Authenticate');
        }

        public function index() {

        }

        public function logout() {
            $this->session->unset_userdata('userType');
            $this->session->unset_userdata('usersDetails');

            $this->session->set_flashdata('loginToast', array('toastStatus' => 'success', 'toastMessage' => 'You are Logged Out Successfully.'));

            redirect(base_url('simple_crud/login'));
        }
    }