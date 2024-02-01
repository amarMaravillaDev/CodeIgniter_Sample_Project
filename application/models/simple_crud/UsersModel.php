<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');
                            
    class UsersModel extends CI_Model {
        public function register($usersData) {
            return $this->db->insert('SIMPLE_CRUD_USERS', $usersData);
        }
    }