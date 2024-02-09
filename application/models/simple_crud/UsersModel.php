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

        public function usersList() {
            $query = $this->db->get('SIMPLE_CRUD_USERS_SEEDS');

            return $query->result_array();
        }
    }