<?php
class Resume extends CI_Controller 
{
	
	function index()
	{
	
		$this->load->view('candidate/includes/header');
		$this->load->view('candidate/includes/nav');
		$this->load->view('candidate/view-resume');
		$this->load->view('candidate/includes/footer');
	}
    
    
	function create()
	{
        $this->load->view('candidate/includes/header');
		$this->load->view('candidate/includes/nav');
		$this->load->view('candidate/create-resume');
		$this->load->view('candidate/includes/footer');
	}
	function edit()
	{
        $this->load->view('candidate/includes/header');
		$this->load->view('candidate/includes/nav');
		$this->load->view('candidate/pricing');
		$this->load->view('candidate/includes/footer');
	}
			
}
?>