<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');

    class EmployeeController extends CI_Controller {

        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $this->load->view('template/Header');
            $this->load->view('employee/EmployeeView');
            $this->load->view('template/Footer');
        }

        public function create() {
            $this->load->view('template/Header');
            $this->load->view('employee/CreateEmployeeView');
            $this->load->view('template/Footer');
        }
    }
