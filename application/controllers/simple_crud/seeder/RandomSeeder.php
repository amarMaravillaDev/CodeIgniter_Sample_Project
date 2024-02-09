<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class RandomSeeder extends CI_Controller {
        public function __construct() {
            parent::__construct();

            // Model
            $this->load->model('simple_crud/SeederModel', 'Seeder');
        }

        public function index() {

        }

        public function seed() {
            $tableName = 'SIMPLE_CRUD_USERS_SEEDS'; 
            $recordLimit = 50;

            $this->Seeder->seedData($tableName, $recordLimit);
        }
    }