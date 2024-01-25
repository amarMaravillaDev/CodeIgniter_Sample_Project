<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
                            
    class AuthenticationModel extends CI_Model {
        public function __construct() {
            parent::__construct();

            if($this->session->has_userdata('client')) {
                if($this->session->userdata('client') == '1') {
                    // echo "User";
                }
            }
            else {
                $this->session->set_flashdata('notLogin', 'Log In First.');

                redirect(base_url('login'));
            }
        }               
    }
