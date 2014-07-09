<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HelloWorld extends CI_Controller {
	public function index() {
		$this->load->view('helloworld');
	}

	public function add() {
		$this->load->view('helloworld2');
	}
}