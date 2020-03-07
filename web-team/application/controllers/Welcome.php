<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
		// $data['page']="Dashboard";
		$this->load->view('candidate/includes/header');
		$this->load->view('candidate/includes/nav');
		$this->load->view('candidate/index');
		$this->load->view('candidate/includes/footer');
	}
}
