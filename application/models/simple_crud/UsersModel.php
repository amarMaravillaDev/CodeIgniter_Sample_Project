<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');
                            
    class UsersModel extends CI_Model {
        public function register($usersData) {
            return $this->db->insert('SIMPLE_CRUD_USERS', $usersData);
        }

        public function login($usersData){
            $this->db->select('*');
            $this->db->where('EMAIL_ADDRESS', $usersData['EMAIL_ADDRESS']);
            $this->db->from('SIMPLE_CRUD_USERS');
            $this->db->limit(1);

            $query = $this->db->get();

            if($query->num_rows() == 1){
                return $query->row();
            }
            else {
                return FALSE;
            }
        }

        // public function usersListSeeds() {
        //     $query = $this->db->get('SIMPLE_CRUD_USERS_SEEDS');

        //     return $query->result_array();
        // }

        // public function usersList() {
        //     $query = $this->db->get('SIMPLE_CRUD_USERS');

        //     return $query->result_array();
        // }

        public function searchUsers($sortBy = "", $orderBy = "", $rowFilter = "", $startIndex = "", $searchFor = "", $rowCount = FALSE) {
            // echo '<script> console.log(`Page Filter (Model): `, ' . json_encode($rowFilter) . '); </script>';
            // echo '<script> console.log(`Start Index (Model): `, ' . json_encode($startIndex) . '); </script>';

            if($rowFilter != "" || $startIndex != "") {
                $this->db->limit($rowFilter, $startIndex);
            }

            if($searchFor) {
                $this->db->like('FIRST_NAME', $searchFor, 'both');
                $this->db->or_like('MIDDLE_NAME', $searchFor, 'both');
                $this->db->or_like('LAST_NAME', $searchFor, 'both');
                $this->db->or_like('SUFFIX', $searchFor, 'both');
                $this->db->or_like('GENDER', $searchFor, 'both');
                $this->db->or_like('BIRTH_DATE', $searchFor, 'both');
                $this->db->or_like('AGE', $searchFor, 'both');
                $this->db->or_like('CONTACT_NUMBER', $searchFor, 'both');
                $this->db->or_like('EMAIL_ADDRESS', $searchFor, 'both');
            }

            if($sortBy && $orderBy) {
                $this->db->order_by($sortBy, $orderBy);
            }

            if($rowCount == TRUE) {
                $query = $this->db->get('SIMPLE_CRUD_USERS_SEEDS');

                return $query->num_rows();
            }
            else {
                $query = $this->db->get('SIMPLE_CRUD_USERS_SEEDS');

                return $query->result_array();
            }
        }
    }