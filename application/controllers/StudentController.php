<?php 
// Added by Amar Maravilla
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('StudentModel', 'Student');

        // $student = $this->StudentModel->studentData();

        // $student = new StudentModel;
        // $student = $student->studentData();

        $student = $this->Student->studentData();

        echo "Student Name: " . $student;
    }

    public function showData($ID) {
        // echo $ID;

        $this->load->model('StudentModel', 'Student');
        $students = $this->Student->students($ID);

        echo $students;
    }
}