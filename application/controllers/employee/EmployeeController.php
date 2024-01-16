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

        public function store() {
            $this->form_validation->set_rules('employeeFirstName', 'First Name', 'required');
            $this->form_validation->set_rules('employeeLastName', 'Last Name', 'required');
            $this->form_validation->set_rules('employeePhoneNumber', 'Phone Number', 'required');
            $this->form_validation->set_rules('employeeEmailAddress', 'Email Address', 'required');

            if($this->form_validation->run()) {
                $employeeData = array(
                    'FIRST_NAME' => $this->input->post('employeeFirstName'),
                    'LAST_NAME' => $this->input->post('employeeLastName'),
                    'PHONE_NUMBER' => $this->input->post('employeePhoneNumber'),
                    'EMAIL_ADDRESS' => $this->input->post('employeeEmailAddress')
                );

                $this->load->model('EmployeeModel', 'Employee');

                $this->Employee->insertEmployee($employeeData);

                redirect(base_url('employee'));
            }
            else {
                $this->create();
                
                // redirect(base_url('employee/add'));
            }

            // var_dump($employeeData);
            // echo json_encode($employeeDat);
        }
    }
