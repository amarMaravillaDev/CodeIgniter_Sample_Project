<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pay1st extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Models
        $this->load->model('cmai/Pay1stModel', 'Pay1st');

        // Database
        $this->load->database('PAY1ST_PROD');
    }

    public function index()
    {
        // * Main View Variables
        $viewsMainData = array(
            "documentData" => array(
                "title" => $this->db->database,
                "css" => "",
                "script" => ""
            )
        );

        // * Views
        $this->load->view('simple_crud/components/Header', $viewsMainData);
        $this->load->view('cmai/Pay1st', $viewsMainData);
        $this->load->view('simple_crud/components/Footer', $viewsMainData);
    }
}