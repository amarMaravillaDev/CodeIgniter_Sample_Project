<?php 
    // Amar
    defined('BASEPATH') OR exit('No direct script access allowed');
                            
    class UsersModel extends CI_Model {
        public function registerUser($usersData){
            return $this->db->insert('USERS', $usersData);                
        }           
        
        public function loginUser($usersData){
            $this->db->select('*');
            $this->db->where('EMAIL_ADDRESS', $usersData['EMAIL_ADDRESS']);
            $this->db->where('PASSWORD', $usersData['PASSWORD']);
            $this->db->from('USERS');
            $this->db->limit(1);

            $query = $this->db->get();

            if($query->num_rows() == 1){
                return $query->row();
            }
            else {
                return FALSE;
            }
        }
    }
    
                        