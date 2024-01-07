<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {
		$this->load->view('welcome_message');
	}

	// Added by Amar Maravilla
	public function about() {
		echo "I'm About Page.";
	}
}
