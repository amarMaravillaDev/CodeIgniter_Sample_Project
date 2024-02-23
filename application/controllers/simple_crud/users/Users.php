<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
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

    public function index($viewsData = "")
    {
        // Default View Variables
        if (!$viewsData) {
            $activeUsers = $this->Users->activeUsers();
            $inactiveUsers = $this->Users->inactiveUsers();
            $totalRows = $this->Users->searchUsers("", "", "", "", "", TRUE);

            // echo '<script> console.log(`Active: `, ' . json_encode($inactiveUsers) . '); </script>';

            $viewsData = array(
                "view" => "simple_crud/users/DashBoard",
                "cards" => array(
                    "usersList" => array(
                        "cardTotalNumber" => $totalRows,
                        "cardTitle" => "USERS",
                        "cardIcon" => "person",
                        "cardTextColor" => "text-primary"
                    ),
                    "activeUsers" => array(
                        "cardTotalNumber" => $activeUsers,
                        "cardTitle" => "ACTIVE USERS",
                        "cardIcon" => "person_check",
                        "cardTextColor" => "text-success"
                    ),
                    "inactiveUsers" => array(
                        "cardTotalNumber" => $inactiveUsers,
                        "cardTitle" => "INACTIVE USERS",
                        "cardIcon" => "person_cancel",
                        "cardTextColor" => "text-danger"
                    )
                )
            );
        }

        // Main View Variables
        $viewsMainData = array(
            "documentData" => array(
                "title" => "| " . $this->session->userdata('usersDetails')['FIRST_NAME'] . " " . $this->session->userdata('usersDetails')['LAST_NAME'],
                "css" => "",
                "script" => "Users"
            ),
            "viewsData" => $viewsData
        );

        // echo '<script> console.log(`Views Data: `, ' . json_encode($viewsMainData) . '); </script>';

        // Views
        $this->load->view('simple_crud/components/Header', $viewsMainData);
        $this->load->view('simple_crud/users/Users', $viewsMainData);
        $this->load->view('simple_crud/components/Footer', $viewsMainData);
    }

    public function usersList()
    {
        // Pagination
        $pageFilters = array(
            "5",
            "10",
            "20",
            "50",
            "100"
        );

        $startIndex = 0;
        $totalRows = 0;
        $dbTotalRows = $this->Users->searchUsers("", "", "", "", "", TRUE);

        // echo '<script> console.log(`DB Row Count (Controller): `, ' . json_encode($dbTotalRows) . '); </script>';

        $page = $this->input->get('page') ? $this->input->get('page') : 0;
        $rowFilter = $this->input->get('rowFilter') ? $this->input->get('rowFilter') : 0;
        $searchFor = $this->input->get('searchFor') ? $this->input->get('searchFor') : "";
        $sortBy = $this->input->get('sortBy') ? $this->input->get('sortBy') : "USERS_ID";
        $orderBy = $this->input->get('orderBy') ? $this->input->get('orderBy') : "ASC";

        // if($this->input->get('page')) {
        //     $page = $this->input->get('page');
        // }

        // if($this->input->get('rowFilter')) {
        //     $rowFilter = $this->input->get('rowFilter');
        // }

        if ($page != 0) {
            $startIndex = $rowFilter * ($page - 1);
        }

        // echo '<script> console.log(`Page (Controller): `, ' . json_encode($page) . '); </script>';
        // echo '<script> console.log(`Page Filter (Controller): `, ' . json_encode($rowFilter) . '); </script>';
        // echo '<script> console.log(`Start Index (Controller): `, ' . json_encode($startIndex) . '); </script>';

        if ($searchFor) {
            $usersListSeeds = $this->Users->searchUsers($sortBy, $orderBy, $rowFilter, $startIndex, $searchFor, FALSE);
            $totalRows = $this->Users->searchUsers("", "", "", "", $searchFor, TRUE);
        } else {
            $usersListSeeds = $this->Users->searchUsers($sortBy, $orderBy, $rowFilter, $startIndex, "", FALSE);
            $totalRows = $this->Users->searchUsers("", "", "", "", "", TRUE);
        }

        // Pagination Configurations
        $paginationConfig['base_url'] = base_url('simple_crud/users/users_list');
        $paginationConfig['attributes'] = array('class' => 'page-link bg-primary bg-opacity-10 fs-6 p-3 px-4 border-0 btn btn-primary d-flex justify-content-center align-items-center');
        $paginationConfig['total_rows'] = $totalRows;
        $paginationConfig['per_page'] = $rowFilter;
        $paginationConfig['num_links'] = 1;
        $paginationConfig['enable_query_strings'] = TRUE;
        $paginationConfig['use_page_numbers'] = TRUE;
        $paginationConfig['page_query_string'] = TRUE;
        $paginationConfig['query_string_segment'] = 'page';
        $paginationConfig['reuse_query_string'] = TRUE;
        $paginationConfig['full_tag_open'] = '<ul class="pagination pagination-lg justify-content-center flex-wrap align-items-center gap-2 m-0">';
        $paginationConfig['full_tag_close'] = '</ul>';
        $paginationConfig['first_link'] = '<span class="material-symbols-rounded">keyboard_double_arrow_left</span> First';
        $paginationConfig['first_tag_open'] = '<li class="page-item">';
        $paginationConfig['first_tag_close'] = '</li>';
        $paginationConfig['prev_link'] = '<span class="material-symbols-rounded">keyboard_arrow_left</span> Previous';
        $paginationConfig['prev_tag_open'] = '<li class="page-item">';
        $paginationConfig['prev_tag_close'] = '</li>';
        $paginationConfig['next_link'] = 'Next <span class="material-symbols-rounded">keyboard_arrow_right</span>';
        $paginationConfig['next_tag_open'] = '<li class="page-item">';
        $paginationConfig['next_tag_close'] = '</li>';
        $paginationConfig['last_link'] = 'Last <span class="material-symbols-rounded">keyboard_double_arrow_right</span>';
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
            array("tableColumn" => "FIRST NAME", "dbColumn" => "FIRST_NAME"),
            array("tableColumn" => "MIDDLE NAME", "dbColumn" => "MIDDLE_NAME"),
            array("tableColumn" => "LAST NAME", "dbColumn" => "LAST_NAME"),
            array("tableColumn" => "SUFFIX", "dbColumn" => "SUFFIX"),
            array("tableColumn" => "GENDER", "dbColumn" => "GENDER"),
            array("tableColumn" => "BIRTH DATE", "dbColumn" => "BIRTH_DATE"),
            array("tableColumn" => "AGE", "dbColumn" => "AGE"),
            array("tableColumn" => "CONTACT NUMBER", "dbColumn" => "CONTACT_NUMBER"),
            array("tableColumn" => "EMAIL ADDRESS", "dbColumn" => "EMAIL_ADDRESS"),
            array("tableColumn" => "STATUS", "dbColumn" => "STATUS")
        );

        // Table Columns not to be shown
        $tableColumnsNotShown = array(
            "USERS_ID",
            "USER_TYPE",
            "PASSWORD",
            "CREATED_DATE",
        );

        $itemTo = min((int) $totalRows, ((int) $startIndex + (int) $rowFilter));

        $usersListData = array(
            "view" => "simple_crud/users/UsersList",
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
            "itemTo" => $itemTo ? $itemTo : $totalRows,
            "pageFilters" => $pageFilters,
            "startIndex" => $startIndex,
            "rowFilter" => $rowFilter,
            "searchFor" => $searchFor,
            "sortBy" => $sortBy,
            "orderBy" => $orderBy,
            "totalRows" => $totalRows,
            "dbTotalRows" => $dbTotalRows,
            "paginationLinks" => $this->pagination->create_links()
        );

        $this->index($usersListData);
    }
}