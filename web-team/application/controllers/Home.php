<?php
class Home extends CI_Controller 
{
	public function __Construct()
	{	error_reporting(-1);
		parent:: __construct();
	}
	
	function index()
	{
		if(!$this->session->userdata('user'))	redirect(base_url().'index.php/login');

		$data['page'] = 'Dashboard';
		$this->load->view('includes/header');
		$this->load->view('includes/nav',$data);
		$this->load->view('index');
		$this->load->view('includes/footer');
	}
}
?>