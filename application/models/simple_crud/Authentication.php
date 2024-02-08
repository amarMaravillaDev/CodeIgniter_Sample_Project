<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->has_userdata('userType')) {
            $this->session->set_flashdata('loginToast', array('toastStatus' => 'warning', 'toastMessage' => 'Log In First.'));

            redirect(base_url('simple_crud/login'));
        }
    }

    public function users()
    {
        if ($this->session->has_userdata('userType')) {
            if ($this->session->userdata('userType') == '1') {
            }
        } else {
            $this->session->set_flashdata('loginToast', array('toastStatus' => 'warning', 'toastMessage' => 'Log In First.'));

            redirect(base_url('simple_crud/login'));
        }
    }
}