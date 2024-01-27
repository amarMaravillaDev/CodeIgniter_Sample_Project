<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
                            
    class AuthenticationModel extends CI_Model {
        public function __construct() {
            parent::__construct();

            if($this->session->has_userdata('userType')) {
                if($this->session->userdata('userType') == '1') {
                    // echo "User";
                }
            }
            else {
                $this->session->set_flashdata('notLogin', 'Log In First.');

                redirect(base_url('login'));
            }
        }    
        
        public function checkAdmin() {
            if($this->session->has_userdata('userType')) {
                if($this->session->userdata('userType') != '2') {
                    $this->session->set_flashdata('adminFailed', 'Access Denied. You are Not an Admin.');

                    redirect(base_url('access_denied'));
                }
            }
            else {
                $this->session->set_flashdata('notLogin', 'Log In First.');

                redirect(base_url('login'));
            }
        }
    }
