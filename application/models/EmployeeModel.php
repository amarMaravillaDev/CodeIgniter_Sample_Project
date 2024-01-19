<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
                            
    class EmployeeModel extends CI_Model {
        public function getEmployee() {
            $query = $this->db->get('EMPLOYEE_DATA');

            return $query->result();
        }
        public function createEmployee($employeeData) {
            return $this->db->insert('EMPLOYEE_DATA', $employeeData);
        }           
        
        public function editEmployee($employeeID) {
            $query = $this->db->get_where('EMPLOYEE_DATA', array('EMPLOYEE_ID' => $employeeID));

            return $query->row();
        }

        public function updateEmployee($employeeData, $employeeID) {
            $query = $this->db->update('EMPLOYEE_DATA', $employeeData, array('EMPLOYEE_ID' => $employeeID));
            
            return $query;
        }

        public function deleteEmployee($employeeID) {
            $query = $this->db->delete('EMPLOYEE_DATA', array('EMPLOYEE_ID' => $employeeID));

            return $query;
        }
    }
