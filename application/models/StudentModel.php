<?php 
// Added by Amar Maravilla
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class StudentModel extends CI_Model {
	public function studentData() {
		$studentClass = $this->studentClass();
		
		return $name = "Amar His Class is: " . $studentClass;
	}  
	
	private function studentClass() {
		return $class = "BSCS";
	}  

	public function students($ID) {
		if($ID == '1') {
			return $result = "This is User 1";
		} 
		else if($ID == '2') {
			return $result = "This is User 2";
		}
	}

	public function demo() {
		$title = "Demo Page (Model)";

		return $title;
	}  
}