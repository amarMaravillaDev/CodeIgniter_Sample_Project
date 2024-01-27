<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');

    class LogoutController extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->model('AuthenticationModel', 'Authenticate');
        }

        public function index() {

        }

        public function logout() {
            $this->session->unset_userdata('userType');
            $this->session->unset_userdata('usersDetails');

            $this->session->set_flashdata('logoutSuccess', 'You are Logged Out Successfully.');

            return redirect('login');
        }
    }
