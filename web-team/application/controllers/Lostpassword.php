<?php
class Lostpassword extends CI_Controller 
{
	function __Construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
	}
	
	function index()
	{
		if($this->session->userdata('user'))	redirect(base_url());
		
		$data['page'] = 'login';
		
		$this->load->view('candidate/includes/header-c-login');
		$this->load->view('candidate/lost-password');
		$this->load->view('candidate/includes/footer-c-login');
    }
}