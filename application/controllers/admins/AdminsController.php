<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');

    class AdminsController extends CI_Controller { 
        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $this->load->view('template/Header');
            $this->load->view('admins/AdminsView');
            $this->load->view('template/Footer');
        }
    }