<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');
                            
    class UsersModel extends CI_Model {
        public function registerUser($usersData){
            return $this->db->insert('USERS', $usersData);                
        }               
    }
    
                        