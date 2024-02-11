<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Users extends CI_Controller {
        public function __construct() {
            parent::__construct();

            // Helpers
            $this->load->helper('form');
            
            // Models
            $this->load->model('simple_crud/AuthenticationModel', 'Authenticate');
            $this->load->model('simple_crud/UsersModel', 'Users');

            // Libraries
            $this->load->library('form_validation');
            $this->load->library('pagination');

            $this->Authenticate->users();
        }

        public function index() {
            // Pagination
            $pageFilters = array(
                "5",
                "10",
                "20",
                "50",
                "100"
            );
            $pageFilter = 0;
            $page = 0;
            $startIndex = 0;
            $totalRows = 0;

            if($this->input->get('page')) {
                $page = $this->input->get('page');
            }

            if($this->input->get('usersFilter')) {
                $pageFilter = $this->input->get('usersFilter');
            }

            if($page != 0) {
                $startIndex = $pageFilter * ($page - 1);
            }

            // echo '<script> console.log(`Page (Controller): `, ' . json_encode($page) . '); </script>';
            // echo '<script> console.log(`Page Filter (Controller): `, ' . json_encode($pageFilter) . '); </script>';
            // echo '<script> console.log(`Start Index (Controller): `, ' . json_encode($startIndex) . '); </script>';

            if($this->input->get('usersSearch')) {
                $searchFor = $this->input->get('usersSearch');

                $usersListSeeds = $this->Users->searchUsers($pageFilter, $startIndex, $searchFor, $rowCount = 0);
                $totalRows = $this->Users->searchUsers("", "", $searchFor, $rowCount = 1);
            }
            else {
                $usersListSeeds = $this->Users->searchUsers($pageFilter, $startIndex, "", $rowCount = 0);
                $totalRows = $this->Users->searchUsers("", "", "", $rowCount = 1);
            }

            // Pagination Configurations
            $paginationConfig['base_url'] = base_url('simple_crud/users');
            $paginationConfig['attributes'] = array('class' => 'page-link fs-6 p-3 px-4 border-0 btn btn-primary d-flex justify-content-center align-items-center gap-2');
            $paginationConfig['total_rows'] = $totalRows;
            $paginationConfig['per_page'] = $pageFilter;
            $paginationConfig['num_links'] = 2;
            $paginationConfig['enable_query_strings'] = TRUE;
            $paginationConfig['use_page_numbers'] = TRUE;
            $paginationConfig['page_query_string'] = TRUE;
            $paginationConfig['query_string_segment'] = 'page';
            $paginationConfig['reuse_query_string'] = TRUE;
            $paginationConfig['full_tag_open'] = '<ul class="pagination pagination-lg justify-content-center flex-wrap align-items-center gap-1 m-0">';
            $paginationConfig['full_tag_close'] = '</ul>';
            $paginationConfig['first_link'] = '<i class="fa-solid fa-angles-left"></i> First';
            $paginationConfig['first_tag_open'] = '<li class="page-item">';
            $paginationConfig['first_tag_close'] = '</li>';
            $paginationConfig['prev_link'] = '<i class="fa-solid fa-angle-left"></i> Previous';
            $paginationConfig['prev_tag_open'] = '<li class="page-item">';
            $paginationConfig['prev_tag_close'] = '</li>';
            $paginationConfig['next_link'] = 'Next <i class="fa-solid fa-angle-right"></i>';
            $paginationConfig['next_tag_open'] = '<li class="page-item">';
            $paginationConfig['next_tag_close'] = '</li>';
            $paginationConfig['last_link'] = 'Last <i class="fa-solid fa-angles-right"></i>';
            $paginationConfig['last_tag_open'] = '<li class="page-item">';
            $paginationConfig['last_tag_close'] = '</li>';
            $paginationConfig['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link fs-6 p-3 px-4 border-0 btn btn-primary">';
            $paginationConfig['cur_tag_close'] = '</a></li>';
            $paginationConfig['num_tag_open'] = '<li class="page-item">';
            $paginationConfig['num_tag_close'] = '</li>';

            // Initialize the Pagination
            $this->pagination->initialize($paginationConfig);

            // echo '<script> console.log(`Pagination: `, ' . json_encode($pagination) . '); </script>';

            // Table
            // $usersListSeeds = $this->Users->usersListSeeds();
            // $usersList = $this->Users->usersList();

            // Table Columns to be shown
            $tableColumns = array(
                "FIRST NAME",
                "MIDDLE NAME",
                "LAST NAME",
                "SUFFIX",
                "GENDER",
                "BIRTH DATE",
                "AGE",
                "CONTACT NUMBER",
                "EMAIL ADDRESS"
            );

            // Table Columns not to be shown
            $tableColumnsNotShown = array(
                "USERS_ID",
                "USER_TYPE",
                "PASSWORD",
                "CREATED_DATE",
            );

            // Parameters
            $viewsData = array(
                "document" => array(
                    "title" => "| ",
                    "css"=> "Users",
                    "script"=> "Users"
                ),
                "usersSeedsTable" => array(
                    "tableData" => $usersListSeeds,
                    "tableColumns" => $tableColumns,
                    "tableColumnsNotShown" => $tableColumnsNotShown
                ),
                // "usersTable" => array(
                //     "tableData" => $usersList,
                //     "tableColumns" => $tableColumns,
                //     "tableColumnsNotShown" => $tableColumnsNotShown
                // ),
                "page" => $page,
                "pageFilters" => $pageFilters,
                "paginationLinks" => $this->pagination->create_links()  
            );

            // echo '<script> console.log(`Views Data: `, ' . json_encode($viewsData) . '); </script>';

            // Views
            $this->load->view('simple_crud/components/Header', $viewsData);
            $this->load->view('simple_crud/users/Users', $viewsData);
            $this->load->view('simple_crud/components/Footer', $viewsData);
        }
    }