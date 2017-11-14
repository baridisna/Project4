<?php

class SuperAdmin extends CI_Controller{
	public function __construct(){
	    parent::__construct();
	    $this->load->model('Model_users');
	    $this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('SuperAdmin/header_superAdmin');
		$this->load->view('SuperAdmin/ranking');
		$this->load->view('SuperAdmin/footer_superAdmin');
	}
}