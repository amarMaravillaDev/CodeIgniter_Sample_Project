<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
                            
    class EmployeeModel extends CI_Model {
        public function getEmployee() {
            $query = $this->db->get('EMPLOYEE_DATA');

            return $query->result();
        }
        public function insertEmployee($employeeData) {
            return $this->db->insert('EMPLOYEE_DATA', $employeeData);
        }                  
    }
